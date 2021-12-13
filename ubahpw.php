<?php
    include "assets/navbar.php";
?>
<body>

    <br>
    <div class="container" style="background-color: #F1F1F1; margin-top:10px">
    <div class="row">
        <h3 class="text-left" style="color: #9B9B9B; margin-top:2%">Ubah Password</h3>
        <br><br>
        <label for="">Password Lama</label>
        <br>
    </div>
    </div>

    <div class="container">
    <form action="" class="form-inline">
        <div class="row">
        <input class="no-outline " style="width: 100%; " type="password" placeholder="">
        </div>
    
    </div>
    <div class="container" style="background-color: #F1F1F1;">
    <br>
    <label for="">Passoword Baru</label>
    </div>
    <div class="container">
        <div class="row">
        <input class="no-outline " style="width: 100%; " type="password" placeholder="">
        </div>
    </div>
    </form>
    <div class="container" style="background-color: #F1F1F1;">
    <br><br>
  <div class="row text-center">
        <div class="row justify-content-center">
      <br>
      <input type="button" class="btn btn-outline-secondary btn-sm text-center" onclick="location.href='sukses.php';" style="width: 80%;" value="Simpan">
         
      </div>
          </div>
          <br><br>
    </div>
    <div class="container">
        <br>
        <img class="gbr gbr2" src="assets/logo.png" style="border-radius:50%"class="img-thumbnail"alt="">
        <br>
    </div>
</body>
<?php
    include "assets/footer.php";
?>