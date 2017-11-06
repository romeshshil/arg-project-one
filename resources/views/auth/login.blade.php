<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../public/images/ip_icon.png" type="image/png" sizes="16x16">
  <title>Dollar Buy Sell And Exchange Wallet&nbsp;|&nbsp;Sign In</title>
  <link href="{{ URL::asset('frontend/maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('frontend/public/css/sign.css') }}">
  <style>
   .alert-warning{
    width: 100%;
    max-width: 370px;
    margin: 0 auto;
    background: #fff;
    border-radius: 4px;
    padding: 10px 20px;
    box-sizing: border-box;
    color: #8A7145;
    margin-bottom:-160px;
    margin-top: 30px;
  }
  .alert-warning p{
    line-height: 10px;
  }
  </style>
</head>
<body>  

<div class="custom_message_top">
     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
  </div>
  <form method="POST" action="{{ route('login') }}"
                       accept-charset="utf-8" class="sign">
                        {{ csrf_field() }}    
    <h3><i class="fa fa-user"></i> User Sign In</h3>
    <span><i class="fa fa-user"></i></span>
    <input type="text" name="email" value="{{ old('email') }}" required autofocus  placeholder="Username">
    <span><i class="fa fa-key"></i></span>
    <input type="password" name="password" required placeholder="Password">
    
    <input type="submit" name="submit" value="Sign In"> 
     <a href="https://ipdbse.com/home/forgot_password">Forgot Password?</a>
  </form>  <a href="https://ipdbse.com/home/signup" class="a">Need an Account?</a>
  <a href="https://ipdbse.com/home" class="a" style="padding-top:5px;">Home</a>
</body>

</html>