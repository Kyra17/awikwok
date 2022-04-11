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
		<!--- Background --->
		<!-- <div class="background"></div> -->

		<!-- Main Form -->
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
						<div class="txt_catatan">
						@if ($errors->any())
                                    <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Input Yang Anda Masukkan Salah.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
							<div class="form_isi">
							<form action="{{ route('isicatatan.store') }}" method="POST">
							@csrf
							<table>
								<tr>
									<td class="td_isi">Tanggal</td>
									<td><input type="date" name="tanggal" class="input_isi"></td>
								</tr>
								<tr>
									<td class="td_isi">Jam</td>
									<td><input type="time" name="jam" class="input_isi"></td>
								</tr>
								<tr>
									<td class="td_isi">Lokasi Yang Dikunjungi</td>
									<td><input type="text" name="lokasi" class="input_isi"></td>
								</tr>
								<tr>
									<td class="td_isi">Suhu Tubuh</td>
									<td><input type="text" name="suhu" class="input_isi"></td>
								</tr>
								<tr>
									<td class="td_isi"></td>
									<td><button class="btn_catatan">Isi</button></td>
								</tr>
							</table>
						</form>
						</div>
						</div>						
					</td>
				</tr>
			</div>
		</table>
	</section>
</body>
</html>