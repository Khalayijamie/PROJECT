<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use App\Models\order;

use PDF;

use Illuminate\Support\Facades\Notification;


use App\Notifications\SendEmailNotification;

use App\Models\User; 



class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','category added successfully');
    }
    public function delete_category($id){
    $data = Category::find($id);
    $data->delete();
    return redirect()->back()->with('message','category deleted successfully!!');
    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {

        $product=new product;

        $product->name=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;



        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');


    }

    public function show_product()
    {
        $product=product::all();
         return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Successfully deleted!');
    }

    public function update_product($id)
    {
        $product=product::find($id);

        $category=category::all();
        return view('admin.update_product', compact('product','category'));
    }

    
   
    public function update_product_confirm(Request $request, $id)
    {
        $product=product::find($id);

        $product->name=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->category=$request->category;
        $product->quantity=$request->quantity;

        $image=$request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$imagename;
        $product->save();  
        
        return redirect()->back()->with('message','Product updated successfully');

        }
    
    }

    public function order(){
        $order=order::all();
        return view('admin.order',compact('order'));
    }

    public function delivered($id)
    {
        $order=order::find($id);

        $order->delivery_status="delivered";

        $order->payment_status='paid';

        $order->save();

        return redirect()->back();
    }

    public function print_pdf($id)
    {
        $order=order::find($id);
       $pdf = PDF::loadView('admin.pdf',compact('order'));

       return $pdf->download('order_details.pdf');
    }

    public function send_email($id)
    {
        $order=order::find($id);
        return view('admin.email_info', compact('order'));
    }

    public function send_user_email(Request $request,$id)
    {
        $order=order::find($id);

        $details = [
            'greeting' => $request->greeting,

            'firstline' => $request->firstline,

            'body' => $request->body,

            'button' => $request->button,

            'url' => $request->url,

            'lastline' => $request->lastline,
        ];

        Notification::send($order, new SendEmailNotification($details));

        return redirect()->back();
    }

    public function searchdata(Request $request)
    {
        $searchText= $request-> search;

        $order=order::where('name','LIKE',"%searchText%")->get();

        return view('admin.order',compact('order'));
    }

    public function viewUsers()
{
    $users = User::all(); // Retrieve all users from the database

    return view('admin.users', ['users' => $users]);
}

public function viewchart()
{
    $users=User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
          ->whereYear('created_at', date('Y'))
          ->groupBy('month')
          ->orderBy('month')
          ->get();

    $labels = [];
    $data = [];
    $colors = ['#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#FF00FF', '#00FFFF', '#800000', '#008000', '#000080', '#808000', '#800080', '#008080'];
   

    for ($i=1; $i < 12; $i++)
    {
        $month = date('F', mktime(0,0,0,$i,1));
        $count = 0;

        foreach($users as $user){
            if($user->month == $i){

                $count = $user->count;
                break;
            }
        }

        array_push($labels,$month);
        array_push($data,$count);
    
    }

    $datasets = [
        [
            'label' => 'Users',
            'data' => $data,
            'backgroundColor' => $colors
        ]
        ];

        return view('admin.charts',compact('datasets', 'labels'));
    
}
public function productchart()
{
    $products = Product::all(); // Assuming you have a Product model

    $labels = [];
    $data = [];
    $colors = ['#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#FF00FF', '#00FFFF', '#800000', '#008000', '#000080', '#808000', '#800080', '#008080'];

    foreach ($products as $index => $product) {
        $count = Order::where('product_id', $product->id)
            ->whereYear('created_at', date('Y'))
            ->count();

        array_push($labels, $product->name); // Assuming you have a 'name' column in your Product model
        array_push($data, $count);
    }

    $datasets = [
        [
            'label' => 'Products',
            'data' => $data,
            'backgroundColor' => $colors
        ]
    ];

    return view('admin.productchart', compact('datasets', 'labels'));
}

}


