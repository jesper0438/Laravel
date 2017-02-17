@extends('layouts.app')
@section('content')
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Videos</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<style>
.content{
  text-align: center;
}
.m-b-md {
    margin-bottom: 30px;
}
</style>
@section('content')
</head>
<body>
  <div class="content">
      <div class="title m-b-md">
          Filmpjes....
      </div>
  </div>

<div class="content">
<iframe width="420" height="315" src="https://www.youtube.com/embed/kI5FYpwZMXU" frameborder="0" allowfullscreen></iframe>
<iframe width="420" height="315" src="https://www.youtube.com/embed/mvK0UzFNw1Q" frameborder="0" allowfullscreen></iframe>
</div>
</body>
</html>
@endsection('content')
