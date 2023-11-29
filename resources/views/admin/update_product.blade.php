<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
   @include('admin.css')

   <style type="text/css">

   .div_centre{
    text-align: center;
    padding-top: 40px;
   }
   .font_size{
    font-size: 40px;
    padding-bottom: 40px;
   }
   .text_color{
    color: #000;
    padding-bottom: 40px;

   }

   label{
    display: inline-block;
    width: 200px;
   }

   .div_design{
    padding-bottom: 20px;
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



                <div class="div_centre">
                    <h1 class="font_size">Update product</h1>

                    <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                 <div class="div_design">
                    <label>name :</label>
                    <input class="text_color" type="text" name="title" placeholder="title" required="" value="{{$product->name}}">
                 </div>

                 <div class="div_design">
                    <label>Description :</label>
                    <input class="text_color" type="text" name="description" placeholder="description" required="" value="{{$product->description}}">
                 </div>

                 <div class="div_design">
                    <label>Price :</label>
                    <input class="text_color" type="number" name="price" placeholder="price" required="" value="{{$product->price}}">
                 </div>

                 <div class="div_design">
                    <label>Discount Price</label>
                    <input class="text_color" type="number" name="dis_price" placeholder="Discount" value="{{$product->discount_price}}">
                 </div>

                 <div class="div_design">
                    <label>Quantity :</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="title" required="" value="{{$product->quantity}}">
                 </div>

                 <div class="div_design">
                    <label>Category :</label>
                   <select class="text_color" name="category" required="" >
                    <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                    @foreach($category as $category)

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                    @endforeach

                     
                   </select>
                 </div>

                 <div class="div_design">
                    <label>Current Image :</label>
                    <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}"
                 </div>
                 
                 <div class="div_design">
                    <label>Change Image :</label>
                    <input type="file" name="image" >
                 </div>

                 <div class="div_design">
                    
                    <input type="submit" value="Edit_Product" class="btn btn-primary" >
                 </div>

                    </form>

                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>