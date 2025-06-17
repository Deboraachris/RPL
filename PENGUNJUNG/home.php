<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climbing Adventures</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
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

        /* Hero Section */
        .hero {
            position: relative;
            background-image: url('https://source.unsplash.com/random/1600x900/?mountains');
            background-size: cover;
            background-position: center;
            height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero button {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: black;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .hero button:hover {
            background-color: #e6b800;
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
        <div class="logo">Climbing Adventures</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">START YOUR ADVENTURE</a></li>
                <li><a href="#">PLANNING YOUR CLIMB</a></li>
                <li><a href="#">CLIMBER PROFILE</a></li>
                <li><a href="#">STORIES FROM THE PEAK</a></li>
                <li><a href="#">ABOUT THE SUMMIT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>UP IN THE CLOUDS</h1>
        <button>START YOUR ADVENTURE</button>
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

</body>
</html>
