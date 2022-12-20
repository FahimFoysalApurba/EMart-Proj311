<!-- <h1>This is Admin Profile</h1> -->
{{View::make('headProfileAdmin')}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('cssfile/profile.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="profile">
   @foreach($admin as $admin)
    <br>
    <br><br><br><br><br><h6>
        Admin Name: {{$admin->name}}
    </h6>
    <br>
    <h6>
        Admin email: {{$admin->email}}
    </h6>
    <br>
    <h6>
        Admin Password: {{$admin->password}}
    </h6>
         
         @endforeach
         <br>
        <h6>Number of Users: {{$count}}</h6> 
        <br>
        <h6>Number of Products: {{$count_1}}</h6> 
        <br><br><br><br>

 </div>
 {{View::make('footer')}}
</body>
</html>
