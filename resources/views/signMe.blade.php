@extends("layouts.layout")
@section("title")
    <title>Sign In</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
@section("content")
<!-- This is for navigation -->
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
                <a class="nav-link" href="/home/contact">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/home/signMe">Sign In</a>
            </li>
            <!-- if the user is logged in, show this link -->
            <li class="nav-item">
                <a class="nav-link" href="signOut.html">Sign Out</a>
            </li>
            <!-- else show this link -->
        </ul>
    </div>
</nav>
<div id="signInPage">
    <form class="needs-validation" method="post" action="/home/signMe" onsubmit="return signInValidate();" novalidate>
        @csrf
        <label id="signInError" style="color: red;"></label>
        <input type="hidden" name="userId" value={{ Auth::user()->id }}>
        <div class="form-group">
            <label for="signInName" id="signInNameError">Name:</label>
            <input type="text" name="signInName" id="signInName" class="form-control" required onkeyup="signInNameValidate('#signInName','#signInNameError','Name:')">
            <div class="invalid-feedback">
                Please provide a name.
            </div>
        </div>
        <div class="form-group">
            <label for="signInLastName" id="signInLastNameError">Last Name:</label>
            <input type="text" name="signInLastName" id="signInLastName" class="form-control" required onkeyup="signInNameValidate('#signInLastName','#signInLastNameError','Last Name:')">
            <div class="invalid-feedback">
                Please provide a last name.
            </div>
        </div>
        <div class="form-group">
            <label for="signInPhone" id="signInPhoneError">Phone:</label>
            <input type="text" name="signInPhone" id="signInPhone" class="form-control" required onkeyup="signInPhoneValidate();">
            <div class="invalid-feedback">
                Please provide a phone number.
            </div>
        </div>
        <div class="form-group">
            <label for="signInType">Types:</label>
            <select name="signInType" id="signInType" class="form-control">
                <option value="employe">historical</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
                <option value="worker">Worker</option>
            </select>
        </div>
        <div class="form-group">
            <label for="signInFaculty">Faculty:</label>
            <select name="signInFaculty" id="signInFaculty" class="form-control">
                <option value="computerScience">Computer Science</option>
                <option value="doctor">Tabyee Faculty</option>
                <option value="engineering">Engineering Faculty</option>
                <option value="naturelKnowledge">Naturel Knowledge</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="signInSubmit" id="signInSubmit" value="Sign In" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
