<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
   @include('admin.css')

   <style type="text/css">

   label{
    display:inline-block;
    width:200px;
    font-size: 15px;
    font-weight: bold;
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

          <form action="{{url('send_user_email', $order->id)}}" method="POST">
            @csrf
            
          <h1> Send email to {{$order->email}}</h1>

          <div style="padding-left: 35%; padding-top: 30px;">
              <label>Email Greeting: </label>
              <input style="color: black" type="text" name="greeting">
            </div>

            <div style="padding-left: 35%; padding-top: 30px;">
              <label>Email Firstline: </label>
              <input style="color: black" type="text" name="firstline">
            </div>

            <div style="padding-left: 35%; padding-top: 30px;">
              <label>Email Body: </label>
              <input style="color: black" type="text" name="body">
            </div>

            <div style="padding-left: 35%; padding-top: 30px;">
              <label>Email button name: </label>
              <input style="color: black" type="text" name="button">
            </div>


            <div style="padding-left: 35%; padding-top: 30px;">
              <label>Email Url: </label>
              <input style="color: black" type="text" name="url">
            </div>

            <div style="padding-left: 35%; padding-top: 30px;">
              <label>Email last line: </label>
              <input style="color: black" type="text" name="lastline">
            </div>

            <div style="padding-left: 35%; padding-top: 30px;">
            <input type="submit" value="Send Email" class="btn btn-primary">
            </div>

          </form>







    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>