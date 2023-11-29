<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style type="text/css">

    .div_centre{
        text-align: center;
        padding-top: 40px;
    }

    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px;

    }

    .input_color{
        color: black;
    }
    
    .centre{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
    }

    td, th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
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
            <h2 class="h2_font"> <i><u>ADD CATEGORY</u></i> </h2>  
            
            <form action="{{url('/add_category')}}" method="POST">
                @csrf
                <input class="input_color" type="text" name="category" placeholder="Write category name">


                <input type="submit"  class="btn btn-primary" name="submit" value="Add category">
            </form>
        </div>

        <table class="centre" border="1">
            <tr>
                <th colspan="1">Category Name</th>
                <th colspan="1">Action</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->category_name}}</td>
                <td>
                    <a onclick="return confirm('Are you sure you want to delete this')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">delete</a>
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