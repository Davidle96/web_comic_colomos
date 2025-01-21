<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/form_login.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <p>colomos</p>
            <p style="font-size: 27px">Truyện tranh dành cho người việt</p>
        </div>

        <form action="/login" method="POST">
            <div class="form-group">
                <label for="" class="form-label title">Email</label>
                <input type="text" class="form-control input" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="" class="form-label title">Username</label>
                <input type="text" class="form-control input" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="" class="form-label title">Password</label>
                <input type="password" class="form-control input" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="" class="form-label title">Password again</label>
                <input type="password" class="form-control input" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
</body>
</html>