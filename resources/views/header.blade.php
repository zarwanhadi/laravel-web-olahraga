<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="margin:0px">

<div class="container-fluid" style="margin:0px;padding:0px">
  <div class="jumbotron" style="padding:100px;margin:0px">
    <h1>Selamat Datang Di Pendataan Olaraga</h1>      
    <p>Tempat dimana kita dapat mengakses jenis dan atlet yang ada di daerah sekitar</p>
  </div>   
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Penol</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{route('jenis')}}">Jenis Olahraga</a></li>
      <li><a href="{{route('atlet')}}">Atlet</a></li>
    </ul>
  </div>
</nav>
