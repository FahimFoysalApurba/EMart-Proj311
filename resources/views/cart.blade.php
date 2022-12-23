{{View::make('cartHeader')}}

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
  <?php
   $price=0;
   ?>
   
  @foreach($products as $product)



   
  <div class="item-pro">

  <div class="content">

   <h3>{{$product->name}}</h3>
   <img src="{{asset('uploads/products/'.$product->image)}}"  alt="Image"> 
   <h4>Catagory: {{$product->catagory}}</h4>
   <h4>Current Status: {{$product->availible_status}}</h4>
   <p>{{"description: ".$product->description}}</p>
   <h5>Per: {{$product->price." taka"}}</h5>
   <h4>Copies You take: {{$product->no_of_copies}}</h4>
   <?php
    $price=$price+$product->price*$product->no_of_copies;
    ?>
   
       <button> <a href="/removeCart/{{$product->cart_id}}" > Remove From Cart</a></button>

   </div>
   </div>
   
   
  

  @endforeach
  
  
  <div class="cart">

  <h4>total: {{$price." taka"}} </h4>
    
  <a href="/orderNow/{{$price}}"><button>Order Now</button></a>
</div>
  
  
   
</div>
</body>
</html>
