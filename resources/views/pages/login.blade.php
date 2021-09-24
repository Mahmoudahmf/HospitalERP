<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

    <style>
      body{
    margin: 0;
    padding: 0;
    background: url(../img/about_banner.jpg);
    background-size: cover;
    font-family: sans-serif;
}

.Loginbox{
    width: 320px;
    height: 420px;
    background: #034;
    color:#fff;

    position: absolute;
    top:50%;
    left: 50%;

    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    display: none;
   
}



h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.Loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.Loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.Loginbox input[type="text"],input[type="password"]
{
    border:none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: yellow;
    font-size: 15px;
}

.Loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color:#fff;
    font-size:18px;
    border-radius: 20px;
}

.Loginbox input[type="submit"]:hover
{
cursor: pointer;
background: #ffc107;
color: #000;
}

.Loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.Loginbox a:hover{
    color:#ffc107;
}

    </style>
</head>
<body>
       <div>
             <select id="sectionChooser">
                  <option value="" selected disabled>اختار من القائمة</option>
                   <option value="doctors">Login Doctor </option>
                    <option value="nurses">Login Nurse </option>
                     <option value="employes">Login Employe </option>
              </select>
        </div>
   
    <div class="Loginbox" id="nurses">
      
        <h1>Login Nurse</h1>
        <hr>
        <form method="POST" action="{{ route('login.nurses') }}">
                    @csrf
            <p>UserName</p>
            <input type="text" name="userName" placeholder="Enter UserName" required>
            <p>Password</p>
            <input type="text" name="password" placeholder="Enter Password" required>
            <input type="submit" name="LoginButton" value="submit">
        </form>
    </div>

    <div class="Loginbox" id="doctors">
      
        <h1>Login Doctor</h1>
        <hr>
        <form method="POST" action="{{ route('login.doctors') }}">
                    @csrf
            <p>UserName</p>
            <input type="text" name="username" placeholder="Enter UserName" required>
            <p>Password</p>
            <input type="text" name="password" placeholder="Enter Password" required>
            <input type="submit" name="LoginButton" value="submit">
        </form>
    </div>

    <div class="Loginbox" id="employes">
      
      <h1>Login Employes</h1>
      <hr>
      <form method="POST" action="{{ route('login.employes') }}">
                  @csrf
          <p>UserName</p>
          <input type="text" name="username" placeholder="Enter UserName" required>
          <p>Password</p>
          <input type="text" name="password" placeholder="Enter Password" required>
          <input type="submit" name="LoginButton" value="submit">
      </form>
  </div>

    <script type="text/javascript"></script>
    <script>
    $(document).ready(function() {

       $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.Loginbox').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    });
    </script>
</body>
</html>