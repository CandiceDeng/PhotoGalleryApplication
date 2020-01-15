<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="" type="text/css" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
      <div id="registration">
        <h2>Registration as a New User</h2>
        <form method="POST" action="/register">
          <div class="form-info">
            <label for="username">Username: </label>
            <input class="form-controll" id="username" name="username">
          </div>

          <div class="form-info">
            <label for="username">Email: </label>
            <input class="form-control" id="email" name="email">
          </div>

          <div class="form-info">
            <label for="password">Password: </label>
            <input class="form-control" id="password" name="password">
          </div>

          <div class="form-info">
            <button style="cursor: pointer" type="submit" class="btn btn-primary">Submit</button>
          <div>

        </form>
      </div>
    </body>
</html>
