@extends("layouts.layout")
@section("title")
    <title>Kabul University</title>
@endsection
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Kabul University</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Awesome books</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <!--If User Is Logged In Our System-->
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/home/member/{{auth::user()->id}}">{{auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home/signMe">Sign In</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
            @endauth
            @if(auth::user()->id==1)
                <li class="nav-item">
                    <a class="nav-link" href="/home/list">Users</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/home/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<section class="cont">
    <h1 class="text-center">Awesome books</h1>
    <hr>
</section>
<div class="container">
    <div class="row mylayout">
        <div class="col-sm-6 myhome">
            <div class="card mylayout mb-3">
                <div class="card-body mybook">
                    <h5 class="card-title"><a href="https://www.google.com/search?q=web">Web</a>
</h5>
                </div>
            </div>
            <div class="card mylayout mb-3">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://www.google.com/search?q=romantic">Romantic</a></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mylayout mb-3">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://www.google.com/search?q=drama">Drama</a></h5>
                </div>
            </div>
            <div class="card mylayout mb-3">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://www.google.com/search?q=historical">Historical</a></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Geo</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Agriculture</h5>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
