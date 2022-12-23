<!-- <h1>This is user's Dashboard</h1>
<br>
<h2>user id, {{session('user')}}</h2> -->
{{View::make('HeadUserDash')}}
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

  @if($product["availible_status"]=="availible")


   
  <div class="item-pro">

  <div class="content">

  <a href="detail/{{$product['id']}}">
   <h3>{{$product["name"]}}</h3>
   <img src="{{asset('uploads/products/'.$product->image)}}"  alt="Image"> 
   <h4>Catagory: {{$product["catagory"]}}</h4>
   <h4>Copies Availible: {{$product["No_of_copies"]}}</h4>
   <p>{{"description: ".$product["description"]}}</p>
   <h5>{{$product["price"]." taka"}}</h5>


    
    <!-- <form action="/add_to_cart/{{$product['id']}}" method="POST">
    @csrf
    
    <input type="text" name="product_id" value="{{$product['id']}}">
    <input type="hidden" name="no_of_copies" value="1">
   <button class="cart">Add To Cart</button> -->

  
   </a>

   </div>
   </div>
   
   
   @endif

  @endforeach
  
   
</div>
</body>
</html>
