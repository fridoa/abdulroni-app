<!doctype html>
<html>

<head>
	<title> Halaman Admin </title>
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		#header {
			float: left;
			width: 100%;
			height: 100px;
			border-bottom: solid 1px #ccc;
			text-align: center;
			background: linear-gradient(#fff, #c0ccc3, #c0ccc3);
		}

		.logo {
			height: 80px;
			float: left;
		}

		.judul {
			font-size: 24px;
			padding-top: 30px;
		}

		#menu {
			float: left;
			width: 20%;
			border-right: solid 1px #ccc;
			min-height: 500px;
			background: linear-gradient(to right, #fff, #ebf2ee);
		}

		#konten {
			float: left;
			width: 78%;
			min-height: 500px;
			padding: 10px;
		}

		#footer {
			float: left;
			width: 100%;
			height: 50px;
			border-top: solid 1px #ccc;
			text-align: center;
		}

		.amenu {
			float: left;
			width: 90%;
			border-bottom: solid 1px #999;
			padding: 8px 10px;
			text-decoration: none;
			font-size: 18px;
		}

		table {
			border-collapse: collapse;
			width: 90%;
		}

		td,
		th {
			border: solid 1px #ccc;
		}

		input[type=text] {
			width: 80%;
			float: left;
			padding: 5px;
			margin: 10px 0;
		}

		input[type=file] {
			width: 80%;
			float: left;
			padding: 5px;
			margin: 10px 0;
		}

		input[type=submit] {
			width: 20%;
			float: left;
			padding: 5px;
			margin: 10px 0;
			background: #0f50a6;
			color: #fff;
			font-size: 16px;
			border: none;
		}

		textarea {
			width: 80%;
			float: left;
			padding: 5px;
			height: 100px;
		}

		select {
			width: 40%;
			float: left;
			padding: 5px;
			margin: 10px 0;
		}
	</style>
</head>

<body>
	<div id="header"> <img src="../assets/img/logo.png" class="logo">
		<div class="judul">Halaman Administrator</div>
	</div>
	<div id="menu">
		<a href="?mod=pengguna" class="amenu">Akun Pengguna</a>
		<a href="?mod=lihat" class="amenu">Lihat Data</a>
		<a href="?mod=kelola" class="amenu">Kelola Data</a>
		<a href="?mod=logout" class="amenu">Logout</a>
	</div>
	<div id="konten">

		<h3 style="color:#999">Kelola Berita </h3>

		<form method="post" action="aksi.php?mod=tambahdata" enctype="multipart/form-data">
			<input type="text" name="judul" placeholder="Judul Berita">
			<textarea name="berita" placeholder="Isi Berita"></textarea>
			<select name="kategori">
				<option value=""> -- Pilih Kategori -- </option>
				<option value="education"> Education </option>
				<option value="lifestyle"> Lifestyle </option>
				<option value="otomotif"> Otomotif </option>
				<option value="sport"> Sport </option>
				<option value="technology"> Technology </option>
				<option value="slider"> Image Slider </option>
				<option value="advertise"> Advertise </option>
			</select>
			<input type="file" name="gambar">
			<input type="submit" name="submit" value="Submit">
		</form>

	</div>
	<div id="footer"> footer admin</div>
</body>

</html>