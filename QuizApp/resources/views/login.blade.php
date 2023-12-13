<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" type="image/x-icon" href="/pictures/loginIcon.ico">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content">
        <p></p>
        <h1>Login</h1>
        <form action="">
            <p class="forms">Username</p>
            <input type="text" id="username" name="username">
            <p class="forms">Password</p>
            <input type="password" id="password" name="password">
            <input type="submit" value="Submit">
            <p></p>
            <br>
        </form>
    </div>
    
    <nav>
    <a href="{{route('index')}}">Home</a>
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('signin')}}">SignIn</a>
    </nav>

</body>
</html> 