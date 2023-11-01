<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Manga</title>
    <link rel="stylesheet" href="edit-album.css" />
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
        <h1>Edit Manga<br></h1><br>
        <?php 
          include ('config.php');

          if (isset($_GET['manga_id'])){ 
            $id=$_GET['manga_id']; 
            $sql_edit=mysqli_query($config,"SELECT * FROM tb_katalog WHERE manga_id='$id'");
            while ($data=mysqli_fetch_array($sql_edit)){
              $judul_manga  = $data['manga_judul'];
              $author_manga = $data['manga_penulis'];
              $genre_manga  = $data['manga_genre'];
              $rilis_manga  = $data['manga_rilis'];
              $status_manga = $data['manga_status'];
              $cover_manga  = $data['manga_cover'];
            }

        ?>

        <form action="edit-list.php" method="POST" >
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" >ID Manga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="idmanga" name="idmanga" value="<?php echo $id ?>" readonly="readonly">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Cover</label>
            <div class="col-sm-10">
              <image width='60px' src='<?php echo "img/".$cover_manga?>'>
              File terupload: <?php echo $cover_manga ?>
            </div>

          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judulmanga" name="judulmanga" value="<?php echo $judul_manga ?>">
            </div>

          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="author" name="authormanga" value="<?php echo $author_manga ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="genre" name="genremanga" value="<?php echo $genre_manga ?>">
            </div>
          </div>


          <div class="row mb-3">
            <label for="inputTanggal" class="col-sm-2 col-form-label">Tahun Rilis</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="rilismanga" name="rilismanga" value="<?php echo $tahun_rilis ?>">
            </div>
          </div>

          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status Manga</legend>
            <div class="col-sm-10">


              <?php 
                if ($status_manga=='Completed'){
                  echo "
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='statusmanga' id='gridRadios1' value='Completed' checked>
                    <label class='form-check-label' for='gridRadios1'> Completed </label>
                  </div>

                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='statusmanga' id='gridRadios2' value='On Going'>
                    <label class='form-check-label' for='gridRadios2'> On Going </label>
                  </div>

                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='statusmanga' id='gridRadios2' value='On Hiatus' checked>
                    <label class='form-check-label' for='gridRadios2' name='statusmanga'> On Hiatus </label>
                  </div>
                  ";
                }
                else
                {
                  echo "
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='statusmanga' id='gridRadios1' value='Completed'>
                    <label class='form-check-label' for='gridRadios1'> Completed </label>
                  </div>
                  
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='statusmanga' id='gridRadios2' value='On Going' checked>
                    <label class='form-check-label' for='gridRadios2'> On Going </label>
                  </div>
                  
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='statusmanga' id='gridRadios2' value='On Hiatus' checked>
                    <label class='form-check-label' for='gridRadios2' name='statusmanga'> On Hiatus </label>
                </div>
                  ";
                }

              ?>
          </fieldset>


          <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Edit Manga</button>
        </form>

      <?php

        }
        
        /*Mengecek apabila tombol Tambahkan diklik*/
        if (isset ($_POST['simpan'])) {
           
            /*Menerima dan Menampung data*/
            $id_manga  = $_POST['idmanga'];
            $judul_manga  = $_POST['judulmanga'];
            $author_manga = $_POST['authormanga'];
            $genre_manga  = $_POST['genremanga'];
            $rilis_manga  = $_POST['rilismanga'];
            $status_manga = $_POST['statusmanga'];

            /*Melakukan penyimpanan data ke tabel katalog*/
            $sql=mysqli_query ($config, "UPDATE tb_katalog SET manga_judul ='$judul_manga', manga_penulis ='$author_manga', manga_genre ='$genre_manga', manga_rilis ='$rilis_manga', manga_status ='$status_manga' WHERE manga_id='$id_manga'");

            echo "<br><h5>Data Manga berjudul <b><i>".$judul_manga."</b></i> berhasil diubah.</h5>";

            }
        ?>
        <br>
        <a href="index.php"  class="btn btn-primary">Back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
