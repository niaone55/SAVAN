<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/pg2.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type="{{asset('pg2.css')}}">


    <title>Document</title>
</head>
<body>

.login
    <h2>Register</h2> 

    <form method="post" action="{{route('pg2')}}">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="E-Mail Address">
        <input type="password" name="password" placeholder="password">
        <input type="submit" class="animated" value="Register">
    </form>
 
</body>
</html>