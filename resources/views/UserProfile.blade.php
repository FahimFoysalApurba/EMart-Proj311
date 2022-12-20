{{View::make('HeadProfileUser')}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('cssfile/profile.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
<div class="profile">
  
    <br>
    <br><br><br><br><br><h6>
 
        User Name: {{$user[0]}}
    </h6>
    <br>
    <h6>
        User email: {{$user[1]}}
    </h6>
    <br>
    <h6>
        User Password: {{$user[2]}}
    </h6>
         
     
         <br>
         <br>
     
        <br>
        <br>
        <h6>Number of Products In the galary: {{$count_1}}</h6> 
        <br><br><br><br><br>

 </div>

</body>
</html>
{{View::make('footer')}}