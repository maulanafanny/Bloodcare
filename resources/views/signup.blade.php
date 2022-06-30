@extends('master')

@section('konten')
<br><br><br>
{{-- signup card --}}
<div class="row justify-content-center mx-0">
	<div class="col-md-3" style="min-width: 400px">
		<div class="card shadow text-center px-4" >
			<br><br>
			<h1 class="">Sign Up</h1>
			<br>
			<div class="card-body">
				<form class="form-group" action="/signup/daftar" onsubmit="return validasi()" method="POST" name="register">
					@csrf
					<input type="text" name="name" placeholder="Nama Lengkap" class="input-sign form-control mx-auto">
					<br>
					<input type="text" name="username" placeholder="Username" class="input-sign form-control mx-auto">
					<br>
					<input type="email" id="email" name="email" placeholder="Email" class="input-sign form-control mx-auto">
					<div id="error_email"></div>
					<br>
					<input type="password" name="password" placeholder="Password" class="input-sign form-control mx-auto">
					<br><br>
					<input class="btn btn-danger" type="submit" value="Daftar" id="register" name="register">
					<br><br>
				</form>
			</div>
		</div>
	</div>
</div>

<br>

<script>
	$(document).ready(function(){
		$('#email').blur(function(){
			var error_email = '';
			var email = $('#email').val();
			var _token = $('input[name="_token"]').val();
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			if(!filter.test(email))
			{    
				$('#error_email').html('<label class="pt-2 mb-0 text-danger">Email tidak valid!</label>');
				$('#email').addClass('has-error');
				$('#register').attr('disabled', 'disabled');
			}
			else
			{
				$.ajax({
					url:"{{ route('email_available.check') }}",
					method:"POST",
					data:{email:email, _token:_token},
					success:function(result)
					{
						if(result == 'unique')
						{
							$('#error_email').html('<label class="pt-2 mb-0 text-success">Email bisa digunakan</label>');
							$('#email').removeClass('has-error');
							$('#register').attr('disabled', false);
						}
						else
						{
							$('#error_email').html('<label class="pt-2 mb-0 text-danger">Email sudah digunakan!</label>');
							$('#email').addClass('has-error');
							$('#register').attr('disabled', 'disabled');
						}
					}	
				})
			}
		});
	});
</script>
@endsection