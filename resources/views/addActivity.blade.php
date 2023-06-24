@extends("layouts.layout")
@section("title")
    <title>Add Activity</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
@section("content")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Awesome book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home/addActivity/{{auth::user()->id}}">Add book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/member/{{auth::user()->id}}">{{auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/activity/{{auth::user()->id}}">Book</a>
            </li>
            <!--if user is Teacher -->
            <li class="nav-item">
                <a class="nav-link" href="/home/activityList">Book list</a>
            </li>
            <!-- else
			<li class="nav-item">
                <a class="nav-link" href="signOut.html">Sign Out</a>
            </li>
            -->
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Add Book</div>
                <div class="card-body">
                    <form method="POST" action="/home/addActivity/{{auth::user()->id}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="titleAddActivity" required class="form-control" placeholder="Book Title">
                        </div>
                        <div class="form-group">
                            <textarea name="descriptionAddActivity" id="descriptionAddActivity" class="form-control" rows="5" placeholder="Book Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="addActivitySubmit" value="Add" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
