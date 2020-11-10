<!doctype html>
<html lang="en">
  <head>
	<title>REGISTER </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS Boostrap -->

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

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

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>Alamat</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<textarea class="form-control alamat" id="alamat" name="alamat"></textarea>
					<span class="info-user alamat"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>Gender</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<div class="custom-control custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="gendermale" name="gender" value="0" checked >
							<label class="custom-control-label" for="gendermale">Male</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="genderfemale" name="gender" value="1">
							<label class="custom-control-label" for="genderfemale">Female</label>
						</div>
					<span class="info-user gender"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>Birth Date</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
					<input type="text" class="input-control  datepicker" id="birth_date" name="birth_date"  placeholder="yyyy-mm-dd">

					<span class="info-user alamat"></span>
					</div>
				</div>
				</br>


				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>Member Ship Type</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<div class="custom-control custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="mm0" onclick="fee_vat2(0);" name="membership_type" value="0">
							<label class="custom-control-label" for="mm0">Silver</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="mm1" onclick="fee_vat2(1);" name="membership_type" value="1">
							<label class="custom-control-label" for="mm1">Gold</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="mm2" onclick="fee_vat2(2);" name="membership_type" value="2">
							<label class="custom-control-label" for="mm2">Platinum</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="mm3" onclick="fee_vat2(3);" name="membership_type" value="3">
							<label class="custom-control-label" for="mm3">Black</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="mm4" onclick="fee_vat2(4);" name="membership_type" value="4">
							<label class="custom-control-label" for="mm4">VIP</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="mm5" onclick="fee_vat2(5);" name="membership_type" value="5">
							<label class="custom-control-label" for="mm5">VVIP</label>
						</div>
					<span class="info-user gender"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
						<label>FEE & VAT</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<input type="text" class="form-control"  id="fee_vat" name="fee_vat" value="0" readonly>
						<span class="info-user ccNumber"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
						<label>CC Number *</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<input type="text" class="form-control"  id="ccNumber" name="ccNumber" placeholder="CC Number" required>
						<span class="info-user ccNumber"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>CC Type</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
						<div class="custom-control custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="cc_type1" name="cc_type" value="VISA">
							<label class="custom-control-label" for="cc_type1">VISA</label>
						</div>
						<div class="custom-control  custom-control-inline custom-control-primary">
							<input type="radio" class="custom-control-input" id="cc_type2" name="cc_type" value="MASTER">
							<label class="custom-control-label" for="cc_type2">MASTER</label>
						</div>
					<span class="info-user gender"></span>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-md-3 d-md-flex align-items-md-center">
					<label>CC Expired</label>
					</div>
					<div class="col-md-9 d-md-flex align-items-md-center">
					<input type="text" class="input-control datepicker_expired" name="cc_expired"  placeholder="yyyy-mm-dd">

					<span class="info-user alamat"></span>
					</div>
				</div>
				</br>


				<button type="submit" id="update" class="btn btn-warning wd100" style="margin-bottom: 10px;">Save</button>
			</form>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">

	</script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

	<script type='text/javascript'>
		$('.emailtechnical').on( 'change', function () {
			emailtechnical();
		})

		

		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			endDate: '-9y',
			startDate: '-100y',
		});

		$('.datepicker_expired').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '-0d',
		});

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

		function fee_vat2(nilai){
			var date = document.getElementById('birth_date').value;
			var today = new Date();
			var birthday = new Date(date);
			var year = 0;
			if (today.getMonth() < birthday.getMonth()) {
				year = 1;
			} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
				year = 1;
			}
			var age = today.getFullYear() - birthday.getFullYear() - year;
	
			if(age < 0){
				age = 0;
			}

			if(nilai == 0){

				if (document.getElementById('genderfemale').checked && age > 17 ) {
					document.getElementById("fee_vat").value = '100.000' ; 
				}else{
					document.getElementById("fee_vat").value = '110.000' ; 
				}

			}else if(nilai == 1){
				
				if (document.getElementById('gendermale').checked && age > 20) {
					document.getElementById("fee_vat").value = '200.000' ;
				}else{ 
					document.getElementById("fee_vat").value = '220.000' ; 
				}

			}else if(nilai == 2){

				if (document.getElementById('gendermale').checked && age > 22) {
					document.getElementById("fee_vat").value = '300.000' ;
				}else{ 
					document.getElementById("fee_vat").value = '330.000' ; 
				}

			}else if(nilai == 3){

				document.getElementById("fee_vat").value = '550.000' ;

			}else if(nilai == 4){
				document.getElementById("fee_vat").value = '1.100.000' ;

			}else{

				document.getElementById("fee_vat").value = '2.200.000' ;
			}
		}

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


