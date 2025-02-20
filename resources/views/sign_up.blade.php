<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/form_login.css') }}">
    {{-- <script src="./javascript/hover-avar-sign_up.js"></script> --}}
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <p>colomos</p>
            <p style="font-size: 27px">Truyện tranh dành cho người việt</p>
        </div>

        <div class="avar-sign_up-wrapper">
            <div class="avar-sign_up avarta">
                <img src="{{ asset('css/imgs/avarta_user.jpg') }}" alt="">
            </div>
            <p class="text-avar-sign_up">Sign up now to see hot stories</p>
        </div>

        <form action="/login" method="get" class="form-group">
            <div class="form-input">
                <label for="" class="form-label title">Email</label>
                <input type="text" class="form-control input" placeholder="Username">
            </div>

            <div class="form-input">
                <label for="" class="form-label title">Username</label>
                <input type="text" class="form-control input" placeholder="Username">
            </div>

            <div class="form-input">
                <label for="" class="form-label title">Password</label>
                <input type="password" class="form-control input" placeholder="Password">
            </div>

            <div class="form-input">
                <label for="" class="form-label title">Password again</label>
                <input type="password" class="form-control input" placeholder="Password">
            </div>
            
            <button type="submit" formaction="/" class="btn btn-sign_in">Sign Up</button>
            <button type="reset" class="btn btn-reset">Reset</button>
        </form>
    </div>
</body>
</html>