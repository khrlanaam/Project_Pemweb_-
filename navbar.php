<div class="container position-relative d-flex align-items-center justify-content-between">
    <!-- Logo -->
    <a href="index.php?hal=home" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="Logo Puskesmas" class="logo-image me-2" style="max-width: 50px;">
        <h1 class="sitename">Puskesmas Sehat</h1>
    </a>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="index.php?hal=home" class="active">Home</a></li>
            <li><a href="index.php?hal=jadwal">Jadwal Operasional</a></li>
            <li><a href="index.php?hal=layanan">Layanan</a></li>
            <li><a href="index.php?hal=pendaftaran">Pendaftaran</a></li>
            <li><a href="index.php?hal=kontak">Kontak</a></li>
            <li><a href="index.php?hal=tentang">Tentang Kami</a></li>
            <li><a href="index.php?hal=team">Team</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
</div>

<!-- JavaScript -->
<script>
    // JavaScript untuk membuka dan menutup navbar di tampilan mobile
    document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
        const menu = document.querySelector('.navmenu ul');
        menu.classList.toggle('show'); // Toggle the display of the menu
        this.classList.toggle('open'); // Toggle the hamburger icon color
    });
</script>
