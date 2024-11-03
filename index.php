<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'includes/header.php';
include 'includes/menu.php';
?>

<div class="content mt-5">
    <?php
    if ($page == 'home') {
        echo "
        <section class='hero'>
            <div class='hero-content'>
                <h2>Selamat Datang di ApotekStore</h2>
                <p>Platform Informasi Obat Terpercaya untuk Kesehatan Anda</p>
                <a href='index.php?page=obat' class='btn btn-primary'>List Obat</a>
            </div>
        </section>";
    } elseif ($page == 'about') {
        include 'about.php';
    } elseif ($page == 'contact') {
        include 'contact.php';
    } elseif ($page == 'obat') {
        include 'obat.php';
    } else {
        echo "<h2>404 - Halaman Tidak Ditemukan</h2>";
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
