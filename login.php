<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manga List Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body class="text-center">

  <form action="proses-login.php" method="POST">

  <section class="vh-100" style="background-color: rgba(0, 0, 0, 0.85);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">

              <img style="width:100%; height:100%" src="img/reallogin.png"

                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-700" style="text-align:center" >Manga List</span>
                  </div>

              

                  <div class="form-outline mb-4">
                    <input type="username" id="form2Example17" class="form-control form-control-lg" placeholder="username" name="username" />
                    
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="password" name="password" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-danger btn-lg btn-block" type="submit" name="submit" value="Submit">Login</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Don't Have an account? <a href="daftar.php"
                    class="fw-500 text-body"><u>Register here</u></a></p>

                </form>
              <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
