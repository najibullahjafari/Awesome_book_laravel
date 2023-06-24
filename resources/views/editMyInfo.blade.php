@extends("layouts.layout")
@section("title")
    <title>Edit Information</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
@section("content")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Awesome books</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/home/editMyInfo">Edit</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/home/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Sign out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
        </ul>
    </div>
</nav>
<div id="signInPage" class="container">
    <form method="POST" action="/home/member/{{auth::user()->id}}" onsubmit="return signInValidate();">
        @csrf
        <label id="signInError" style="color: red;"></label>
        <input type="hidden" name="id" value="{{$row->id}}">
        <div class="form-group">
            <label for="editInfoName" id="editInfoNameError">Name:</label>
            <input type="text" name="editInfoName" id="editInfoName" required class="form-control" onkeyup="signInNameValidate('#editInfoName','#editInfoNameError','Name:')" value="{{$row->name}}">
        </div>
        <div class="form-group">
            <label for="editInfoLastName" id="editInfoLastNameError">Last Name:</label>
            <input type="text" name="editInfoLastName" id="editInfoLastName" required class="form-control" onkeyup="signInNameValidate('#editInfoLastName','#editInfoLastNameError','Last Name:')" value="{{$row->lastName}}">
        </div>
        <div class="form-group">
            <label for="editInfoPhone" id="editInfoPhoneError">Phone:</label>
            <input type="text" name="editInfoPhone" id="editInfoPhone" required class="form-control" value="{{$row->phone}}" onkeyup="editInfoPhoneValidate();">
        </div>
        <div class="form-group">
            <label for="editInfoType">Position:</label>
            <select name="editInfoType" id="editInfoType" class="form-control">
                <option value="employe">Employee</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
                <option value="worker">Worker</option>
            </select>
        </div>
        <div class="form-group">
            <label for="editInfoFaculty">Faculty:</label>
            <select name="editInfoFaculty" id="editInfoFaculty" class="form-control">
                <option value="computerScience">Computer Science</option>
                <option value="doctor">Tabyee Faculty</option>
                <option value="engineering">Engineering Faculty</option>
                <option value="naturalKnowledge">Natural Knowledge</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="editInfoSubmit" id="editInfoSubmit" value="Edit" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
