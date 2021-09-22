<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">


</head>
<body>
<div class="login">
        <div class="login-left">

            <div class="image">
               <img src="{{asset('storage/images/login_background.jpg')}}" >
            </div>
        </div>


        <div class="login-right">
            <div class="login_text">
                <h1>Login Now For A Real Control </h1>
                <p>Try the real powerful of management as first modern ERP medical system</p>
            </div>

            <form action="" method="" class="login_form">
                <div class="form-group">
                    <div class="form-input">
                        <div class="icon">
                            <i class="fal fa-user-md"></i>
                        </div>
                        <div class="input">
                             <input type="text" placeholder="DrKhaled" >
                        </div>
                    </div>
                    <p>inactive-Focus</p>
                </div>

                <div class="form-group">
                    <div class="form-input">
                        <div class="icon">
                            <i class="fal fa-lock-alt"></i>
                        </div>
                        <div class="input">
                             <input type="text" placeholder="Please Enter Your Password" >
                        </div>
                    </div>
                    <div class="form-text">

                        <p>Deactivate - Blur</p>
                        <a href="#"> Forget Your creedentials?</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <div class="icon">
                            <i class="fal fa-sign-in"></i>
                        </div>
                        <div class="input">
                             <input type="submit" value="Login" >
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
     <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
