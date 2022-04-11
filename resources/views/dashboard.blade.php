<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TraveLog</title>
</head>
<body class="background">
	<section>
		<!-- Background Image -->
		<!-- <div class="background">
		</div> -->
		<table>
			<div class="main">
				<tr>
					<td>
					<div class="dbimage">
						<!-- <img src="foto.jpg" alt="Foto" class="fotop"> -->
					</div>
					</td>
					<td>
					<div class="nav">
					<h1>TraveLog</h1>
					<div class="navgroup">
					<h4>Catatan Perjalanan</h4>
					<div class="navlink">
						<h4>							
							<a href="/dashboard">Home</a> |
							<a href="/catatan">Catatan Perjalanan</a> |
							<a href="/isicatatan">Isi Data</a> |
							<a href="{{route ('logout')}}">Log Out</a>
						</h4>
					</div>
					</div>
					</div>
					</td>	
				</tr>
				<tr>
					<td></td>
					<td>
                    @foreach ($user as $user)
						<div class="txt">
						<p>Selamat Datang {{$user->nama}} Di TraveLog</p>
						</div>
                    @endforeach
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button class="btn_isi">Isi</button>
					</td>
				</tr>
			</div>
		</table>
	</section>
</body>
</html>