
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin | Mocal's</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/images/fav.png')}} />
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- Fonts -->
    <!--<link href="./js/fonts.css" rel="stylesheet" />-->
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/pages/register/register.css') }}" />
</head>
<body>
<section class="signin-bg">
      <div class="d-flex align-items-center justify-content-between h-100 flex-wrap">
        <div class="mocal-animation">
          <h1 class="TextWhite">
            <span class="OpacityFifty">Kickstart Your</span><br />
            Time Management Regime With <span class="TextYellow">MoCal</span>
          </h1>
          <h6 class="TextWhite">
            Risk-Free 30-Day Trial <br />
            <span class="OpacityFifty">No Credit Card Details Required</span>
          </h6>
            <dotlottie-player src="https://lottie.host/881e64b8-e799-49f1-a3be-6d247d51fbbd/goJ2dFDvzS.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
        
        <div class="signin-card">
            <div class="text-center mt-4 mb-5">
             hello, thank you for joining us, soon we will approve your registration. </br>
            When your account approved, you will receive your credentials on <b>{{ request()->email }}</b> </br>
            Thank you </br></br>
             <div class="text-center mb-5">
                  <a href="{{ url('/register/') }}" 
                    class="btn-purple-fill btn-width-sm mt-5 nextScreen next"
                  >Back to home</a>
            </div>
        </div>
        </div>
    
    @livewireScripts
     <div class="signin-circle-animation">
          <img src="{{ asset('public/images/register-assets/clock-animation.gif')}}" />
          <h3>We'll help you find the perfect time with your clients. Please enter your details to start with and we'll fit you right in.</h3>
        </div>
      </div>
    </section>
    
</body>
</html>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Registration success!</title>-->
<!--    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">-->
<!--</head>-->
<!--<body class="d-flex justify-content-center p-4 pt-4">-->
<!--    <div class="card">-->
<!--        <div class="card-header bg-success text-white">Registration complete</div>-->
<!--        <div class="card-body">-->
<!--            hello <b>{{ request()->name }}</b>, thank you for joining us, soon we will approve your registration. </br>-->
<!--            When your account approved, you will receive your credentials on <b>{{ request()->email }}</b> </br>-->
<!--            Thank you </br></br>-->
<!--            <a href="/" class="btn btn-sm btn-primary">Back to home</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</body>-->
<!--</html>-->