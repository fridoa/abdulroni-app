
<?php
include"../config/koneksi.php";
	if(empty($_SESSION["email"])) {
		header("location:../page.php?mod=login");
	}
	// Query untuk mengambil data dari tabel user_account
	$query = "SELECT * FROM user_account";
	$result = mysqli_query($koneksi, $query);

?>

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
	</style>
</head>

<body>
	<div id="header"> <img src="../assets/img/logo.png" class="logo">
		<div class="judul">selamat datang <?php echo $_SESSION['fullname'];?></div>
	</div>
	<div id="menu">
		<a href="?mod=pengguna" class="amenu">Akun Pengguna</a>
		<a href="?mod=lihat" class="amenu">Lihat Data</a>
		<a href="?mod=kelola" class="amenu">Kelola Data</a>
		<a href="?mod=logout" class="amenu">Logout</a>
	</div>
	<div id="konten">

		<h3 style="color:#999">Data Pengguna </h3>
		<table>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Role</th>
				<th>Aksi</th>
			</tr>
			<?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td width='100'>";
                echo "<a href='?mod=ubahakun'>Ubah </a> | <a href='?mod=hapusakun'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
		</table>

	</div>
	<div id="footer"> footer admin</div>
</body>

</html>