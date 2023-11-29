<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

        .div_centre {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color {
            color: #000;
            padding-bottom: 40px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 20px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
                    <h1 class="font_size"><u>Add Product</u></h1>

                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="div_design">
                            <label>Name:</label>
                            <input class="text_color" type="text" name="title" placeholder="Title" required="">
                        </div>

                        <hr>

                        <div class="div_design">
                            <label>Description:</label>
                            <input class="text_color" type="text" name="description" placeholder="Description" required="">
                        </div>

                        <hr>

                        <div class="div_design">
                            <label>Price:</label>
                            <input class="text_color" type="number" name="price" placeholder="Price" required="">
                        </div>

                        <hr>

                        <div class="div_design">
                            <label>Discount Price:</label>
                            <input class="text_color" type="number" name="dis_price" placeholder="Discount">
                        </div>

                        <hr>

                        <div class="div_design">
                            <label>Quantity:</label>
                            <input class="text_color" type="number" min="0" name="quantity" placeholder="Quantity" required="">
                        </div>

                        <hr>

                        <div class="div_design">
                            <label>Category:</label>
                            <select class="text_color" name="category" required="">
                                <option value="" selected="">Add a Category</option>
                                @foreach($category as $cat)
                                <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr>

                        <div class="div_design">
                            <label>Image:</label>
                            <input type="file" name="image" required="">
                        </div>

                        <div class="div_design">
                            <input type="submit" value="Add Product" class="btn btn-primary">
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
