@extends("layouts.layout")
@section("title")
    <title>Activity List</title>
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
            <li class="nav-item">
                <a class="nav-link" href="/home/member/{{auth::user()->id}}">{{auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/activity/{{auth::user()->id}}">Book list</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/home/activityList">Books</a>
            </li>
        </ul>
    </div>
</nav>
<section class="container">
    <div class="row">
        <div class="col-md-8 mytable offset-md-2">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td><a href="editAcivity/{{$row->id}}">{{$row->id}}</a></td>
                            <td><a href="editAcivity/{{$row->id}}">{{$row->ttile }}</a></td>
                            <td><a href="editAcivity/{{$row->id}}">{{$row->description}}</a></td>
                            <td><a href="deleteAcivity/{{$row->id}}" style="color:red;">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
