<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content">

        <h1>Sign In</h1>
        <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="forms">E-Mail</p>
            <input type="email" id="email" name="email">
            <p class="forms">Username</p>
            <input type="text" id="username" name="username">
            <p class="forms">Password</p>
            <input type="password" id="password" name="password">
            <p class="forms">Confirm</p>
            <input type="password" id="confirm" name="confirm"> <br> <br>
            <input type="submit" value="Submit">
            <p></p>
            <br>
        </form>


    </div>    

    

    <nav>
    <a href="{{route('index')}}">Home</a>
    <a href="{{route('login1')}}">Login</a>
    <a href="{{route('signin')}}">SignIn</a>
    </nav>

</body>
</html>

