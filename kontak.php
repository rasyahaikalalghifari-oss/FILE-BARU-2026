<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - AutoCare</title>
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
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding-top: 60px;
            margin-bottom: 60px;    
        }

        .contact {
            background: white;
            height: 800px;
            padding: 40px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 60px;
        }
        .bbb {
            text-align:center;
            padding-top:30px;
        }
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .section-title p {
            font-size: 1rem;
            color: #666;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-item {
            display: flex;
            width: 920px;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }

        .contact-item-icon {
            font-size: 1.5rem;
            width: 30px;
            text-align: center;
        }

        .contact-item h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .contact-item p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.4;
        }

        .footer {
           text-align: center;
            margin-bottom: 90px;
            bg

        }

    
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #3498db;
        }

        .btn-submit {
            background-color: #3498db;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            

            
            .section-title h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="contact" id="kontak">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Siap melayani kebutuhan perawatan mobil Anda</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-item-icon">📍</div>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Sudirman No. 123<br>Jakarta Pusat, 10220</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">📞</div>
                        <div>
                            <h4>Telepon</h4>
                            <p>(021) 555-0123<br>0812-3456-7890</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">📧</div>
                        <div>
                            <h4>Email</h4>
                            <p>info@autoVibe.com<br>service@autoVibe.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">🕒</div>
                        <div>
                            <h4>Jam Buka</h4>
                            <p>Senin - Sabtu: 08:00 - 17:00<br>Minggu: 09:00 - 15:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bbb">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Kunjungi Bengkel Kami</h3>
                        <p style="color: #666;">Kami siap memberikan pelayanan terbaik untuk kendaraan Anda</p>
            </div>
            
        </section>
        
                <div class="footer">
                    
                        
                    </div>
                </div>
    </div>
</body>
</html>
