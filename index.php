<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2 - HTML Dasar</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6e6e6;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #f8f8f8;
            padding: 20px;
            border: 1px solid #999;
        }

        .header {
            border: 1px solid #999;
            padding: 10px;
            display: flex;
            align-items: center;
            background-color: #eee;
        }

        .header img {
            width: 70px;
            margin-right: 15px;
        }

        h1 {
            font-size: 22px;
            margin: 0;
        }

        h2 {
            font-size: 18px;
            margin: 3px 0;
        }

        .center-text {
            text-align: center;
            font-size: 13px;
            margin-top: 10px;
        }

        hr {
            margin: 15px 0;
        }

        h3 {
            margin-top: 20px;
        }

        ul, ol {
            font-size: 14px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="header">
        <img src="foto/Logo_Unsiq.jpg" alt="Logo Unsiq">
        <div>
            <h1>Selamat Datang di Mata Kuliah Pemrograman Web</h1>
            <h2>Pertemuan 2: HTML Dasar</h2>
        </div>
    </div>

    <div class="center-text">
        Mata kuliah ini memperkenalkan dasar-dasar pemrograman web menggunakan HTML, CSS, dan JavaScript.<br>
        Pada pertemuan ini, kita fokus pada struktur dan elemen dasar HTML.
    </div>

    <hr>

    <p>
        HTML adalah bahasa markup yang digunakan untuk membuat struktur halaman web. 
        Dengan HTML, kita bisa menampilkan teks, gambar, dan link secara terorganisir.
        Untuk informasi lengkap dari HTML dapat kunjungi link berikut:
        <a href="#">Penjelasan HTML</a>
    </p>

    <h3>Topik Utama Pertemuan Ini:</h3>

    <ul>
        <li>Struktur HTML</li>
        <li>Heading dan Paragraf</li>
        <li>List (Unordered dan Ordered)</li>
        <li>Link dan Gambar</li>
        <li>Tabel</li>
    </ul>

    <h3>Langkah Praktikum:</h3>

    <ol>
        <li>Buat file index.php</li>
        <li>Tulis kode HTML</li>
        <li>Simpan dan buka di browser
            <ul>
                <li>buka xampp</li>
                <li>nyalakan server</li>
                <li>buka browser dengan url localhost/...</li>
            </ul>
        </li>
        <li>Verifikasi hasil</li>
    </ol>

</div>

</body>
</html>