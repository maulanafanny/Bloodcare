@extends('master')

@section('konten')

<br><br><br>

{{-- login card --}}
<div class="row justify-content-center mx-0">
	<div class="col-md-4" style="min-width: 450px">
		<div class="card shadow text-center">
			<br><br>
			<h1 class="text1 mb-4"">Bloodcare Login</h1>
			<div class="card-body">
				<form class="form-group" action="/login/masuk" onsubmit="return validasi()" method="POST" name="login">
					@csrf
					<input type="text" id="log" name="username" placeholder="Username" class="input-log form-control mx-auto">
					<br>
					<input type="password" id="log" name="password" placeholder="Password" class="input-log form-control mx-auto mb-2">
					<br>
					<input type="submit" name="submit" value="Login" class="btn btn-danger">
					<br><br>
					<label for="remember">ingat saya</label>
					<input type="checkbox" name="remember" id="remember" style="vertical-align: middle">
					<p>Belum memiliki akun? <a class="text-danger" href="/signup">Daftar sekarang</a></p>
				</form>
			</div>
		</div>
	</div>
</div>

@if (session()->has('success'))
	<div class="alert alert-success al-success alert-dismissible">
		{{ session()->get('success') }}
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	</div>
@endif

@if(session()->has('error'))
 	<div class="alert alert-danger">
	 	{{ session()->get('error') }}
 	</div>
@endif

<br>
 
<script>
	function validasi() {
	  var x = document.forms["login"]["username"].value;
	  if (x == "") {
	   alert("Username harus diisi");
	   return false;
  	  }
	  var x = document.forms["login"]["password"].value;
	  if (x == "") {
	   alert("Password harus diisi");
	   return false;
  	  }
	} 
</script>

@endsection