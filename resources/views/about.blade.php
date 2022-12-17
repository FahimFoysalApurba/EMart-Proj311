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
           

            <li><a href="/entry">Home</a></li>
            <li><a class="active" href="#">About</a></li>
            <li><a href="/contact">Contact</a></li> 
                       
        </ul>
    </nav>



    
    <div class="big">
    <br><br><br><br><br><br><br><br><br>
        <h6>This is an e-commerce wabsite, Where, there is an <br>
        admin portal and a user portal. Users should enter <br>
        through user's portal <br>
        There are different catagory products <br><br>
        You can check it out after register and login in your profile.
    </h6>
    <br><br><br><br><br><br><br><br><br><br>

    </div>

    {{View::make('footer')}}

    </body>
</html>