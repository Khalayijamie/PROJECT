<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style type="text/css">

.centre{
    margin:auto;
    width: 50%;
    border: 2px solid white;
    text-align: center;
    margin-top:40px;

}

.font_size{
    text-align:center;
    font-size: 40px;
    padding-top: 20px;
}

.img_size{
    width: 300px;
    height: 80px;
}

.th_color{
    background: brown;
}

.th_deg{
    padding: 20px;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif

                <h2 class="font_size"> Products</h2>

                <table class="centre">
                    <tr class="th_color">
                        <th class="th_deg">Product</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Category</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount price</th>
                        <th class="th_deg">Product Image</th>
                        <th class="th_deg">edit</th>
                        <th class="th_deg">delete</th>
                    </tr>

                    @foreach($product as $product)

                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product', $product->id)}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="{{url('delete_product', $product->id)}}" href="">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>