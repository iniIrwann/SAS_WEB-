<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>  
  <div class="pemandangan">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
        <a class="navbar-brand nav1" href="https://instagram.com/onepplg?igshid=YzAwZjE1ZTI0Zg=="><img src="logopplg1.jpeg" alt=""width="79px" style="border-radius: 50%;"></a>
          <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item pe-3">
                <a class="nav-link active text-white" aria-current="page" href="index.php"><b>HOME</b></a>
              </li>
              <li class="nav-item pe-3">
                <a class="nav-link text-white" href="sejarah.php"><b>SEJARAH</b></a>
              </li>
              <li class="nav-item pe-3">
                <a class="nav-link text-white" href="tokoh.php"><b>TOKOH</b></a>
              </li>       
              <li class="nav-item pe-3">
                <a class="nav-link text-white" href="#comment"><b>COMMENT</b></a>
              </li>  
            </ul>     
      </nav>   
      <div class="main-judul">Bandung Lautan Api</div>
    </div>
    <!-- ini row pertama -->
<div class="page2 desc" id="comment">
<div class="shadow"></div>
<div class="container">
<form action="" method="post">
  <div class="mb-3">
    <label class="form-label" id="nama">Nama</label>
    <input type="text" class="form-control" name="Nama" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pesan</label>
    <input type="text" class="form-control" name="Pesan">
  </div>
  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
</form>
</div>
    <?php
    include "koneksi.php";  
            if(isset($_POST["Submit"])) {
                mysqli_query($koneksi,"INSERT into comment set
                nama = '$_POST[Nama]',
                pesan = '$_POST[Pesan]'"); 
                echo "
                <div class=\"container\" align=\"center\">Data Anda Telah Tersimpan
                </div> ";
            }
          ?>

<?php
$no=1;
$ambildata=mysqli_query($koneksi,"select * from comment");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <div class=\"container\" align=\"center\">
    <br>
<div class=\"card\" style=\"width: 25rem\">
  <ul class=\"list-group list-group-flush\">
    <li class=\"list-group-item\">Nama :" . $tampil['nama'] . "</li>
    <li class=\"list-group-item\">Pesan :" . $tampil['pesan'] . "</li>
  </ul>
</div>
</div>

";
}
?>
 </body> 
</html>