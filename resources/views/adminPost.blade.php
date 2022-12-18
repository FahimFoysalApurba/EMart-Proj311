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
     <div>
        <br><br>
        <form action="/PostController" method="POST" enctype="multipart/form-data">
          @csrf
           <h4>Product's name:</h4> <br> <input type="text" name="P_name" placeholder="put product's name"><br>
           <h4>Product's price:</h4>  <br> <input type="text" name="price" placeholder="put product's price"><br>
           <h4>Product's description: </h4> <br> <input type="text" name="description" placeholder="put product's description"><br>
           <h4>Number of Copies: </h4> <br> <input type="text" name="NOC" placeholder="put the number of copies"><br>
           <h4>Choose image:</h4>  <br> <input type="file" name="image"> 
           
           <br>
           <h4>Product's catagory:</h4> <br> <select name="catagory">
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Woman-Fashion</option>
                    <option value="men-Fashion">Men-Feshion</option>
                    <option value="vehicle">Vehicle</option>
                    <option value="books">Books</option>
                    <option value="cosmatics">Cosmatics</option>
                    <option value="sports">Sports-items</option>
                    <option value="baby">Baby-Item</option>
                    <option value="groceries">Groceries</option>
                </select> 
                    <br>
            <button type="submit">POST</button>

        </form>
     </div>

</body>
</html>
{{View::make('footer')}}