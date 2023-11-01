<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      background: rgba(0, 0, 0, 0.85);
      justify-content: center;
      align-items:center;
    }
    .table {
      width: 100%;

    }

  </style>
  </head>
  <body>
      
    <br>
    <br> 
    <div class="container">
        <h1 style="color: White;">Top Manga</h1>
        <br>

        <a href="tambah-list.php"  class="btn btn-danger">Add Manga</a>
        <br>
        <br>

        <table class="table" method="GET" style="color: WhiteSmoke;  font-weight: 600;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">Release Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                <?php 
                    include ('config.php');
                    //*********** Perintah menampilkan daftar buku ***********//
                    $sql=mysqli_query($config, "select * from tb_katalog order by manga_id ASC");
                    $no=1;
                        while ($row=mysqli_fetch_array($sql)){
                          $judul_manga=$row['manga_judul'];
                            echo "
                                  <tr>
                                    <td width='30'>".$no."</td>
                                    <td width='100'><image width='100px' src='img/".$row['manga_cover']."'></td>
                                    <td width='80'>".$row['manga_judul']."</td>
                                    <td width='100'>".$row['manga_penulis']."</td>
                                    <td width='150'>".$row['manga_genre']."</td>
                                    <td width='80'>".$row['manga_rilis']."</td>
                                    <td width='100'>".$row['manga_status']."</td>
                                    <td width='100'> <a class='btn btn-primary' href='edit-list.php?manga_id=".$row['manga_id']."'>Edit</a> <a class='btn btn-danger' href='hapus-list.php?manga_id=".$row['manga_id']."'>Delete</a> </td>
                                  </tr>";
                          $no++;
                        };
                ?>
    
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
