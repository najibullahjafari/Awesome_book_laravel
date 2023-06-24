@extends("layouts.layout")
@section("title")
    <title>Edit activity</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
@section("content")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Awesome book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home/editOrDeleteAcivity">Edit Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/member">Private Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/activity">Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/activityList">Books</a>
            </li>
        </ul>
    </div>
</nav>
<div id="signInPage" class="container">
    <form method="POST" action="/home/editAcivity/{{$row->id}}">
        @csrf
        <input type="hidden" name="id" value="{{$row->id}}">
        <div class="form-group">
            <label for="titleEditActivity">Activity Title:</label>
            <input type="text" name="titleEditActivity" required class="form-control" placeholder="Activity title" value="{{$row->ttile}}">
        </div>
        <div class="form-group">
            <label for="descriptionEditActivity">Description:</label>
            <input type="text" name="descriptionEditActivity" required class="form-control" placeholder="Description" value="{{$row->description}}">
        </div>
        <div class="form-group">
            <input type="submit" name="addActivitySubmit" value="Edit" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
