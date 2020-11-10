<!doctype html>
<html lang="en">
  <head>
	<title>REGISTER </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  </head>
  <body>
  		<div class="jumbotron text-center">
			<h1>Form Register</h1>
		</div>
		<div class="container"> 
			@if ($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong>{{ $message }}</strong>
			</div>
			@endif

			@if ($message = Session::get('error'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong>{{ $message }}</strong>
			</div>
			@endif
			<!-- <form role="form" action="{{route('register-form') }}" method="post" id="form"> -->
            <form action="/registerform" method="post" enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
						<label>First Name *</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<input type="text" class="form-control"  id="firstName" name="firstName" placeholder="First Name" required>
						<span class="info-user firstName"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
						<label>Lastname </label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<input type="text" class="form-control"  id="lastName" name="lastName" placeholder="Last Name" >
						<span class="info-user lastName"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label >Email</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
					<input type="email" class="form-control emailtechnical" id="emailtechnical" name="tehnical_email" placeholder="email" required>
					<span class="info-user email-technical"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label >Hoby</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
					<input type="checkbox" class="form-control" name="hobi[]" value="Main Game"> Membaca<br>
					<input type="checkbox" class="form-control " name="hobi[]" value="Membaca"> Sepak Bola<br>
					<input type="checkbox" class="form-control " name="hobi[]" value="Googling"> Programming<br>
					<span class="info-user hoby"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>Password</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
					<input type="password" class="form-control password"  minlength="8" maxlength="8" id="password" name="password" placeholder="Password" required >
					<span class="info-user password"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>Confirm Password</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
					<input type="password" class="form-control confirmPassword" minlength="8" maxlength="8"  id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required >
					<span class="info-user confirmPassword"></span>
					</div>
				</div>
				</br>


				<button type="submit" id="update" class="btn btn-warning wd100" style="margin-bottom: 10px;">Save</button>
			</form>
		</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

	<script type='text/javascript'>
		$('.emailtechnical').on( 'change', function () {
			emailtechnical();
		})

		$('.confirmPassword').on( 'change', function () {
			validatePassword();
		})

		$('.password').on( 'change', function () {
			validatePassword();
		})
		$(".password").focus(function(){
			$(".info-user.confirmPassword").removeClass("fail");
			$(".info-user.confirmPassword").removeClass("done");
			$(".info-user.confirmPassword").text("");
		});
		$(".confirmPassword").focus(function(){
			$(".info-user.confirmPassword").removeClass("fail");
			$(".info-user.confirmPassword").removeClass("done");
			$(".info-user.confirmPassword").text("");
		});

		$(".emailtechnical").focus(function(){
			$(".info-user.email-technical").removeClass("fail");
			$(".info-user.email-technical").removeClass("done");
			$(".info-user.email-technical").text("");
		});

		

		function emailtechnical()
		{

			var email = $(".emailtechnical").val();
			var emailReg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

			if(!emailReg.test(email)) 
			{
				$(".info-user.email-technical").removeClass("fail").text('');
				$(".info-user.email-technical").addClass("fail").text('Format Email');
				$("#update").prop("disabled", true);
			}
			else
			{
				$("#update").prop("disabled", false);
			}
				
		}

		function validatePassword()
		{
			var password = $(".password").val();
			var confirm = $(".confirmPassword").val();

			if(password != confirm){

				$(".info-user.confirmPassword").removeClass("fail").text('');
				$(".info-user.confirmPassword").addClass("fail").text('Password Salah');
				$("#update").prop("disabled", true);
			}else{

				$("#update").prop("disabled", false);

			}
			

		}
	</script>


	</body>
</html>


