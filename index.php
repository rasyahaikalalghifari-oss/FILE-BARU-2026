<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'tong.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoVibe - Portal Mobil Sederhana</title>
    <?php include 'navigasi.php';?>
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


        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #3498db, #2980b9);
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
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #c0392b;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Features Section */
        .features {
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

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        /* Gallery Section */
        .gallery {
            padding: 60px 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .car-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .car-card:hover {
            transform: translateY(-5px);
        }

        .car-image {
            height: 200px;
            background: transparent;
            display: flex;
            align-items: right;
            justify-content: center;
            font-size: 4rem;
            color: white;
        }
        .car-image2 {
            height: 200px;
            background: transparent;
            display: flex;
            align-items: right;
            justify-content: center;
            font-size: 4rem;
            color: white;
        }
        .car-info {
            padding: 1.5rem;
        }

        .car-info h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .price {
            color: #e74c3c;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #3498db;
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
            
            .features-grid,
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
        </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Temukan Mobil Impian Anda</h1>
        <p>Platform terpercaya untuk membeli, menjual, dan mencari informasi mobil dengan harga terbaik</p>
        <a href="#mobil" class="cta-button">Lihat Mobil</a>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Mengapa Pilih AutoVibe?</h2>
                <p>Kami menyediakan layanan terbaik untuk kebutuhan otomotif Anda</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3>Pencarian Mudah</h3>
                    <p>Temukan mobil sesuai kebutuhan dengan sistem pencarian yang mudah dan akurat</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>Kualitas Terjamin</h3>
                    <p>Semua mobil telah melewati inspeksi berkualitas dari tim profesional kami</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Proses Cepat</h3>
                    <p>Transaksi mudah dan cepat dengan dukungan customer service yang responsif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="mobil">
        <div class="container">
            <div class="section-title">
                <h2>Mobil Pilihan</h2>
                <p>Koleksi mobil berkualitas dengan berbagai pilihan harga</p>
            </div>
            <div class="gallery-grid">
                <div class="car-card">
                    <div class="car-image" ><img src="https://www.hondaunionmotor.co.id/wp-content/uploads/2018/06/SPort-icon-1.png"></div>
                    <div class="car-info">
                        <h3>Honda Civic</h3>
                        <div class="price">Rp 450.000.000</div>
                        <p>Sedan sporty dengan performa tinggi dan teknologi modern</p>
                    </div>
                </div>
                <div class="car-card">
                    <div class="car-image2"><img src="https://par.co.id/storage/toyota-avanza-Ox3X.png"></div>
                    <div class="car-info">
                        <h3>Toyota Avanza</h3>
                        <div class="price">Rp 250.000.000</div>
                        <p>MPV keluarga yang nyaman dengan efisiensi bahan bakar optimal</p>
                    </div>
                </div>
                <div class="car-card">
                    <div class="car-image"><img src="https://www.pngplay.com/wp-content/uploads/13/Mazda-MX-5-Miata-PNG-Background.png"></div>
                    <div class="car-info">
                        <h3>Mazda MX-5 Miata</h3>
                        <div class="price">Rp 280.000.000</div>
                        <p>MPV modern dengan desain stylish dan fitur lengkap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">Kebijakan Privasi</a>
                <a href="layanan.php">Layanan</a>
                <a href="#kontak">Kontak</a>
                <a href="#">FAQ</a>
            </div>
            <p>&copy; 2025 AutoVibe. Semua hak dilindungi undang-undang.</p>
        </div>
    </footer>
</body>
</html>