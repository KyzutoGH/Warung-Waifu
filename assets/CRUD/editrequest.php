<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/gaya.css" />
    <style>
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        tr {
            margin-bottom: 15px;
        }

        td {
            padding: 8px;
        }

        input[type="text"],
        input[type="radio"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        .kirim {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .kirim:hover {
            background-color: #45a049;
        }

        .waifu-types {
            margin-top: 5px;
        }

        .waifu-types label {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
    <title>KyzutoXT Site's</title>
</head>

<body>
    <div class="header">
        <marquee behavior="100px" direction="left">
            <h3>Halaman Waifu</h3>
        </marquee>
    </div>
    <div class="konten">
        <div class="daftarkonten">
            <h1 class="pala">Daftar Isi</h1>
            <ul class="daftarisi">
                <h4>Personal</h4>
                <li><a href="../../Personal/personal.html">Personal Data</a></li>
                <li>
                    <a href="../../Personal/pengalaman.html">Pendidikan dan Pengalaman</a>
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
                <li><a href="request.html">Request Konten Waifu</a></li>
            </ul>
            <ul class="daftarisi">
                <li><a href="../index.html">Beranda</a></li>
            </ul>
        </div>
        <div class="kotenutama">
            <table border="1" id="tabelasi">
                <form action="proseseditreq.php" method="post" enctype="multipart/form-data">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM requestwaifu WHERE id=$id";
                    $query = mysqli_query($koneksi, $sql);

                    while ($d = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td>
                                <b>Nama Anda</b>
                            </td>
                            <td>
                                <input type="hidden" name="id" id="inputan" value="<?php echo $d['id']; ?>" />
                                <input type="text" name="nama" id="inputan" value="<?php echo $d['nama']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Domisili</b>
                            </td>
                            <td>
                                <input type="text" name="domisili" id="inputan" value="<?php echo $d['domisili']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Waifu yang Direquest</b>
                            </td>
                            <td>
                                <input type="text" name="waifu" id="inputan" value="<?php echo $d['waifu']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Source Waifu</b>
                            </td>
                            <td>
                                <input type="text" name="saus" id="inputan" value="<?php echo $d['saus']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Tipe Waifu</b>
                            </td>

                            <td class="waifu-types">
                                <label><input type="radio" name="tipe" value="Loli" <?php echo ($d['tipe'] == 'Loli') ? 'checked' : ''; ?> />Loli</label>
                                <label><input type="radio" name="tipe" value="Onee-San" <?php echo ($d['tipe'] == 'Onee-San') ? 'checked' : ''; ?> />Onee-San</label>
                                <label><input type="radio" name="tipe" value="Mommy" <?php echo ($d['tipe'] == 'Mommy') ? 'checked' : ''; ?> />Mommy</label>
                                <label><input type="radio" name="tipe" value="Trap" <?php echo ($d['tipe'] == 'Trap') ? 'checked' : ''; ?> />Trap</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="lihatrequest.php" class="kirim" style="text-decoration: none;">Lihat Request</a>
                            </td>
                            <td>
                                <input type="submit" value="Kirim" class="kirim" />
                            </td>
                        </tr>
                    <?php } ?>
                </form>
            </table>
        </div>
    </div>
    <div class="footer">
        <h4 class="agensi" style="text-align: center"></h4>
    </div>
    <script src="../assets/JAVScript/musikbackgroundintern.js"></script>
</body>

</html>