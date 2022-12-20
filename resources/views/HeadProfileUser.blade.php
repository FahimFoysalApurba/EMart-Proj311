<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('cssfile/header.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
    <nav>
        <label class="logo">BK.com</label>
        <ul>
            <li>
                <select name="catagory">Catagory
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Woman-Fashion</option>
                    <option value="men-Fashion">Men-Fashion</option>
                    <option value="vehicle">Vehicle</option>
                    <option value="books">Books</option>
                    <option value="cosmatics">Cosmatics</option>
                    <option value="sports">Sports-items</option>
                    <option value="baby">Baby-Item</option>
                    <option value="groceries">Groceries</option>
                </select> </li>

                <li> 
                <Form action="#" method="Post"><input type="text" name="search" placeholder="Search your item"> 
                <button type="submit">Search</button>
                </Form></li>

            <li><a href="/HomeUser">Home</a></li>
            <li><a class="active" href="#">User Profile</a></li>
            <li><a href="/CartController">Cart</a></li>   
            <li><a href="/logout">logout</a></li>
                
            
        </ul>
    </nav>
    
</body>
</html>