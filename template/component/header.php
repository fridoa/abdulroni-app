<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
    <!-- header -->
    <div class="container-fluid text-center bg-primary">
        <div class="row">
          <div class="col pt-3">
            <p>INFORMASI LANGIT</p>
          </div>
        </div>
      </div>
      <!-- end -->

      <!-- nav -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-info-subtle pt-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AR_News</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse position-absolute top-0 end-0 pt-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?mod=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?mod=otomotif">Otomotif</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?mod=lifestyle">Lifestyle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?mod=education">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?mod=technology">Technologi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?mod=sport">Sport</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="template/login.php">login</a></li>
                  <li><a class="dropdown-item" href="https://www.facebook.com/abdul.roni.0616?mibextid=ZbWKwL">Facebook</a></li>
                  <li><a class="dropdown-item" href="https://www.instagram.com/mbull_bu?igsh=MWdidXJvdzYxZnlpZA==">Instagram</a></li>
                  <li><a class="dropdown-item" href="https://www.youtube.com/live/N_3QbeAZXMM?si=BpKp0VTwnGC9QuJT">Youtube</a></li>
                  <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!--end nav -->