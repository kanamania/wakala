<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>@yield('title', 'Welcome') - Wakala Registration System</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/LineIcons.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <style>
          @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
          ::selection{
              background: #53f;
              color: #fff;
          }
          .wrapper{
              overflow: hidden;
              background: #fff;
              padding: 30px;
              border-radius: 5px;
              box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
          }
          .wrapper .title-text{
              display: flex;
              width: 200%;
          }
          .wrapper .title{
              width: 50%;
              font-size: 35px;
              text-align: center;
              transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
              color: #777676;
          }
          .wrapper .slide-controls{
              position: relative;
              display: flex;
              height: 50px;
              width: 100%;
              overflow: hidden;
              margin: 30px 0 10px 0;
              justify-content: space-between;
              border: 1px solid lightgrey;
              border-radius: 5px;
          }
          .slide-controls .slide{
              height: 100%;
              width: 100%;
              color: #fff;
              font-size: 18px;
              font-weight: 500;
              text-align: center;
              line-height: 48px;
              cursor: pointer;
              z-index: 1;
              transition: all 0.6s ease;
          }
          .slide-controls label.signup{
              color: #000;
          }
          .slide-controls .slider-tab{
              position: absolute;
              height: 100%;
              width: 50%;
              left: 0;
              z-index: 0;
              border-radius: 5px;
              background: -webkit-linear-gradient(left, #53f, #2acbf6);
              transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
          }
          input[type="radio"]{
              display: none;
          }
          #signup:checked ~ .slider-tab{
              left: 50%;
          }
          #signup:checked ~ label.signup{
              color: #fff;
              cursor: default;
              user-select: none;
          }
          #signup:checked ~ label.login{
              color: #000;
          }
          #login:checked ~ label.signup{
              color: #000;
          }
          #login:checked ~ label.login{
              cursor: default;
              user-select: none;
          }
          .wrapper .form-container{
              width: 100%;
              overflow: hidden;
          }
          .form-container .form-inner{
              display: flex;
              width: 200%;
          }
          .form-container .form-inner form{
              width: 50%;
              transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
          }
          .form-inner form .field{
              height: 50px;
              width: 100%;
              margin-top: 20px;
          }
          .form-inner form .field input{
              height: 100%;
              width: 100%;
              outline: none;
              padding-left: 15px;
              border-radius: 5px;
              border: 1px solid lightgrey;
              border-bottom-width: 2px;
              font-size: 17px;
              transition: all 0.3s ease;
          }
          .form-inner form .field input:focus{
              border-color: #2acbf6;
              /* box-shadow: inset 0 0 3px #fb6aae; */
          }
          .form-inner form .field input::placeholder{
              color: #999;
              transition: all 0.3s ease;
          }
          form .field input:focus::placeholder{
              color: #b3b3b3;
          }
          .form-inner form .pass-link{
              margin-top: 5px;
          }
          .form-inner form .signup-link{
              text-align: center;
              margin-top: 30px;
          }
          .form-inner form .pass-link a,
          .form-inner form .signup-link a{
              color: #2acbf6;
              text-decoration: none;
          }
          .form-inner form .pass-link a:hover,
          .form-inner form .signup-link a:hover{
              text-decoration: underline;
          }
          form .btn{
              height: 50px;
              width: 100%;
              border-radius: 5px;
              position: relative;
              overflow: hidden;
          }
          form .btn .btn-layer{
              height: 100%;
              width: 300%;
              position: absolute;
              left: -100%;
              background: -webkit-linear-gradient(right, #53f, #2acbf6, #53f, #2acbf6);
              border-radius: 5px;
              transition: all 0.4s ease;;
          }
          form .btn:hover .btn-layer{
              left: 0;
          }
          form .btn input[type="submit"]{
              height: 100%;
              width: 100%;
              z-index: 1;
              position: relative;
              background: none;
              border: none;
              color: #fff;
              padding-left: 0;
              border-radius: 5px;
              font-size: 20px;
              font-weight: 500;
              cursor: pointer;
              line-height: 35px;
          }
          .select2-container span {
              width: 100%;
          }
          .select2-container .select2-selection--single {
              height: 50px !important;
          }

          .select2-container--default .select2-selection--single .select2-selection__arrow {
              height: 50px !important;
          }

          .select2-container--default .select2-selection--single .select2-selection__rendered {
              line-height: 50px !important;
          }
          .select2-selection__placeholder {
              line-height: 50px !important;
          }
          .form-container.login-now {
              height: 330px;
          }
          .form-container.register-now {
              height: 1100px;
          }

      </style>
      @yield('styles')

  </head>

  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area position-relative" style="min-height: 900px;">
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar position-relative">
        <div class="container">
          <a href="/" class="navbar-brand"><img src="/assets/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
        </div>
      </nav>
      <div class="container position-relative mb-50" style="top: 30px;">
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">You are Using Free Lite Version</h2>
              <p>Please, Purchase full version of Slick to get all pages, features and permission to use in commercial projects</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
              @if(isset($status))
                  <div class="alert alert-{{ $status['type'] == 'success' ? 'success' : 'danger' }}">
                      {!! $status['text'] !!}
                  </div>
              @else
              <div class="wrapper">
                  <div class="title-text">
                      <div class="title login">
                          Login Form
                      </div>
                      <div class="title signup">
                          Signup Form
                      </div>
                  </div>
                  <div class="form-container login-now">
                      <div class="slide-controls">
                          <input type="radio" name="slide" id="login" checked>
                          <input type="radio" name="slide" id="signup">
                          <label for="login" class="slide login">Login</label>
                          <label for="signup" class="slide signup">Signup</label>
                          <div class="slider-tab"></div>
                      </div>
                      <div class="form-inner">
                          <form action="{{ route('front.login') }}" class="login">
                              @csrf
                              <div class="field">
                                  <input name="phone" type="number" placeholder="Phone" required>
                              </div>
                              <div class="field">
                                  <input name="password" type="password" placeholder="Password" required>
                              </div>
                              <div class="field btn">
                                  <div class="btn-layer"></div>
                                  <input type="submit" value="Login" />
                              </div>
                          </form>
                          <form action="{{ route('front.register') }}" class="signup">
                              @csrf
                              <div class="field">
                                  <input name="firstname" type="text" placeholder="First name" required>
                              </div>
                              <div class="field">
                                  <input name="lastname" type="text" placeholder="Last name" required>
                              </div>
                              <div class="field">
                                  <input name="phone" type="number" placeholder="Phone" required>
                              </div>
                              <div class="field">
                                  <select class="form-control" id="region" name="region_id" data-placeholder="Select region" required>
                                      <option></option>
                                      @foreach($regions as $region)
                                          <option value="{{ $region->id }}">{{ $region->name }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="field">
                                  <select class="form-control" id="district" name="district_id" data-placeholder="Select district" required>
                                      <option></option>
                                  </select>
                              </div>
                              <div class="field">
                                  <input name="ward" type="text" placeholder="Ward" required>
                              </div>
                              <div class="field">
                                  <input name="street" type="text" placeholder="Street" required>
                              </div>
                              <div class="field">
                                  <input name="agent_name" type="text" placeholder="Agent name" required>
                              </div>
                              <div class="field">
                                  <input name="agent_number" type="text" placeholder="Agent number" required>
                              </div>
                              <div class="field">
                                  <input name="super_agent_name" type="text" placeholder="Super Agent Name" required>
                              </div>
                              <div class="field">
                                  <input name="super_agent_number" type="text" placeholder="Super Agent Number" required>
                              </div>
                              <div class="field">
                                  <input name="password" type="password" placeholder="Password" required>
                              </div>
                              <div class="field">
                                  <input name="password_confirmation" type="password" placeholder="Confirm password" required>
                              </div>
                              <div class="field btn">
                                  <div class="btn-layer"></div>
                                  <input type="submit" value="Signup" />
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              @endif
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->


    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content">
        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>All rights reserved</p>
                </div>

              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->


    <!-- Go To Top Link -->
    <a href="/assets/#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/assets/js/jquery-min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.js"></script>
    <script src="/assets/js/jquery.nav.js"></script>
    <script src="/assets/js/scrolling-nav.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/nivo-lightbox.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script>
        $("select").select2();
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const districts = {!! $districts->toJson() !!};
        signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
            $(".form-container").removeClass('login-now').addClass('register-now');
        });
        loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
            $(".form-container").addClass('login-now').removeClass('register-now');
        });
        $("#region").on('change', e => {
            e.preventDefault();
            const regionId = $("#region").val();
            const selectedDistricts = districts.filter(item => item.region_id == regionId);
            $("#district").empty();
            if(selectedDistricts.length){
                $.each(selectedDistricts, function(item){
                    $("<option>", {value: this.id}).text(this.name).appendTo($("#district"));
                });
            }
        })
    </script>
    @yield('scripts')
  </body>
</html>
