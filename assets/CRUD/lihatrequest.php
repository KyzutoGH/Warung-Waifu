<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/gaya.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
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

        td a {
            text-decoration: none;
        }

        .request-link {
            display: block;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
    <title>KyzutoXT Site's</title>
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
                <li><a href="../../Waifu/request.html">Request Konten Waifu</a></li>
            </ul>
            <ul class="daftarisi">
                <li><a href="../../index.html">Beranda</a></li>
            </ul>
        </div>
        <div class="kotenutama">
            <audio src="../assets/music/Cagayake!GIRLS.mp3" autoplay loop></audio>
            <table border="1" id="tabelasi">
                <tr>
                    <th>Daftar Request Waifu</th>
                </tr>
                <tr>
                    <td>
                        <table border="1" style="width: 100%;">
                            <tr>
                                <td>NO</td>
                                <td>NAMA</td>
                                <td>DOMISILI</td>
                                <td>WAIFU</td>
                                <td>SOURCE</td>
                                <td>TIPE</td>
                            </tr>
                            <tr>
                                <?php

                                include "koneksi.php";

                                $sql = "SELECT * FROM requestwaifu";

                                $kueri = mysqli_query($koneksi, $sql);
                                $no = 1;
                                while ($d = mysqli_fetch_array($kueri)) {
                                ?>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['domisili']; ?></td>
                                    <td><?php echo $d['waifu']; ?></td>
                                    <td><?php echo $d['saus']; ?></td>
                                    <td><?php echo $d['tipe']; ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="6">
                                Mau request juga? <a href="../../Waifu/request.html" class="request-link" style="text-decoration: none;">Request</a>
                            </td>
                        </tr>
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