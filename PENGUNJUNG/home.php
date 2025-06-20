<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemerintahan Desa Sepakung</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(to bottom, #f4f4f4, #fff);
        }

        /* Header Section */
        .header {
            position: sticky;
            top: 0;
            background-color: rgba(34, 34, 34, 0.9);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
    position: relative;
    background-image: url('../foto/g20.jpg'); /* ganti dengan gambar lokalmu */
    background-size: cover;
    background-position: center top;
    background-repeat: no-repeat;
    height: 100vh; /* Full layar */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    padding: 20px;
    z-index: 1;
    overflow: hidden;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4); /* Overlay gelap */
    z-index: 0;
}

.hero h1, .hero h4, .hero button {
    position: relative;
    z-index: 1;
}

.hero h1 {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.hero h4 {
    font-size: 20px;
    margin-bottom: 20px;
}

.hero button {
    padding: 12px 28px;
    background-color: #ffcc00;
    color: black;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

.hero button:hover {
    background-color: #e6b800;
}


        .background-image-section {
        background-image: url('../foto/g20.jpg');
        background-size: cover;
        background-position: top;
        height: 500px;
        width: 100%;
}

        .category-box {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 30px;
}

.category-box button {
    padding: 10px 20px;
    background-color: #ddd;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.category-box button:hover {
    background-color: #ffcc00;
}



        /* Sections */
        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .section p {
            margin-bottom: 30px;
        }

        /* Climber Profile Section */
        .profile {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            margin: 30px 0;
        }

        .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        /* Stories Section */
        .stories {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .story {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Footer Section */
        .footer {
            background-color: #222;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .footer h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .footer button {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: black;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .footer button:hover {
            background-color: #e6b800;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="logo">Pemerintah Desa Sepakung</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Dusun</a></li>
                <li><a href="#">PPID</a></li>
                <li><a href="#">Aplikasi Pamdes V2</a></li>
                <li><a href="#">Wisata Sepakung</a></li>
                <li><a href="#">Media Sosial</a></li>
                <li><a href="#">Hubungi Kami</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
    <div>
        <h4>Nikmati petualangan dan keindahan Desa Sepakung!</h4>
        <h1>Desa Wisata Sepakung</h1>
        <p>Terletak di Banyubiru, Kabupaten Semarang</p>
        <button>JELAJAHI DESA</button>
    </div>
</section>

        <!-- Pilihan Kategori -->
<section class="section category-selector">
    <div class="category-box">
        <button onclick="showContent('berita')">Berita</button>
        <button onclick="showContent('event')">Event</button>
        <button onclick="showContent('pemerintahan')">Kepemerintahan</button>
    </div>
</section>

<!-- Konten Dinamis -->
<section class="section" id="berita" style="display: block;">
    <h2>Berita Desa Sepakung</h2>
    <div class="stories">
        <div class="story">
            <h3>Judul Berita 1</h3>
            <p>Isi singkat berita 1...</p>
        </div>
        <div class="story">
            <h3>Judul Berita 2</h3>
            <p>Isi singkat berita 2...</p>
        </div>
    </div>
</section>

<section class="section" id="event" style="display: none;">
    <h2>Event Desa Sepakung</h2>
    <p>Daftar kegiatan atau event yang akan datang di desa.</p>
</section>

<section class="section" id="pemerintahan" style="display: none;">
    <h2>Informasi Pemerintahan</h2>
    <p>Informasi seputar kebijakan, struktur, dan layanan pemerintahan desa.</p>
</section>




    <!-- Planning Your Climb Section -->
    <section class="section">
        <h2>Planning Your Climb</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius at ligula in semper. Curabitur lacinia odio et purus consequat vehicula.</p>
    </section>

    <!-- Climber Profile Section -->
    <section class="profile section">
        <img src="https://source.unsplash.com/random/150x150/?climber" alt="Climber">
        <div class="profile-info">
            <h2>Climber Profile</h2>
            <p>The man, the myth, the legend.</p>
            <button>MEET JON MESSNER</button>
        </div>
    </section>

    <!-- Stories Section -->
    <section class="stories section">
        <h2>Stories From The Peak</h2>
        <div class="story">
            <h3>10 Things To Pack For Your Next Summit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="story">
            <h3>A Day in the Life of a Mountain Climber</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="story">
            <h3>Epic Climbs Around the World</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <h2>About The Summit</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        <button>LEARN MORE</button>
    </footer>

    <script>
function showContent(category) {
    document.getElementById("berita").style.display = "none";
    document.getElementById("event").style.display = "none";
    document.getElementById("pemerintahan").style.display = "none";
    document.getElementById(category).style.display = "block";
}
</script>


</body>
</html>
