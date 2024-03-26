<?php
    $nama = "Arman Sholihin";
    $umur = 21;
    $alamat = "Jakarta Utara";
    $email = "armannn@gmail.com";
    $nomor = '0857758990';
    $_univ = "Universitas Yarsi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Arman Sholihin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }

    input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }
    
    .header {
    text-align: center;
    }

    .red-text {
    color: red;
    }


    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">YARSI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Portofolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div id="biodata" hspace="10">
        <h1>Biodata</h1>
        <img src="https://i.pinimg.com/736x/78/36/a8/7836a86777cdb65e94aa1a88acddf26e.jpg" alt="Profile Arman" width="150" height="200" hspace="10">
        
        <div>
        <a>Nama : <span class="red-text"><?= $nama ?></span></a><br>
        <a>Umur : <span class="red-text"><?= $umur ?></span></a><br>
        <a>Alamat : <span class="red-text"><?= $alamat ?></span></a><br>
        <a>Email : <span class="red-text"><?= $email ?></span></a><br>
        <a>Nomor Telepon : <span class="red-text"><?= $nomor ?></span></a><br>
        <a>Kampus : <span class="red-text"><?= $_univ ?></span></a>
        </div><br>



        <div>
        <p><?= $nama ?> adalah seorang mahasiswa <?= $_univ ?> yang sedang menjalani kehidupanya di smester 6 dan sedang menjalani sebuah program studi dari pemerintah yaitu Kampus Merdeka dengan mengambil studi independen di mitra NF Computer - Akademi Fullstack Web Developer. Pada tahun ini <?= $nama ?> baru saja memulai perjalanannya mempelajari bagaimana cara menjadi web developer. Hal yang mendorongnya untuk mempelajari web adalah project kampus nya yang membutuhkan seorang web developer.</p>
        </div><br>

        <div>
            <h2>Education</h2><br>
            <ul type="square">
            <li>Sekolah Dasar: SD Negeri 05 Pagi <?= $alamat ?> (2009—2015)</li>
            <li>Sekolah Menengah Pertama: SMP Negeri 289 <?= $alamat ?> (2015—2018)</li>
            <li>Sekolah Menengah Atas: SMA Negeri 75 <?= $alamat ?> (2019—2021)</li>
            <li>Kuliah</li>
            <ol type="a">
                <li>smester 1</li>
                <li>smester 2</li>
                <li>smester 3</li>
                <li>smester 4</li>
                <li>smester 5</li>
                <li>smester 6</li>
            </ol>
            </ul><br>

            <h2>Portofolio</h2><br>
            <p>Digital Pathology for Cervical Cancer Web</p>
            <img src="web ss.PNG" alt="Profile Arman" width="600" height="300" hspace="10">
            
            <p>Pengalaman saya dalam membuat sebuah WebApp Digital Pathology yang dibekali AI melalui sebuah proyek kolaboratif dengan teman kelompok yang sudah di tentukan. Proyek ini di ambil berdasarkan pilihan dan kesepakatan kita bersama. Dalam proyek ini kami membangun sebuah web yang di bekali AI yang sudah kami latih modelnya agar dapat mendeteksi sel kanker serviks.</p>
        </div><br>

        <div>
            <h3 class="header">Contact Form</h3>

            <div class="container">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>



        </div>
    </div>

</body>
</html>