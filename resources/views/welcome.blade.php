<!DOCTYPE html>
<html>
<head>
    <title>Samriddhi School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:site" content="@Binayak4820 && @AnuragTamrakar4 && @me_sijan">
    <meta name="keywords" content="School" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Styles files -->
    <link href="{{ asset('splash/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('splash/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
</head>
<body>
<!-- main -->
<div id="app">
    <div class="layouts-main">
    <div class="bg-layer">
        <h1>Samriddhi School</h1>
        <div class="header-main" style="margin-top: 20px;">
            <div class="main-icon">
                <img src="{{ asset('splash/images/logo.jpg')}}" alt="Samriddhi School" height="100px" width="100px">
            </div>
            <div class="header-left-bottom">
                <form method="POST" action="{{ url('entrance-login') }}">
                    @csrf
                    <div class="icon1 @error('name') errorcheck @enderror">
                        <div style="display: flex;">
                            <span class="fa fa-user"></span>
                            <input type="text" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="username" autofocus>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong style="font-size: 14px;color: red;">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="icon1  @error('password') errorcheck @enderror" style="display: flex;">
                        <div style="display: flex;">
                            <span class="fa fa-lock"></span>
                            <input type="password" placeholder="Password" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                 <strong style="font-size: 14px;color: red;">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login-check">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i> </i> Keep me logged in</label>
                    </div>
                    <div class="bottom">
                        <button type="submit" class="button button2">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="copyright">
            <p>2020 © Sambriddhi School</p>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
  <flash message="{{ session('flash')}}" style="color: white;background: #1286ff;padding: 21px;border: 2px solid white;border-radius: 25px;text-transform: uppercase;font-size: 14px;"></flash>
</div>
<!-- //main -->
<!-- scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('splash/js/particles.js')}}"></script>
<script src="{{ asset('splash/js/app.js')}}"></script>
</body>
</html>
