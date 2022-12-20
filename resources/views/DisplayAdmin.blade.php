{{View::make('HeaderAdminDasPro')}}
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('cssfile/display/DisplayProduct.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
   

  <div class="display">
  
   
  @foreach($products as $product)
  <div class="item-pro">

  <div class="content">
  
   <h4>Product ID: {{$product["id"]}} </h4>
   <img src="{{asset('uploads/products/'.$product->image)}}"  alt="Image"> 
   <h3>{{$product["name"]}}</h3>
   <p>{{"description: ".$product["description"]}}</p>
   <h5>{{$product["price"]." taka"}}</h5>
   <button class="cart">Add To Cart</button>

   </div>
   </div>

  @endforeach
  
   
</div>
</body>
</html>
<!-- {{View::make('footer')}} -->
