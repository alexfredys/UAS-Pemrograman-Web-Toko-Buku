<?php include('../../../helper/connection.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- link tambahan -->
    <link rel="stylesheet" type="text/css" href="assets/register.css">
    <title>Registrasi</title>
  </head>
  <body>
  <div class="container">
        <h2 class="alert alert-dark text-center mt-1">Registrasi</h2>
        <form action="process/add_data.php" method="POST">
            <?php 
            $tampilkan_isi = "select count(id_customer) as jumlah from customer;";
            $tampilkan_isi_sql = mysqli_query($con,$tampilkan_isi);
            $no = 1;
                    
            while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
            {
            $jumlah = $isi['jumlah'];
            ?>

            <input type="hidden" name="id_customer" value="CUS-<?php echo $no+$jumlah; ?>">

            <?php } ?>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama_customer" placeholder="Masukkan Nama Anda">
            </div>
            
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="row row-space">
                    <div class="form-check">
                        <input type="radio" name="jk_customer" value="Laki-Laki">
                        <label>Laki-Laki</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="jk_customer" value="Perempuan">
                        <label>Perempuan</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat_customer" class="form-control" placeholder="Masukkan Alamat Anda"></textarea>
            </div>

            <div class="form-group">
                <div class="row row-space">
                    <div class="col-6">
                        <label class="label">Email</label><br>
                        <input class="form-control" type="email" name="email_customer" placeholder="Masukkan Email Anda">
                    </div>

                    <div class="col-6">
                        <label class="label">No Handphone</label>
                        <input class="form-control" type="number" name="telp_customer" placeholder="Masukkan No Tlp Anda">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row row-space">
                    <div class="col-6">
                        <label class="label">Username</label><br>
                        <input class="form-control" type="text" name="username" placeholder="Masukkan Username Anda">
                    </div>

                    <div class="col-6">
                        <label class="label">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Masukkan Password Anda">
                    </div>
                </div>
            </div>            
                        
            <button class="btn btn-dark" type="submit">Submit</button><br><br>
            <h6 class="text-center">Sudah punya akun?</h6>
            <div class="text-center"><a href="../../index.php" class="txt-back">Kembali</a></div>
        </form>        
    </div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>