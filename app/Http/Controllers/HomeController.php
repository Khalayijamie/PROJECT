<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Order;   
use Illuminate\Support\Facades\Session;
use Stripe;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
 
    public function index(){
        $product=Product::paginate(3);

        return view('home.userpage', compact('product'));
    }
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){

            $total_product=product::all()->count();

            $total_order=order::all()->count();

            $total_user=user::all()->count();

            $order=order::all();

            $total_revenue=0;

            foreach($order as $order)
            {
                $total_revenue=$total_revenue + $order->price;
            }

            $total_delivered=order::where('delivery_status', '=', 'delivered')->get()->count();

            $total_processing=order::where('delivery_status', '=', 'processing')->get()->count();

            return view('admin.home', compact('total_product','total_order', 'total_user', 'total_revenue', 'total_delivered', 'total_processing'));
        }
        else{
            $product=Product::paginate(3);

        return view('home.userpage', compact('product'));
        }
    }

    public function booking_cart(Request $request, $id){

        if(Auth::id()){

            $user=Auth::user();

           $product=product::find($id);

           $cart= new cart;

           $cart->name=$user->name;

           $cart->email=$user->email;

           $cart->phone=$user->phone;

           $cart->address=$user->address;

           $cart->user_id=$user->id;



           $cart->product_title=$product->name;

           $cart->price=$product->price * $request->quantity;

           $cart->image=$product->image;

           $cart->Product_id=$product->id;

           $cart->quantity=$request->quantity;

           $cart->save();

           Alert::success('Your reservation has been made successfully','We have reserved a space for you');
           
           return redirect()->back();
        }

        else{

            return redirect('login');
        }
        

    }

    public function show_cart(){

        $id=Auth::user()->id;

        $cart=Cart::where('user_id','=',$id)->get();
        return view('home.showcart', compact('cart'));
    }

    public function remove_cart($id){

        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();
    }

    public function cash_order(){
        $user=Auth::user();

        $userid=$user->id;

        $data=Cart::where('user_id','=',$userid)->get();   
        
        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;


            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->Product_id;

            $order->payment_status='Cash Payment';
            $order->delivery_status= 'processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();


        }
        
        return redirect()->back()->with('message','We have recived your reservation. We will contact you soon.');

    }

    public function stripe($totalprice){
        return view('home.stripe', compact('totalprice'));
    }

    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thank you for your payment." 
        ]);

        $user=Auth::user();

        $userid=$user->id;

        $data=Cart::where('user_id','=',$userid)->get();   
        
        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;


            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->Product_id;

            $order->payment_status='Paid';
            $order->delivery_status= 'processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();


        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }

    public function show_order()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $userid=$user->id;

            $order=order::where('user_id', '=', $userid)->get();
            return view('home.order', compact('order'));
        }
        else{
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order=order::find($id);

        $order->delivery_status='You cancelled the order';

        $order->save();

        return redirect()-back();
    }

    public function userpage()
    {
        $product = Product::paginate(3);

        return view('home.userpage', compact('product'));
    }

    public function about()
    {
       
        return view('home.about');
    }

    
    public function blog()
    {
        return view('home.blog');
    }

    public function blogDetails()
    {
        return view('home.blog_details');
    }

    public function elements()
    {
        return view('home.elements');
    }


    public function contact()
    {
        return view('home.contact');
    }

    public function submitContactForm(Request $request)
    {
        // Handle form submission logic here
        // You can send an email, save to database, etc.

        // For now, let's just redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}






