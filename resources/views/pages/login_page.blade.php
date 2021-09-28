@include('pages.header')

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
                        <a href="#"> Forget Your credentials?</a>
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
    @include('pages.footer')
