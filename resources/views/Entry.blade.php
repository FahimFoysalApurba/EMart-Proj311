<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('cssfile/styleEcom.css')}}">
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   <h6>First You need to Register, then, login to use this wabsite</h6> 
    <br>
    <br>
    <form action="{{url('/register')}}">
        <input type="submit" class="btn" name="register" id="submit" value="Register" /></form>
         
        <br>
        

     <h6>If you have an account then just login</h6>
     <br>
     <br>
     <form action="{{url('/login')}}">
        <input type="submit" class="btn" name="login" id="submit" value="login" /></form>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br>
        

   </div>
          {{View::make('footer')}}
    
</body>
</html>