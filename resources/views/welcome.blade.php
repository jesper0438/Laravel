<!DOCTYPE html>
@extends('layouts.app')
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .content > p {
              color: black;
              font-size: 24px;
            }
        </style>
        @section('content')
    </head>
    <body>
      <!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Dit is een test voor heroku</h2>
<p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
<table class="table">
<thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Default</td>
    <td>Defaultson</td>
    <td>def@somemail.com</td>
  </tr>
  <tr class="success">
    <td>Success</td>
    <td>Doe</td>
    <td>john@example.com</td>
  </tr>
  <tr class="danger">
    <td>test</td>
    <td>Moe</td>
    <td>mary@example.com</td>
  </tr>
  <tr class="info">
    <td>Info</td>
    <td>Dooley</td>
    <td>july@example.com</td>
  </tr>
  <tr class="warning">
    <td>Warning</td>
    <td>Refs</td>
    <td>bo@example.com</td>
  </tr>
  <tr class="active">
    <td>Active</td>
    <td>Activeson</td>
    <td>act@example.com</td>
  </tr>
</tbody>
</table>
</div>

</body>
</html>


    </body>
</html>
@endsection('content')
