<!DOCTYPE html>
<html>
<head>	    
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TraveLog</title>
</head>
<body>
	<section>
		<!--- Background --->
		<div class="background"></div>

		<!--- Form --->
		<div class="login">
			<h2>TraveLog</h2>
            @if(session()->has('loginError'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					{{session('loginError')}}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			<form action="{{ route('postlogin') }}" method="post">
                @csrf
				<input type="text" name="nik" class="from" placeholder="NIK" required>
				<input type="text" name="nama" class="from" placeholder="Nama" required>
				<button class="btn_login" type="submit">Log In</button>
			</form>
		</div>
	</section>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>	    
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TraveLog</title>
</head>
<body>
	<section>
		<!--- Background --->
		<div class="background"></div>

		<!--- Form --->
		<div class="login">
			<h2>TraveLog</h2>
			@if(session()->has('loginError'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					{{session('loginError')}}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			<form action="{{ route('postlogin') }}" method="post">
			@csrf
				<input type="text" name="nik" class="input_login" placeholder="NIK" required>
				<input type="text" name="nama" class="input_login" placeholder="Nama" required>
				<button class="btn_login">Log In</button>
			</form>
		</div>
	</section>
</body>
</html>