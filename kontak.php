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
                    <h4><a href="index.php?hal=tentang" class="stretched-link">Tentang Kami</a></h4>
                    <p>Informasi tentang Puskesmas Sehat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <p><span>Anda butuh bantuan?</span> <span class="description-title">Hubungi Kami</span></p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jl. Sehat Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>(021) 1234-5678</p>
                        </div>
                    </div>
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>kontak@puskesmassehat.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <form id="contact-form" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Nama Anda</label>
                            <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">Email Anda</label>
                            <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Pesan</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <!-- Perbaikan tombol -->
                            <button type="submit" class="btn btn-primary btn-lg mt-3" style="border-radius: 30px; padding: 12px 30px; font-size: 16px;">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
                <!-- Pesan status pengiriman -->
                <div id="feedback-message" class="text-center mt-3" style="display: none;">
                    <p class="alert alert-success">Pesan Anda berhasil dikirim! Terima kasih telah menghubungi kami.</p>
                </div>
                <div id="error-message" class="text-center mt-3" style="display: none;">
                    <p class="alert alert-danger">Harap lengkapi semua kolom sebelum mengirimkan pesan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
   
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const name = document.getElementById('name-field').value;
        const email = document.getElementById('email-field').value;
        const message = document.getElementById('message-field').value;

        document.getElementById('feedback-message').style.display = 'none';
        document.getElementById('error-message').style.display = 'none';

        if (!name || !email || !message) {
            document.getElementById('error-message').style.display = 'block';
        } else {
            document.getElementById('feedback-message').style.display = 'block';

            document.getElementById('contact-form').reset();
        }
    });
</script>
