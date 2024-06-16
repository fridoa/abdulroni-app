<?php include "../config/koneksi.php"; ?>

<?php

if (!isset($_SESSION['email'])) {
    header('Location: ../page.php?mod=login');
    exit();
}

include "../access_control.php"; // Include access control functions

// Only allow access for admin and reporter
if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'reporter') {
    echo "Akses ditolak.";
    exit();
}

$iduser = $_SESSION['iduser'];  // Ambil iduser dari sesi

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
		<div class="judul">Halaman Administrator</div>
	</div>
	<div id="menu">
		<a href="?mod=pengguna" class="amenu">Akun Pengguna</a>
		<a href="?mod=lihat" class="amenu">Lihat Data</a>
		<a href="?mod=kelola" class="amenu">Kelola Data</a>
		<a href="?mod=logout" class="amenu">Logout</a>
	</div>
	<div id="konten">

		<h3 style="color:#999">Data Berita </h3>
		<table>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Isi Berita</th>
				<th>Gambar</th>
				<th>Kategori</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
			<?php
            $no = 1;
            if ($_SESSION['role'] === 'admin') {
                $query = "SELECT * FROM tbl_berita";
            } else {
                $query = "SELECT * FROM tbl_berita WHERE iduser = $iduser";
            }
            $data = mysqli_query($koneksi, $query);
            while ($r = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['judul']; ?></td>
                    <td><?php echo $r['isi_berita']; ?></td>
                    <td><img width="100" src="../asset/img/<?php echo $r['gambar']; ?>"></td>
                    <td><?php echo $r['kategori']; ?></td>
                    <td><?php echo $r['tanggal']; ?></td>
                    <td width="100">
                        <a href="?mod=ubah&id=<?php echo $r['id']; ?>">Ubah </a> |
                        <a href="aksi.php?mod=hapus&id=<?php echo $r['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            }
            ?>
		</table>

	</div>
	<div id="footer"> footer admin</div>
</body>

</html>