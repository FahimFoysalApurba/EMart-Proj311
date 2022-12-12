<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('cssfile/register.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>

            {{View::make('header')}}
           
   <div class="big">
    <br>
    <br>
    <h6>Register</h6>
    <br>
    <br>
    
    <form action="/RegisterController" method="POST">
        @csrf
        <!-- -->

        Name:<input type="text" name="name" placeholder="Put your name here">
        <br>
        <br>
        Email:<input type="text" name="email" placeholder="Put your email here">
        <br>
        <br>
        Password:<input type="password" name="password" placeholder="Put your password here">
        <br><br>
        <button type="submit" name="submit">Submit</button>
       

   
        <br><br><br><br><br><br><br><br><br><br><br>
    </form>
   </div>
 
   
          {{View::make('footer')}}

     
    
</body>
</html>