<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>
    
    <header></header>
    <nav>
        <ul>
            <li><a href="index.blade.php">Home</a></li>
            <li></li>
            <li></li>
            <li><a href="login.blade.php"><img src="pictures/notLoggedIn.png" alt="Login"></a></li>
        </ul>
    <main>
        <hr/>
        {{ $slot}}
    </main>
    </nav>
    <footer></footer>

</body>
</html>