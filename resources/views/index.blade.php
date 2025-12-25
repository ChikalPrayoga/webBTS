@extends('layouts.app')

@section('content')
      <!-- Hero Section -->
      <section class="hero">
        <div class="hero-content">
          <h1>Solusi Transportasi Darat Andal & Profesional</h1>
          <p>Kami menyediakan penyewaan truk dan kontainer untuk perusahaan — pengiriman barang antar kota dengan layanan aman dan tepat waktu.</p>
          <div class="hero-btns">
            <button class="btn primary" onclick="location.href='#contact'">Pesan Sekarang</button>
            <button class="btn ghost" onclick="location.href='#fleet'">Lihat Armada</button>
          </div>
        </div>

        <div class="hero-contact">
          <h3>Informasi Kontak</h3>
          <p><strong>Telepon:</strong><br>085100227961 / 087884170411</p>
          <p><strong>Alamat:</strong><br>Jl. Raya Industri No. 88, Bekasi – Jawa Barat</p>
          <p><strong>Jam Operasional:</strong><br>Senin - Sabtu, 08:00 - 20:00</p>
        </div>
      </section>

      <!-- About Section -->
      <section id="about" class="section card">
        <h2>Tentang CV Berlian Tunas Sejahtera</h2>
        <p>CV Berlian Tunas Sejahtera fokus pada penyewaan truk dan kontainer untuk perusahaan yang membutuhkan pengiriman barang antar kota. Kami mengutamakan keselamatan, ketepatan waktu, dan layanan pelanggan yang responsif.</p>

        <div class="stats">
          <div class="stat">
            <i class="fas fa-box-open" style="font-size: 2rem; margin-bottom: 10px; color: var(--primary-color);"></i>
            <h3>500+</h3>
            <p>Pengiriman Sukses</p>
          </div>
          <div class="stat">
            <i class="fas fa-smile" style="font-size: 2rem; margin-bottom: 10px; color: var(--primary-color);"></i>
            <h3>50+</h3>
            <p>Klien Puas</p>
          </div>
          <div class="stat">
            <i class="fas fa-calendar-alt" style="font-size: 2rem; margin-bottom: 10px; color: var(--primary-color);"></i>
            <h3>10+</h3>
            <p>Tahun Pengalaman</p>
          </div>
          <div class="stat">
            <i class="fas fa-headset" style="font-size: 2rem; margin-bottom: 10px; color: var(--primary-color);"></i>
            <h3>24/7</h3>
            <p>Dukungan Layanan</p>
          </div>
        </div>
      </section>

      <!-- Values Section -->
      <section id="values" class="section">
        <h2>Nilai-Nilai Kami</h2>
        <div class="grid">
          <div class="card value-card">
            <div class="value-icon">🚛</div>
            <h3>Keamanan Terjamin</h3>
            <p>Setiap pengiriman dilengkapi dengan asuransi dan pengemudi berpengalaman untuk memastikan barang Anda aman sampai tujuan.</p>
          </div>
          <div class="card value-card">
            <div class="value-icon">⏰</div>
            <h3>Tepat Waktu</h3>
            <p>Kami berkomitmen untuk mengantar barang sesuai jadwal yang telah disepakati dengan sistem tracking real-time.</p>
          </div>
          <div class="card value-card">
            <div class="value-icon">🤝</div>
            <h3>Layanan Profesional</h3>
            <p>Tim kami siap membantu Anda 24 jam dengan layanan pelanggan yang responsif dan solusi yang fleksibel.</p>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section id="services" class="section">
        <h2>Layanan Kami</h2>
        <div class="grid">
          <div class="card">
            <h3>Sewa Truk</h3>
            <p>Berbagai tipe truk untuk distribusi antar kota—pengemudi profesional, jadwal fleksibel.</p>
          </div>
          <div class="card">
            <h3>Sewa Kontainer</h3>
            <p>Kontainer 20ft untuk pengiriman volume besar dengan perlindungan ekstra.</p>
          </div>
          <div class="card">
            <h3>Pengiriman Antar Kota</h3>
            <p>Rute antar kota dengan estimasi waktu yang jelas dan update status pengiriman.</p>
          </div>
        </div>
      </section>

      <!-- Fleet Section -->
      <section id="fleet" class="section card">
        <h2>Armada Kami</h2>
        <div class="grid">
          <div class="card">
            <img src="{{ asset('images/truck1.webp') }}" alt="Truk Engkel" loading="lazy">
            <h3>Truk Engkel</h3>
            <p>Cocok untuk pengiriman lokal dan antar kota dengan kapasitas sedang.</p>
          </div>
          <div class="card">
            <img src="{{ asset('images/truck2.webp') }}" alt="Truk Fuso" loading="lazy">
            <h3>Truk Fuso</h3>
            <p>Kapasitas besar, ideal untuk muatan berat dan pengiriman jarak jauh.</p>
          </div>
          <div class="card">
            <img src="{{ asset('images/container.webp') }}" alt="Kontainer" loading="lazy">
            <h3>Kontainer (20ft)</h3>
            <p>Solusi pengiriman aman dan tertutup untuk barang dalam jumlah besar.</p>
          </div>
        </div>
      </section>

      <!-- Gallery Section -->
      <section id="gallery" class="section card">
        <h2>Galeri Armada</h2>
        <div class="gallery">
          <img src="{{ asset('images/truck1.webp') }}" alt="Truk Engkel" loading="lazy">
          <img src="{{ asset('images/truck2.webp') }}" alt="Truk Fuso" loading="lazy">
          <img src="{{ asset('images/container.webp') }}" alt="Kontainer" loading="lazy">
        </div>
      </section>

      <!-- Clients Section -->
      <section id="clients" class="section card">
        <h2>Klien & Mitra</h2>
        <p>Beberapa klien yang pernah bekerja sama dengan kami:</p>
        <div class="clients">
          <div class="client-logo-placeholder">PT Logistik Nusantara</div>
          <div class="client-logo-placeholder">PT Cipta Karya Mandiri</div>
          <div class="client-logo-placeholder">PT Maju Bersama</div>
        </div>
      </section>

      <!-- Testimonials Section -->
      <section id="testimonials" class="section">
        <h2>Testimoni Klien</h2>
        <div class="grid">
          <div class="card testimonial">
            <div class="testimonial-content">
              <p>"Layanan yang sangat profesional dan tepat waktu. Barang kami selalu sampai dengan aman."</p>
              <div class="testimonial-author">
                <strong>Ahmad Rahman</strong>
                <span>Manager Logistik, PT Nusantara</span>
              </div>
            </div>
          </div>
          <div class="card testimonial">
            <div class="testimonial-content">
              <p>"CV Berlian Tunas Sejahtera adalah partner terpercaya kami untuk pengiriman antar kota."</p>
              <div class="testimonial-author">
                <strong>Siti Nurhaliza</strong>
                <span>Direktur Operasional, PT Cipta Karya</span>
              </div>
            </div>
          </div>
          <div class="card testimonial">
            <div class="testimonial-content">
              <p>"Pengemudi yang ramah dan sistem tracking yang memudahkan monitoring pengiriman."</p>
              <div class="testimonial-author">
                <strong>Budi Santoso</strong>
                <span>Supervisor Distribusi, PT Maju Bersama</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Tracking Section -->
      <section id="tracking" class="section">
        <h2>Lacak Pengiriman</h2>
        <div class="tracking-container">
          <div class="tracking-form">
            <h3>Masukkan Nomor Tracking</h3>
            <div class="tracking-input-group">
              <input type="text" id="trackingNumber" placeholder="Contoh: BTS2025001" maxlength="20">
              <button id="trackBtn" class="btn primary">Lacak</button>
            </div>
            <p class="tracking-info">
              Masukkan nomor tracking yang diberikan saat pemesanan untuk melihat status pengiriman real-time.
              <br><small>Contoh: BTS2025001, BTS2025002, BTS2025003</small>
            </p>
          </div>
          <div class="tracking-result" id="trackingResult" style="display: none;">
            <h3>Status Pengiriman</h3>
            <div class="tracking-details">
              <div class="tracking-header">
                <span class="tracking-id">Nomor Tracking: <strong id="resultTrackingId">-</strong></span>
                <span class="tracking-status" id="resultStatus">-</span>
              </div>
              <div class="tracking-info-details">
                <div class="info-item">
                  <strong>Armada:</strong> <span id="resultArmada">-</span>
                </div>
                <div class="info-item">
                  <strong>Tujuan:</strong> <span id="resultTujuan">-</span>
                </div>
                <div class="info-item">
                  <strong>Update Terakhir:</strong> <span id="resultDate">-</span>
                </div>
              </div>
            </div>
          </div>
          <div id="trackingError" style="display: none; color: red; margin-top: 10px; text-align: center;">
            Nomor tracking tidak ditemukan.
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="section card">
        <h2>Hubungi Kami</h2>
        <div class="contact-card">
          <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p><strong>Alamat</strong><br>Jl. Raya Industri No. 88, Bekasi – Jawa Barat</p>
            <p><strong>Telepon</strong><br>085100227961 / 087884170411</p>
            <p><strong>Email</strong><br>info@berliantunas.co.id</p>
            <p><strong>WhatsApp</strong><br><a href="https://wa.me/6285100227961?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20CV%20Berlian%20Tunas%20Sejahtera" class="whatsapp-btn" target="_blank"><i class="fab fa-whatsapp"></i> Chat WhatsApp</a></p>
          </div>
          <div class="contact-form">
            <form onsubmit="event.preventDefault(); alert('Fitur ini akan segera aktif!');">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="contact">Email / Telepon</label>
                <input type="text" id="contact" name="contact" required>
              </div>
              <div class="form-group">
                <label for="message">Pesan</label>
                <textarea id="message" name="message" required></textarea>
              </div>
              <button type="submit" class="btn primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </section>

      <!-- Overlay for Contact (optional, from original) -->
      <div class="overlay" id="contactOverlay">
        <div class="contact-card-popup">
            <h3>Kontak Kami</h3>
            <p><strong>Telepon:</strong> 085100227961 / 087884170411</p>
            <p><strong>Email:</strong> info@berliantunas.co.id</p>
            <p><strong>Alamat:</strong> Jl. Raya Industri No. 88, Bekasi – Jawa Barat</p>
            <button id="closeOverlay" class="close-btn">Tutup</button>
        </div>
      </div>
@endsection

@push('scripts')
<script>
    // Simple AJAX Tracking
    document.getElementById('trackBtn').addEventListener('click', function() {
        const id = document.getElementById('trackingNumber').value;
        const resultDiv = document.getElementById('trackingResult');
        const errorDiv = document.getElementById('trackingError');
        
        if(!id) return;

        fetch('{{ url("api/tracking") }}/' + id)
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    document.getElementById('resultTrackingId').innerText = data.data.nomor_transaksi;
                    document.getElementById('resultStatus').innerText = data.data.status_pengiriman;
                    document.getElementById('resultArmada').innerText = data.data.armada;
                    document.getElementById('resultTujuan').innerText = data.data.tujuan_pengiriman;
                    document.getElementById('resultDate').innerText = new Date(data.data.updated_at).toLocaleString('id-ID');
                    
                    resultDiv.style.display = 'block';
                    errorDiv.style.display = 'none';
                } else {
                    resultDiv.style.display = 'none';
                    errorDiv.style.display = 'block';
                }
            })
            .catch(err => {
                console.error(err);
                resultDiv.style.display = 'none';
                errorDiv.style.display = 'block';
            });
    });
</script>
@endpush
