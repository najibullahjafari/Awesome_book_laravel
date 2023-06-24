<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield("title")
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/all.css')}}">
</head>
<body>
	
        @yield("content")
        <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- <h5>Contact</h5> -->
						<div class="ftemail">
							<label><i class="fa-solid fa-envelope"></i>Najib@gmail.com</label>
						</div>
						<div class="ftwhatsapp">
							<label><i class="fa-brands fa-whatsapp"></i>(+93)798573634</label>
						</div>
						<div class="ftfacebook">
							<label><i class="fa-brands fa-facebook"></i>Awesome books</label>
						</div>
					</div>
					<!-- <div class="col-md-4">
						<h5>Information</h5>
						<p>Kabul university was created in 1344. Now it is the best University in Afghanistan.</p>
					</div>
					<div class="col-md-4">
						<h5>Developer</h5>
						<p>This website is developed by Heyday company. Heyday is your choice.</p>
					</div> -->
				</div>
			</div>
		</footer>

<script type="text/javascript" src="{{asset('jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#icon").click(function() {
			$("ul").toggleClass("show");
			var text=$("#icon").text();
			if (text=="X"){
				$("#icon").html('<i class="fa-solid fa-bars"></i>');
			}else{
			$("#icon").text("X");

		}
		});
	$("a").click(function() {
			$("ul").toggleClass("show");
			var text=$("#icon").text();
			if (text=="X"){
				$("#icon").html('<i class="fa-solid fa-bars"></i>');
			}else{
			$("#icon").text("X");
		}
		});

	$(".cont").hover(function(){
		$(".cont #underline").fadeToggle(1500);
		});
	});
</script>
<script src="{{asset('javascript.js')}}"></script>
</body>
</html>
