<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="style/css/style.css" rel="stylesheet">

<body>

  <form id="regForm" action="proses_php/registerProses.php" method="POST">
    <h1>Register User COCOMO II :</h1>

    <div class="tab">
      <label for="">Nama</label>
      <p><input placeholder="Masukkan nama ..." oninput="this.className = ''" name="nama"></p>
      <label for="">Email</label>
      <p><input placeholder="Masukkan email ..." oninput="this.className = ''" name="email"></p>
      <label for="">Username</label>
      <p><input placeholder="Masukkan username ..." oninput="this.className = ''" name="username"></p>
      <label for="">Password</label>
      <p><input placeholder="Masukkan password ..." oninput="this.className = ''" name="password" type="password"></p>
    </div>

    <a href="login.php">
      <p for="">Sudah punya akun ?</p>
    </a>

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <p>&copy; 2019 LUG</p>
    </div>

  </form>

</body>

<script src="js/formPagination.js"></script>

</html>