<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/gaya.css">
  <title>KyzutoXT Site's</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <div class="header">
    <marquee behavior="100px" direction="left">
      <h3>
        Halaman Waifu - Music by Ho-Kago Tea Time : Cagayake! GIRLS
      </h3>
    </marquee>
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
        <li><a href="../../Waifu/waifu.html">Apa itu Waifu?</a></li>
        <li><a href="../../Waifu/mioakiyama.html">Mio Akiyama</a></li>
        <li><a href="../../Waifu/hutao.html">Hu Tao</a></li>
        <li><a href="../../Waifu/azusanakano.html">Azusa Nakano</a></li>
        <li><a href="../../Waifu/katoumegumi.html">Katou Megumi</a></li>
        <li><a href="../../Waifu/mikunakano.html">Miku Nakano</a></li>
        <li><a href="../../Waifu/march7th.html">March 7th</a></li>
        <li><a href="../../Waifu/koito.html">Minase Koito</a></li>
        <li><a href="../../Waifu/maika.html">Maika Sakuranomiya</a></li>
        <li><a href="../../Waifu/perbandingan.html">Waifu vs Nyata</a></li>
      </ul>
      <ul class="daftarisi">
        <li><a href="../../index.html">Beranda</a></li>
      </ul>
    </div>
    <div class="kotenutama">
      <audio src="../assets/music/Cagayake!GIRLS.mp3" autoplay loop></audio>
      <table border="1" id="tabelasi">
        <tr>
          <th>Daftar Keluhan Website</th>
        </tr>
        <tr>
          <td>
            <table>
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>IDENTITAS</th>
                  <th>KELUHAN</th>
                  <th>ALASAN</th>
                  <th>U&D</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM keluhan";
                $kueri = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($d = mysqli_fetch_array($kueri)) {
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['nomorid']; ?></td>
                    <td><?php echo $d['keluhan']; ?></td>
                    <td><?php echo $d['alasan']; ?></td>
                    <td><a href="editkeluhan.php?id=<?php echo $d['idkeluhan'];?>">Edit</a>
                    <a href="hapuskeluhan.php?id=<?php echo $d['idkeluhan'];?>">Hapus</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="footer">
    <h4 class="agensi" style="text-align: center;"></h4>
  </div>
  <script src="../assets/JAVScript/musikbackgroundintern.js"></script>
</body>

</html>