<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="bg-primary main-wrapper">
      <div class="wrapper">
        <h1 class="text-center mb-4 animated fadeInDown">Login</h1>
        <div class="box bg-primary">

          <!-- <form class="form-wrapper" action="emailregisteration">
            <input
              type="text"
              placeholder="Work email (example@company.com)"
              class="form-control animated fadeInRight"
            />

            <input
              type="text"
              placeholder="Password (apricot1234)"
              class="form-control animated fadeInRight"
            />

            <div class="text-center animated fadeInUp">
              <button type="submit" class="submit-btn btn-blue">Submit</button>
            </div>
          </form> -->



          <form class="form-wrapper" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                    

                           
                                <input id="email" placeholder="Username" type="text" class="form-control animated fadeInRight{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                           
                                <input id="password" placeholder="Password" type="password" class="form-control animated fadeInRight{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          
                    

                                <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>

                        <div class="text-center animated fadeInUp">
                      
                                <button type="submit" class="submit-btn btn-blue">
                                    Login
                                </button>
                           
                        </div>
                    </form>
        </div>
      </div>
    </div>
</body>
</html>