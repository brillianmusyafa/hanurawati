<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selamat Purna Tugas</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Animate CSS for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            padding-bottom: 60px;
            /* Beri ruang untuk navigasi bawah */
        }

        /* Custom style untuk navigasi bawah */
        .navbar-bottom {
            background-color: #b02a37ab;
            color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            padding: 10px 0;
        }

        .navbar-bottom .nav-link {
            color: white;
            text-align: center;
        }

        .logo {
            /* padding: 20px; */
        }

        .logo img {
            width: 50px;
            margin: 10px;
        }

        .hero-section {
            background: url('https://images.unsplash.com/photo-1516617442634-75371039cb3a') no-repeat center center;
            background-size: cover;
            height: 100vh;
            color: white;
            text-align: center;
            /*display: flex;*/
            align-items: center;
            justify-content: center;
            animation: fadeIn 2s ease-in-out;
        }



        #info {
            height: 100vh;
            padding-top: 38%;
            padding-bottom: 60px;
            background: url('https://images.unsplash.com/photo-1515923019249-6b544314450f') no-repeat center center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
        }

        #rsvp {
            height: 100vh;
        }

        #comment {
            padding-bottom: 60px;
            background: url('https://images.unsplash.com/photo-1533628635777-112b2239b1c7') no-repeat center center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .avatar {
            width: 60px;
            display: inline-block;
        }

        .hero-section h1 {
            font-size: 3rem;
            animation: zoomIn 2s ease-in-out;
        }

        .section-padding {
            padding: 60px 15px;
            animation: fadeInUp 2s ease-in-out;
        }

        /* Animasi untuk setiap elemen */
        .animate {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .animate-up {
            animation-name: fadeInUp;
        }

        .animate-down {
            animation-name: fadeInDown;
        }

        .animate-left {
            animation-name: fadeInLeft;
        }

        .animate-right {
            animation-name: fadeInRight;
        }

        .animate-fade {
            animation-name: fadeIn;
        }

        .animate-zoom {
            animation-name: zoomIn;
        }

        .animate-bounce {
            animation-name: bounceIn;
        }

        .animate-rotate {
            animation-name: rotateIn;
        }

        .animate-flip {
            animation-name: flipInX;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translate3d(100%, 0, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale3d(0.3, 0.3, 0.3);
            }

            50% {
                opacity: 1;
            }

            to {
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes bounceIn {

            from,
            20%,
            40%,
            60%,
            80%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                transform: scale3d(0.3, 0.3, 0.3);
            }

            20% {
                transform: scale3d(1.1, 1.1, 1.1);
            }

            40% {
                transform: scale3d(0.9, 0.9, 0.9);
            }

            60% {
                opacity: 1;
                transform: scale3d(1.03, 1.03, 1.03);
            }

            80% {
                transform: scale3d(0.97, 0.97, 0.97);
            }

            to {
                opacity: 1;
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes rotateIn {
            from {
                transform-origin: center;
                transform: rotate3d(0, 1, 0, -200deg);
                opacity: 0;
            }

            to {
                transform-origin: center;
                transform: rotate3d(0, 1, 0, 0deg);
                opacity: 1;
            }
        }

        @keyframes flipInX {
            from {
                transform-origin: center;
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }

            40% {
                transform-origin: center;
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            60% {
                transform-origin: center;
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                transform-origin: center;
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                opacity: 1;
            }

            to {
                transform-origin: center;
                transform: perspective(400px) rotate3d(1, 0, 0, 0deg);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="animate-fade">
    <!-- Hero Section -->
    <div class="hero-section" id="home">
        <div class="logo">
            <img src="logo_kab_tegal.svg" width="100" alt="Logo Kabupaten Tegal">
            <img src="logo_dishub.png" width="100" alt="Logo Kabupaten Tegal">
        </div>
        <div style="margin-top: 100px;">
            <h1>Selamat Purna Tugas</h1>
            <h2>Hanurawati <br> Administrasi Keuangan</h2>
            <p>Dinas Perhubungan Kabupaten Tegal</p>
        </div>
    </div>

    <!-- Informasi Acara -->
    <section id="info" class="section-padding bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Assalamu'alaikum</h2>

            <p>Terima kasih kepada rekan-rekan yang telah menjadi bagian dari perjalanan ini. <br> Purna tugas bukanlah
                akhir, melainkan babak baru dalam hidup. Semoga di waktu yang akan datang, saya bisa tetap berbagi
                pengalaman dan menikmati hari-hari dengan kebahagiaan yang baru. <br> Sampai jumpa dalam kesempatan yang
                lain!"
            </p>
        </div>
    </section>


    <section id="rsvp" class="section-padding bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Komentar</h2>
            <form action="submit.php" name="form-komentar" method="post">
                <div class="mb-3">
                    <label class="form-check-label" for="avatar1">
                        <img class="avatar"
                            src="https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/muslim_man_avatar-512.png"
                            alt="Avatar 1">
                    </label>
                    <label class="form-check-label" for="avatar2">
                        <img class="avatar"
                            src="https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/muslim_woman_paranja_avatar-128.png"
                            alt="Avatar 2">
                    </label>
                </div>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value="pria"
                            required>
                        <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value="wanita">
                        <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <textarea name="komentar" class="form-control" id="komentar" rows="3"
                        placeholder="komentar..."></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Kirim Bunga</button>
            </form>
        </div>
    </section>

    <section id="comment" class="section-padding">
        <div>

            <h2 class="mt-4">Komentar</h2>
            <?php
            $pria = "https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/muslim_man_avatar-128.png";
            $wanita = "https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/muslim_woman_paranja_avatar-128.png";
            $db = new SQLite3('db.db');
            $sql = "SELECT * FROM komentar ORDER BY id DESC";
            $result = $db->query($sql);
            while ($row = $result->fetchArray()) {
                if ($row['jenis_kelamin'] == 'pria') {
                    $avatar = $pria;
                } else {
                    $avatar = $wanita;
                }
                echo '<div class="media my-3">';
                echo '<img class="mr-3" width="50" src="' . $avatar . '" alt="Avatar">';
                echo '<div class="media-body">';
                echo '<strong class="text-primary">' . $row['nama'] . '</strong> <small class="text-muted">(' . date('d-m-Y H:i', strtotime($row['created_at'])) . ')</small><br/>';
                echo '<p class="bg-light p-2 rounded">' . $row['komentar'] . '</p>';

                echo '</div>';
                echo '</div>';
            }
            $db->close();
            ?>

        </div>
    </section>

    <!-- Footer Navigation -->
    <nav class="navbar-bottom navbar navbar-expand d-flex justify-content-around">
        <a class="nav-link" href="#home"><i class="fas fa-images"></i><br>Home</a>
        <a class="nav-link" href="#info"><i class="fas fa-info-circle"></i><br>Informasi</a>
        <a class="nav-link" href="#rsvp"><i class="fas fa-envelope"></i><br>Ucap</a>

        <a class="nav-link" href="#sound" onclick="playAudio()"> <i class="fas fa-music"></i><br>Play Sound</a>

    </nav>

    <!-- <audio id="audio" src="lagu.mp3" preload="auto" autoplay></audio> -->
    <audio id="audio" controls autoplay class="d-none">
        <source src="lagu.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung elemen audio.
    </audio>


    <script>
        function playAudio() {
            var audio = document.getElementById("audio");
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }

        // Menunggu halaman selesai dimuat
        window.addEventListener('load', function () {
            const audio = document.getElementById('audio');
            // Memainkan audio setelah interaksi pengguna
            document.body.addEventListener('click', function () {
                audio.play();
            }, { once: true }); // Menghindari multiple clicks
        });

        /*************  ✨ Codeium Command ⭐  *************/
        // Memainkan audio ketika pengguna scroll
        window.addEventListener('scroll', function () {
            const audio = document.getElementById('audio');
            if (audio.paused) {
                audio.play();
            }
        }, { once: true }); // Menghindari multiple scroll
        /******  f30dce0a-0dc4-4035-8ba0-67c16153e2b8  *******/
    </script>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('#avatar option').forEach(function (option) {
            if (option.hasAttribute('data-img-src')) {
                option.innerHTML = `<img src="${option.getAttribute('data-img-src')}" alt=""> ${option.textContent}`;
            }
        });
    </script>
</body>

</html>