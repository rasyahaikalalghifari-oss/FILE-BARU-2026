       <style> /* Header */
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
            align-items: center;
            padding: 0 2rem;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        nav.hidden{
            display:none;
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
            transition:  0,5s;
        }

        .nav-menu a:hover {
            background: #3498db;

        }
        
        @media screen(min-width: 768px;) {
            nav.hidden {
                display: none;
            }
        }
</style>
<link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
<header>
<nav>
    <a href="index.php" class="logo">AutoVibe</a>
   
    </div>
    <ul class="nav-menu" id="nav-menu">
        <li><a href="index.php" class="nav-menu active">Beranda</a></li>
        <li><a href="pendaftaran.php" class="nav-menu active">Pendaftaran</a></li>
        <li><a href="layanan.php" class="nav-menu active">Layanan</a></li>
        <li><a href="kontak.php" class="nav-menu active">kontak</a></li>
        <li><a href="apa.php" class="nav-menu active">Data Pesanan</a></li>
    </ul>
</div>
</nav>
    </header>
</body>
</html>

