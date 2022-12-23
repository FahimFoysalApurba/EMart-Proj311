{{View::make('cartHeader')}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('cssfile/display/DisplayProduct.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
    <br><br><br><br><br><br><br>
   <div class="order"><H4>Payable amount: {{" ".$price." taka"}}</H4>
   <br><br><br>
   <h4>here, Will be the payable methods</h4>
   <br><br><br>
   <a href="/buy/{{$price}}">
   <h4><button>buy</button></h4>
   </a>
 

</div>
</body>
</html>

