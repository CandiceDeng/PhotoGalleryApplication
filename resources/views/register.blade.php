<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    </head>

    <body>
      <div class="container" id="container">
      	<div class="form-container sign-up-container">
      		<form method="POST" action="/register">
            @csrf <!-- {{ csrf_field() }} -->
      			<h1>Create Account</h1>
      			<span>with your email for registration</span>
            <div class="form-group">
      		      <input type="text" class="form-control" id="username" placeholder="Name" name="username"/>
            </div>
            <div class="form-group">
      			     <input type="email" class="form-control" id="email" placeholder="Email" name="email"/>
            </div>
            <div class="form-group">
      			     <input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
            </div>
            <div class="form-group">
      			     <button style="cursor:pointer;" type="submit" class="btn btn-primary">Sign Up</button>
            </div>
            @include('formErrors')
      		</form>
      	</div>
      	<div class="form-container sign-in-container">
      		<form action="#">
      			<h1>Sign in</h1>
      			<span>with your account</span>
      			<input type="email" placeholder="Email" name="email"/>
      			<input type="password" placeholder="Password" name="password"/>
      			<a href="#">Forgot your password?</a>
      			<button>Sign In</button>
      		</form>
      	</div>
      	<div class="overlay-container">
      		<div class="overlay">
      			<div class="overlay-panel overlay-left">
      				<h1>Welcome Back!</h1>
      				<p>To keep connected with us please login with your personal info</p>
      				<button class="ghost" id="signIn">Sign In</button>
      			</div>
      			<div class="overlay-panel overlay-right">
      				<h1>Hello, Friend!</h1>
      				<p>Enter your personal details and start the beautiful journey</p>
      				<button class="ghost" id="signUp">Sign Up</button>
      			</div>
      		</div>
      	</div>
      </div>

      <footer>
        <p>Created by Candice Deng @ 01/20/2020</p>
      </footer>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
