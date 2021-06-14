<!DOCTYPE html>
<html>
	<head>
		<title>Welcome my new page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/all.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/custom.css" />
	</head>
	<body>
		
		<section>
			<div class="container">
				
				<div class="contactform">
					<div id="msg"></div>
					  <div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" placeholder="Enter name" id="name">
					  </div>
					  <div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" placeholder="Enter Email" id="email">
					  </div>
					  <div class="form-group">
						<label for="email">Mobile</label>
						<input type="text" class="form-control" placeholder="Enter Mobile" id="mobile">
					  </div>
					  <div class="form-group">
						<label for="email">Query</label>
						<input type="text" class="form-control" placeholder="Enter Query" id="query">
					  </div>
					  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</section>
		
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/custom.js"></script>
		
		<script>
			$(document).ready(function(){
				
				$("#submit").click(function(){
					var name = $("#name").val();
					var email = $("#email").val();
					var mobile = $("#mobile").val();
					var query = $("#query").val();
					
					if(name == ''){
						$("#msg").html("please enter name");
						return false;
					}
					else if(email == ''){
						$("#msg").html("please enter email");
						return false;	
					}
					
				
					$.ajax({
						type: 'POST',
						url: 'ajax/contact-form.php',
						data : {f_name : name, f_email: email, f_mobile: mobile, f_query: query},
						success: function(response){
							if(response == 1){
								$("#msg").html("Register successfully");
							} else {
								$("#msg").html("some server issue");
							}
						}
					});
					
					
				});
			});
		</script>
		
		
	</body>
</html>