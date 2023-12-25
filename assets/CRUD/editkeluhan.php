<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/gaya.css">
    <title>KyzutoXT Site's</title>
  </head>
  <body>
    <div class="header">
      <marquee behavior="100px" direction="left"
        ><h3>
          Halaman Waifu - Music by Ho-Kago Tea Time : Cagayake! GIRLS
        </h3></marquee
      >
    </div>
    <div class="konten">
      <div class="daftarkonten">
        <h1 class="pala">Daftar Isi</h1>
        <ul class="daftarisi">
          <h4>Personal</h4>
          <li><a href="../Personal/personal.html">Personal Data</a></li>
          <li>
            <a href="../Personal/pengalaman.html">Pendidikan dan Pengalaman</a>
          </li>
        </ul>
        <ul class="daftarisi">
          <h4 class="aktif">Konten Waifu</h4>
          <li><a href="waifu.html">Apa itu Waifu?</a></li>
          <li><a href="mioakiyama.html">Mio Akiyama</a></li>
          <li><a href="hutao.html">Hu Tao</a></li>
          <li><a href="azusanakano.html">Azusa Nakano</a></li>
          <li><a href="katoumegumi.html">Katou Megumi</a></li>
          <li><a href="mikunakano.html">Miku Nakano</a></li>
          <li><a href="march7th.html">March 7th</a></li>
          <li><a href="koito.html">Minase Koito</a></li>
          <li><a href="maika.html">Maika Sakuranomiya</a></li>
          <li><a href="perbandingan.html">Waifu vs Nyata</a></li>
        </ul>
        <ul class="daftarisi">
          <li><a href="../index.html">Beranda</a></li>
        </ul>
      </div>
      <div class="kotenutama">
        <audio src="../music/Cagayake!GIRLS.mp3" autoplay loop></audio>
        <table border="1" id="tabelasi">
            <tr>
                <th>Formulir Keluhan Website</th>
            </tr>
          <tr>
            <td>
              <table border="1" style="width: 100%;">
                <form action="proseseditkl.php" method="post">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM keluhan WHERE idkeluhan=$id";
                    $query = mysqli_query($koneksi,$sql);
                    
                    while ($d = mysqli_fetch_array($query)) {
                    ?>
                  <tr>
                    <td>Nama Anda</td>
                    <input type="hidden" name="id" value="<?php echo $d['idkeluhan']; ?>">
                    <td><input type="text" name="nama" id="inputan" value="<?php echo $d['nama']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Nomor Identitas Anda</td>
                    <td><input type="text" name="nomorid" id="inputan" value="<?php echo $d['nomorid']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Keluhan</td>
                    <td><input type="text" name="keluhan" id="inputan" value="<?php echo $d['keluhan']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Alasan</td>
                    <td><textarea name="alasan" id="" cols="52" rows="10"><?php echo $d['alasan']; ?></textarea></td>
                  </tr>
                  <tr>
                    <td><center><input type="reset" name="Reset" style="background-color: red;"></center></td>
                    <td><center><input type="submit" name="Kirim" style="background-color: skyblue;"></center></td>
                  </tr>
                  <?php } ?>
                </form>
              </table>
            </td>
          </tr>
          <tr>
            <td>Sudah merasa puas? Silahkan kembali lagi ke <a href="../../index.html">Sini</a>. Atau mau lihat keluhan? <a href="keluhkesah.php">Disini</a></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="footer">
      <h4 class="agensi" style="text-align: center;"></h4>
    </div>
    <script src="../JAVScript/musikbackgroundintern.js"></script>
  </body>
</html>
