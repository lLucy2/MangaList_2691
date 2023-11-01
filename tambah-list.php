<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Manga</title>
    <link rel="stylesheet" href="tambah-album.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <style>
    body{
      background: rgba(0, 0, 0, 0.85);
      color: white;
    }
  </style>

  <body>
    
    <br> 
    <div class="container">
       <br>
        <h1>Add Manga</h1>
        <br>
        <form action="tambah-list.php" method="POST" enctype="multipart/form-data">

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Cover</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="fileCover" name="fileCover">
            </div>

          </div>
          <div class="row mb-3">
            <label for="inputManga" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judulmanga" name="judulmanga">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="author" name="authormanga">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputPenulis" class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="genre" name="genremanga">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputTanggal" class="col-sm-2 col-form-label">Release Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="rilis" name="mangarilis">
            </div>
          </div>

          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status Manga</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="statusmanga" id="gridRadios1" value="Completed" checked>
                <label class="form-check-label" for="gridRadios1" name="statusmanga">
                  Completed
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="statusmanga" id="gridRadios2" value="On Going" checked>
                <label class="form-check-label" for="gridRadios2" name="statusmanga">
                On Going
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="statusmanga" id="gridRadios2" value="On Hiatus" checked>
                <label class="form-check-label" for="gridRadios2" name="statusmanga">
                On Hiatus
                </label>
              </div>
            </div>
          </fieldset>
            

          <button type="submit" class="btn btn-danger" name="simpan" value="Submit">Add Manga</button>
        </form>
          
       
      <?php
        /*Mengecek apabila tombol Tambahkan diklik*/
        if (isset ($_POST['simpan'])) {
            include ('config.php');
            /*Menerima dan Menampung data*/
            $judul_manga = $_POST['judulmanga'];
            $author_manga = $_POST['authormanga'];
            $genre_manga = $_POST['genremanga'];
            $rilis_manga = $_POST['mangarilis'];
            $status_manga = $_POST['statusmanga'];
            $cover_manga = basename($_FILES["fileCover"]["name"]);

            $target_dir = "img/";
            $target_file = $target_dir . basename($_FILES["fileCover"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
              
              echo "Maaf, file Anda gagal diupload.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["fileCover"]["tmp_name"], $target_file)) {
                echo "File ". htmlspecialchars( basename( $_FILES["fileCover"]["name"])). " berhasil diupload.";
              } else {
                echo "Maaf, ada error ketika mengupload file Anda.";
              }
            }

            if ($uploadOk == 1) {
              /*Melakukan penyimpanan data*/
              $sql=mysqli_query ($config, "INSERT INTO tb_katalog VALUES (NULL, '$judul_manga', '$author_manga', '$genre_manga', '$rilis_manga',
               '$status_manga', '$cover_manga')");
            }

            }
        ?>

        <br>
        <a href="index.php"  class="btn btn-danger">Back</a>
    </div>

   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
