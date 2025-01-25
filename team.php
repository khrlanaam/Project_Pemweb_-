<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-journal-text icon"></i></div>
              <h4><a href="index.php?hal=home" class="stretched-link">Informasi</a></h4>
              <p>Informasi tentang Sejarah, Visi & Misi Puskesmas Sehat</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar-check icon"></i></div>
              <h4><a href="index.php?hal=layanan" class="stretched-link">Layanan</a></h4>
              <p>Informasi tentang pelayanan yang tersedia di Puskesmas Sehat</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-pencil-square icon"></i></div>
              <h4><a href="index.php?hal=pendaftaran" class="stretched-link">Pendaftaran Online</a></h4>
              <p>Daftar secara online untuk mendapatkan layanan kesehatan dengan lebih mudah.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-envelope-check icon"></i></div>
              <h4><a href="index.php?hal=kontak" class="stretched-link">Kontak Kami</a></h4>
              <p>Kontak kami jika anda butuh bantuan</p>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <p><span>Informasi</span> <span class="description-title">Tim Pengembang</span></p>
</div>

<div id="kelompok" class="container">
  <!-- Informasi Kelompok -->
  <div class="team-intro">
    <h1>KELOMPOK 3</h1>
    <p>Teknik Informatika 11 | Pemrograman Web 1</p>
  </div>
  <!-- Anggota Tim -->
  <div class="team">
    <?php
    // Data anggota tim 
    $team = [
      [
        "nama" => "Muhammad Khoirul Anam",
        "gambar" => "img/anam.jpeg",
        "deskripsi" => "NIM : 0110224027"
      ],
      [
        "nama" => "Muhammad Raisa Qisti Raihan",
        "gambar" => "img/rayhan.jpg",
        "deskripsi" => "NIM : 0110224018"
      ],
      [
        "nama" => "Revani",
        "gambar" => "img/revani.jpg",
        "deskripsi" => "NIM : 0110224111"
      ],
      [
        "nama" => "Yurida Yahsya",
        "gambar" => "img/yuri.jpg",
        "deskripsi" => "NIM : 0110224100"
      ],
      [
        "nama" => "Intan Ayu Lestari",
        "gambar" => "img/intan.jpg",
        "deskripsi" => "NIM : 0110224118"
      ]
    ];

    // Menampilkan profil anggota tim
    foreach ($team as $member) {
      echo "
      <div class='member'>
        <img src='{$member['gambar']}' alt='Foto {$member['nama']}'>
        <div>
          <h2>{$member['nama']}</h2>
          <p>{$member['deskripsi']}</p>
        </div>
      </div>";
    }
    ?>
  </div>
</div>