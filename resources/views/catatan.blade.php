<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body class="background">
	<section>
		<!-- Background Image -->
		<!-- <div class="background">
		</div> -->
		<table>
			<div class="main">
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
						<div class="data">
						<form action="">
							Urutkan Berdasarkan Data
							<input type="date" name="">
							<input type="submit" name="" value="Urutkan">
						</div>
						</form>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<div class="txt_data">
						<table class="data_catatan">
							<thead>
							<tr>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Lokasi</th>
								<th>Suhu Tubuh</th>
							</tr>
							</thead>
                            @foreach ($catatan as $isi)
							<tr>
								<td>{{ $isi->tanggal }}</td>
								<td>{{ $isi->jam }}</td>
								<td>{{ $isi->lokasi }}</td>
								<td>{{ $isi->suhu }}</td>
							</tr>
                            @endforeach
						</table>
						</div>
					</td>
					<!-- <td>
						<textarea>Selamat Datang</textarea>
					</td> -->
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