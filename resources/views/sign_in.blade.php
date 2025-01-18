<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sign_in.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Lora:ital,wght@1,400..700&family=Merienda:wght@300..900&family=Noto+Sans+Wancho&family=Playwrite+US+Modern+Guides&display=swap');
        </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="avarta">
            <img src="{{ asset('') }}" alt="">
        </div>

        <form action="/login" method="POST" class="form-group">
            <div class="form-input">
                <label for="" class="title">Username or Email</label>
                <input type="text" class="input" placeholder="Username">
            </div>
            <div class="form-input">
                <label for="" class="title">Password</label>
                <input type="password" class="input" placeholder="Password">
            </div>

            <button type="submit" class="btn-forgot">Forgot Password?</button>
            
            <button type="submit" class="btn btn-sign_in">Sign In</button>
            <button type="submit" class="btn btn-sign_up">Sign Up</button>
        </form>
    </div>
</body>
</html>