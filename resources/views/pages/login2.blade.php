@include('pages.header')
   

<div class="login">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="login-wave" fill-opacity="0.77"
                d="M0,320L80,266.7C160,213,320,107,480,96C640,85,800,171,960,186.7C1120,203,1280,149,1360,122.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <div class="login-left">
            <div class="image">
                <img src="{{asset('storage/images/login_background.jpg')}}">
            </div>
        </div>

        <div class="login-right">

            <div class="login_text">
                <h1>Login Now For A Real Control </h1>
                <p>Try the real powerful of management as first modern ERP medical system</p>
            </div>
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <div class="login-form-group">

                <div class="login-form-input">
                    <div class="login-icon">
                        <i class="fal fa-user-md"></i>
                    </div>
                    <div class="login-input">
                        <input type="text" name="username" placeholder="Enter UserName">
                    </div>
                </div>

                <div class="login-form-input">
                    <div class="login-icon">
                        <i class="fal fa-lock-alt"></i>
                    </div>
                    <div>
                        <input type="text" name="password"  placeholder="Please Enter Your Password">
                    </div>
                </div>

                <div class="login-pass-input-text ">
                    <a href="#"> Forget Your credentials?</a>
                </div>

                <input type="text" name="userhidd" id="userhidd" placeholder="userhidd">


                <div class="login-dropdown">

                        <div class="login-form-input-btn ">
                            <div class="login-icon-btn  ">
                                <i class="fal fa-sign-in"></i>
                            </div>
                            <div class="login-input-btn">
                                <input type="submit" value="Login" class="login-input-btn">
                            </div>
                        </div>
                        
                        <div class="login-headSelect">
                        <select name="guard">
                            <option disabled hidden selected>Log In As ?</option>
                            <option value="doctors">Doctor</option>
                            <option value="nurses">Nurses</option>
                            <option value="employes">Employees</option>
                        </select>
                    </div>
                   
                </div>

            </form>
        </div>
      
 </div>
 
    @include('pages.footer')
   