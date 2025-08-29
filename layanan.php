<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCare - Layanan Mobil</title>
    <?php include 'navigasi.php';
    include 'tong.php';?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        header {
            background: #2c3e50;
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #3498db;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-menu a:hover {
            background: #34495e;
        }

        /* Hero Section */
        .hero {
            background: #3498db;
            color: white;
            text-align: center;
            padding: 120px 2rem 80px;
            margin-top: 60px;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin: 0 0.5rem;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #c0392b;
        }

        .cta-secondary {
            background: transparent;
            border: 2px solid white;
        }

        .cta-secondary:hover {
            background: white;
            color: #3498db;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Services Section */
        .services {
            padding: 60px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .service-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .service-card p {
            margin-bottom: 1rem;
            color: #666;
        }

        .service-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .service-features {
            list-style: none;
            text-align: left;
            margin-bottom: 1rem;
        }

        .service-features li {
            padding: 0.3rem 0;
            color: #555;
            position: relative;
            padding-left: 1.5rem;
        }

        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #e74c3c;
            font-weight: bold;
        }

        /* Why Choose Section */
        .why-choose {
            padding: 60px 0;
            background: #2c3e50;
            color: white;
        }

        .why-choose .section-title h2 {
            color: white;
        }

        .why-choose .section-title p {
            color: rgba(255,255,255,0.8);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-item {
            text-align: center;
            padding: 1.5rem;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .feature-item h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        /* Pricing Section */
        .pricing {
            padding: 60px 0;
            background: #f8f9fa;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .pricing-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .pricing-card.featured {
            border: 3px solid #e74c3c;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
        }

        .pricing-header {
            background: #3498db;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .pricing-card.featured .pricing-header {
            background: #e74c3c;
        }

        .pricing-header h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .pricing-header .price {
            font-size: 2rem;
            font-weight: bold;
        }

        .pricing-header .period {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .pricing-body {
            padding: 2rem;
        }

        .pricing-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .pricing-features li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 1.5rem;
        }

        .pricing-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #e74c3c;
            font-weight: bold;
        }

        .pricing-features li:last-child {
            border-bottom: none;
        }

        .pricing-button {
            display: block;
            width: 100%;
            padding: 12px;
            background: #e74c3c;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .pricing-button:hover {
            background: #c0392b;
        }

        /* Contact Section */
        .contact {
            padding: 60px 0;
            background: white;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .contact-item-icon {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #e74c3c;
        }

        .contact-item h4 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .contact-item p {
            color: #666;
        }

        .contact-form {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2c3e50;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #e74c3c;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .submit-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #c0392b;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .footer-section p,
        .footer-section li {
            color: rgba(255,255,255,0.8);
            line-height: 1.6;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #e74c3c;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 2rem;
            text-align: center;
            color: rgba(255,255,255,0.6);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .services-grid,
            .features-grid,
            .pricing-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Layanan Mobil Terpercaya</h1>
        <p>Perawatan dan perbaikan mobil dengan teknisi berpengalaman dan harga terjangkau</p>
        <a href="#layanan" class="cta-button">Lihat Layanan</a>
    </section>

    <!-- Services Section -->
    <section class="services" id="layanan">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kami</h2>
                <p>Berbagai layanan perawatan dan perbaikan mobil berkualitas</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🔧</div>
                    <h3>Service Rutin</h3>
                    <p>Perawatan berkala untuk menjaga performa kendaraan</p>
                    <div class="service-price">Rp 150.000</div>
                    <ul class="service-features">
                        <li>Ganti oli mesin</li>
                        <li>Cek sistem rem</li>
                        <li>Pemeriksaan umum</li>
                        <li>Tune up engine</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛠️</div>
                    <h3>Perbaikan Mesin</h3>
                    <p>Diagnosa dan perbaikan untuk semua kerusakan mesin</p>
                    <div class="service-price">Rp 500.000</div>
                    <ul class="service-features">
                        <li>Diagnosa dengan scanner</li>
                        <li>Overhaul mesin</li>
                        <li>Perbaikan sistem injeksi</li>
                        <li>Garansi 6 bulan</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">❄️</div>
                    <h3>Service AC</h3>
                    <p>Perawatan sistem AC untuk kenyamanan berkendara</p>
                    <div class="service-price">Rp 250.000</div>
                    <ul class="service-features">
                        <li>Isi freon AC</li>
                        <li>Bersih evaporator</li>
                        <li>Ganti filter kabin</li>
                        <li>Perbaikan kompressor</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚗</div>
                    <h3>Body Repair</h3>
                    <p>Perbaikan dan pengecatan body mobil</p>
                    <div class="service-price">Rp 300.000</div>
                    <ul class="service-features">
                        <li>Perbaikan penyok</li>
                        <li>Pengecatan profesional</li>
                        <li>Poles dan coating</li>
                        <li>Interior cleaning</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose">
        <div class="container">
            <div class="section-title">
                <h2>Mengapa Pilih Kami?</h2>
                <p>Keunggulan layanan yang kami berikan</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">👨‍🔧</div>
                    <h3>Teknisi Berpengalaman</h3>
                    <p>Tim teknisi profesional dengan pengalaman lebih dari 10 tahun</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">✅</div>
                    <h3>Garansi Resmi</h3>
                    <p>Semua pekerjaan dilindungi garansi resmi hingga 12 bulan</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">💰</div>
                    <h3>Harga Transparan</h3>
                    <p>Tidak ada biaya tersembunyi, estimasi harga yang jelas</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🔧</div>
                    <h3>Peralatan Modern</h3>
                    <p>Menggunakan peralatan terkini untuk hasil optimal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="harga">
        <div class="container">
            <div class="section-title">
                <h2>Paket Layanan</h2>
                <p>Pilih paket sesuai kebutuhan kendaraan Anda</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Paket Basic</h3>
                        <div class="price">Rp 299K</div>
                        <div class="period">per service</div>
                    </div>
                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Ganti oli mesin + filter</li>
                            <li>Cek sistem rem</li>
                            <li>Pemeriksaan umum</li>
                            <li>Cek tekanan ban</li>
                        </ul>
                        <a href="#kontak" class="pricing-button">Pilih Paket</a>
                    </div>
                </div>
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3>Paket Premium</h3>
                        <div class="price">Rp 599K</div>
                        <div class="period">per service</div>
                    </div>
                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Semua fitur Basic</li>
                            <li>Tune up lengkap</li>
                            <li>Service AC mobil</li>
                            <li>Diagnosa komputer</li>
                            <li>Garansi 6 bulan</li>
                        </ul>
                        <a href="#kontak" class="pricing-button">Pilih Paket</a>
                    </div>
                </div>
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Paket Ultimate</h3>
                        <div class="price">Rp 999K</div>
                        <div class="period">per service</div>
                    </div>
                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Semua fitur Premium</li>
                            <li>Overhaul ringan</li>
                            <li>Coating body</li>
                            <li>Interior detailing</li>
                            <li>Garansi 12 bulan</li>
                        </ul>
                        <a href="#kontak" class="pricing-button">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>AutoVibe</h3>
                    <p>Layanan perawatan dan perbaikan mobil terpercaya dengan teknisi berpengalaman dan peralatan modern.</p>
                </div>
                <div class="footer-section">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#layanan">Service Rutin</a></li>
                        <li><a href="#layanan">Perbaikan Mesin</a></li>
                        <li><a href="#layanan">Service AC</a></li>
                        <li><a href="#layanan">Body Repair</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <ul>
                        <li>📍 Jl. Sudirman No. 123</li>
                        <li>📞 (021) 565-0123</li>
                        <li>📧 info@AutoVibe.com</li>
                        <li>🕒 08:00 - 17:00 WIB</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 AutoVibe. Semua hak dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>
</body>
</html>