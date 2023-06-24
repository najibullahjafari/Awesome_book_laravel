@extends("layouts.layout")
@section("title")
    <title>Teacher Information</title>
@endsection
@section("content")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- This is for teachers -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Awesome book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/home/member/{{auth::user()->id}}">{{auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/activity/{{auth::user()->id}}">Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Sign Out</a>
            </li>
        </ul>
    </div>
</nav>
<section class="myInfoContainer">
    <div class="myInfoPrivate">
        <a href="editMyInfo/{{auth::user()->id}}">
            <label for="teacherLabelLastName" class="text-primary">Last Name - {{$row->name}}</label>
        </a>
        <a href="editMyInfo/{{auth::user()->id}}">
            <label for="teacherLabelPhone" class="text-primary">Phone - {{$row->phone}}</label>
        </a>
    </div>
    <div class="myInfoWork">
        <a href="editMyInfo/{{auth::user()->id}}">
            <label for="teacherLabelType" class="text-primary">Position - {{$row->position}}</label>
        </a>
        <a href="editMyInfo/{{auth::user()->id}}">
            <label for="teacherLabelFaculty" class="text-primary">Faculty - {{$row->feild}}</label>
        </a>
    </div>
</section>
@endsection
