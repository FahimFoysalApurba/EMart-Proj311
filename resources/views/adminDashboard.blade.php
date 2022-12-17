{{View::make('HeadAdminDash')}}
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('cssfile/dashboard.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
    <div class="bar">
      <H2>Create New Post:</H2>
      <br><br>
      <div class="post">
        <a href="/adminPost">+</a>

      </div>
      <br><br><br>
      </div>
      <div class="bar">
      <H2>Give Offer on Product:</H2>
      <br><br>
      <div class="post">
        <a href="/GiveOffer">+</a>

      </div>
      <br><br><br>
      </div>
    
      <div>
        <a href="/DisplayProCon">Display Products</a>
        
      </div>


</body>
</html>
{{View::make('footer')}}