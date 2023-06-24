<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <link rel="stylesheet" href="{{asset('lib/all.css')}}" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Sign In</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Awesome book</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="contactPage" class="container">
            <form action="home.html" method="post" onsubmit="return contactValidate();">
                <label id="contactError" style="color:red;"></label>
                <div class="form-group">
                    <label for="contactEmail">Type Your Email:</label>
                    <input type="email" id="contactEmail" required name="contactEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contactArticle">Suggestion, Problem, ...</label>
                    <textarea name="contactArticle" id="contactArticle" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div>
                    <input type="submit" value="Suggest" id="contactSubmit" class="btn btn-primary">
                </div>
            </form>
        </div>

        <script type="text/javascript" src="{{asset('jquery.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#icon").click(function() {
                    $("ul").toggleClass("show");
                    var text=$("#icon").text();
                    if (text=="X"){
                        $("#icon").html('<i class="fa-solid fa-bars"></i>');
                    } else {
                        $("#icon").text("X");
                    }
                });
                $("a").click(function() {
                    $("ul").toggleClass("show");
                    var text=$("#icon").text();
                    if (text=="X"){
                        $("#icon").html('<i class="fa-solid fa-bars"></i>');
                    } else {
                        $("#icon").text("X");
                    }
                });
            });
        </script>
        <script src="{{asset('javascript.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
