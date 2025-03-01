<?php
// Cek User Agent untuk menentukan apakah pengguna menggunakan perangkat mobile atau desktop
function isMobile()
{
    return preg_match('/(android|iphone|ipad|ipod|blackberry|opera mini|iemobile|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}

// Redirect berdasarkan jenis perangkat
if (isMobile()) {
    header("Location: login_mobile.php");
} else {
    header("Location: login_desktop.php");
}
exit;
