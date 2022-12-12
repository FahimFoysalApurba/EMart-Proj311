<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
    {{View::make('header')}}
    <div class="big">
    <br>
    <h6>Login</h6>
    <br>
    
    
    <form action="/LoginController" method="POST">
        @csrf
        <!-- -->
        <h4>Are you an user or, admin?</h4>
        <br>
        <select name="usertype" >
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <br>
        
        <h4>Email:</h4><br>
        <input type="text" name="email" placeholder="Put your email here">
        <br>
        
        <h4>Password:</h4><br>
        <input type="password" name="password" placeholder="Put your password here">
        <br><br>
        <button type="submit" name="submit">Login</button>

        <br><br><br><br><br><br><br><br>
    </form>
   </div>
    {{View::make('footer')}}
</body>
</html>