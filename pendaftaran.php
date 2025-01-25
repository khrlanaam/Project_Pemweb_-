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
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="index.php?hal=jadwal" class="stretched-link">Jadwal Operasional</a></h4>
              <p>Informasi tentang jadwal operasional yang tersedia di Puskesmas Sehat</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-calendar-check icon"></i></div>
              <h4><a href="index.php?hal=layanan" class="stretched-link">Layanan</a></h4>
              <p>Informasi tentang pelayanan yang tersedia di Puskesmas Sehat</p>
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

<section id="registration" class="registration section py-5" style="background-color: #edf2f7;">
    <div class="container">
        <div class="container section-title" data-aos="fade-up">
            <p><span>Pendaftaran Online</span> <span class="description-title">Puskesmas Sehat</span></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="registrationForm" class="p-4 rounded shadow bg-white" data-aos="fade-up" data-aos-delay="200" style="border: 1px solid #e2e8f0;">
                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>
                    </div>

                    <!-- Umur -->
                    <div class="mb-3">
                        <label for="age" class="form-label">Umur</label>
                        <input type="number" class="form-control form-control-lg" id="age" name="age" placeholder="Masukkan umur Anda" required min="1" max="120">
                    </div>

                    <!-- Keluhan -->
                    <div class="mb-3">
                        <label for="complaint" class="form-label">Keluhan</label>
                        <textarea class="form-control form-control-lg" id="complaint" name="complaint" rows="4" placeholder="Jelaskan keluhan Anda" required></textarea>
                    </div>

                    <!-- Tombol Daftar -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100" style="background-color: #2b6cb0; border: none;">Daftar</button>
                    </div>
                </form>

                <!-- Feedback -->
                <div id="formFeedback" class="mt-4 d-none">
                    <div class="alert alert-success" role="alert">
                        <strong>Terima kasih!</strong> Pendaftaran Anda berhasil. Kami akan segera menghubungi Anda.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const age = document.getElementById('age').value;
        const complaint = document.getElementById('complaint').value;

        // umur
        if (age < 1 || age > 120) {
            document.getElementById('formFeedback').innerHTML = `
                <div class="alert alert-danger" role="alert">
                    <strong>Umur tidak valid!</strong> Harap masukkan umur antara 1-120 tahun.
                </div>`;
        } else {
            // pesan sukses
            document.getElementById('formFeedback').innerHTML = `
                <div class="alert alert-success" role="alert">
                    <strong>Terima kasih, ${name}!</strong> Pendaftaran Anda berhasil. Kami akan segera menghubungi Anda.
                </div>`;
            
            this.reset();
        }

        document.getElementById('formFeedback').classList.remove('d-none');
    });
</script>