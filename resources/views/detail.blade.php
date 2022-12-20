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
  
  <div class="item-detail">

  <div class="content-detail">

   
   <h3>{{$product["name"]}}</h3>
  
   <img src="{{asset('uploads/products/'.$product->image)}}"  alt="Image"> 
   <h4>Catagory: {{$product["catagory"]}}</h4>
   <h4>Current Status: {{$product["availible_status"]}}</h4>
   <p>{{"description: ".$product["description"]}}</p>
   <h5>{{$product["price"]." taka"}}</h5>
   <form action="/add_to_cart" method="POST">
    @csrf
    
    <input type="hidden" name="product_id" value="{{$product['id']}}">
    <h4>How many copies:</h4><input type="text" name="no_of_copies" value="1" >
   <button class="cart">Add To Cart</button>
   </form>

   </div>
   </div>
  <div class="goBack"><a href="/HomeUser"><= Go Back</a></div>
   
</div>
</body>
</html>
