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
    <br><br><br>

  <div class="display">
    <a href="#">
  @foreach($products as $product)
  <a href="#">
   Product ID: {{$product["id"]}} 
   <img src="{{asset('storage/'.$product->image)}}" >
   {{$product["name"]}}
  </a>
  @endforeach
     </a>
</div>
</body>
</html>
{{View::make('footer')}}