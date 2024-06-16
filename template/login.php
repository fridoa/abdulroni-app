<?php
session_start();
include "../config/koneksi.php";

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = md5(mysqli_real_escape_string($koneksi, $_POST['password']));

    $query = "SELECT * FROM user_account WHERE email='$email' AND password='$password'";
    $data = mysqli_query($koneksi, $query);

    if ($data && mysqli_num_rows($data) > 0) {
        $r = mysqli_fetch_assoc($data);
        $_SESSION['iduser'] = $r['iduser'];  // Tambahkan ini
        $_SESSION['fullname'] = $r['fullname'];
        $_SESSION['email'] = $r['email'];
        $_SESSION['role'] = $r['role'];

        if ($r['role'] === 'admin') {
            header('Location: ../admin/page.php?mod=pengguna');
        } else if ($r['role'] === 'reporter') {
            header('Location: ../admin/page.php?mod=lihat');
        } else if ($r['role'] === 'user') {
            header('Location: ../index.php');
        }
        exit();
    } else {
        echo "Email atau password salah.";
    }
}
?>

<?php include"component/header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" class="login-email">
                            <div class="mb-3">
                                <label name="email" for="email" class="form-label">email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label name="password" for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <button name="login" type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
