<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/form_login.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Lora:ital,wght@1,400..700&family=Merienda:wght@300..900&family=Noto+Sans+Wancho&family=Playwrite+US+Modern+Guides&display=swap');
        </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <p>colomos</p>
            <p style="font-size: 27px">Truyện tranh dành cho người việt</p>
        </div>

        <div class="avarta">
            <img src="{{ asset('css/imgs/avarta_user.jpg') }}" alt="">
        </div>

        <form action="" method="GET" class="form-group">
            <div class="form-input">
                <label for="" class="title">Username or Email</label>
                <input type="text" class="input" placeholder="Username">
            </div>
            <div class="form-input">
                <label for="" class="title">Password</label>
                <input type="password" class="input" placeholder="Password">
            </div>

            <button type="submit" class="btn-forgot">Forgot Password?</button>
            
            <button type="submit" formaction="/" class="btn btn-sign_in">Sign In</button>
            <button type="submit" formaction="/signup" class="btn btn-sign_up">Sign Up</button>
        </form>
    </div>
</body>
</html>