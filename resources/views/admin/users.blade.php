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
        background: skyblue;
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

                <h2 class="font_size"> Users</h2>

                
        <table class="centre">
            <tr class="th_color">
                <th class="th_deg">Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Address</th>
                    
            </tr>

            @foreach($users as $user)

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
               
               
            </tr>

            @endforeach
        </table>
     
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>