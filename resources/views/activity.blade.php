@extends("layouts.layout")
@section("title")
    <title>Activity</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
@section("content")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand activity" href="#">Awesome book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/member/{{auth::user()->id}}">{{auth::user()->name}}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/home/activity/{{auth::user()->id}}">Book</a>
            </li>
            <!-- if the user is admin -->
            @if(auth::user()->id==1)
                <li class="nav-item">
                    <a class="nav-link" href="/home/activityList">Book list</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/home/addActivity/{{auth::user()->id}}">Add Book</a>
            </li>
        </ul>
    </div>
</nav>
<section class="myInfoContainer">
    @foreach($rows as $row)
        <div>
            <h3>{{$row->ttile}}</h3>
            <p>{{$row->description}}</p>
        </div>
    @endforeach
</section>
@endsection
