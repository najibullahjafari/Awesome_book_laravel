@extends("layouts.layout")
@section("title")
    <title>User List</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection
@section("content")
<!-- This is for admin -->
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
            <li class="nav-item">
                <a class="nav-link" href="/home/member/{{auth::user()->id}}">{{auth::user()->name}}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/home/list">Users List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Sign Out</a>
            </li>
        </ul>
    </div>
</nav>
<section class="list">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Faculty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->lastName}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->position}}</td>
                <td>{{$row->feild}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
