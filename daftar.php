<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manga List Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

<style>
    body{
      background: rgba(0, 0, 0, 0.85);
      color: white;
    }

    h2{
        color: black;
    }
</style>

<body>
<section class="vh-100">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="proses-daftar.php" method="POST">
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="username" name="username" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class= "form-control form-control-lg" placeholder="password" name="password" />
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit" value="Submit" class="btn btn-success btn-danger btn-lg">Register</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="login.php" class="fw-500 text-body"><u>Login here</u></a></p>
              </form>
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
