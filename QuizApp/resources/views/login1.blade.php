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
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <p class="forms">Username</p>
            <input type="text" id="email" name="email">
            <p class="forms">Password</p>
            <input type="password" id="password" name="password">
            <input type="submit" value="Submit">
            <p></p>

            @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror                                
            @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <br>
        </form>
    </div>
    
    <nav>
    <a href="{{route('index')}}">Home</a>
    <a href="{{route('login1')}}">Login1</a>
    <a href="{{route('signin')}}">SignIn</a>
    </nav>

</body>
</html> 