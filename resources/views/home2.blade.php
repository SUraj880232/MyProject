<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Manage your commission reports with ease. Track earnings, automate calculations, and enhance financial transparency with our tools.">
  <meta name="keywords" content="commission, reports, automation, finance, tracking, business growth">
  <title>Manage Your Folder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Add favicon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4faff;
      color: #333;
      overflow-x: hidden;
    }


    /* Header Section */
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 15px 60px;
      background-color: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      z-index: 10;
      position: relative;
    }

    .header a {
      color: #005ea6;
      text-decoration: none;
      background-color: rgb(242, 241, 238);
      border-radius: 25px;
      margin-inline: 10px;
      padding: 10px 20px;
      font-size: 22px;
      box-shadow: 0 4px 8px #00b8ff;
      text-transform: uppercase;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .header a:hover {
      background-color: #005ea6;
      color: #ffffff;
    }

    .company-logo {
      font-size: 24px;
      color: #00b8ff;
      font-weight: bold;
      display: flex;
      align-items: center;
    }

    .company-logo img {
      height: 85px;
      width: 310px;
      margin-right: 10px;
    }

    /* Hero Section */
/* Hero Section */
.hero {
  display: flex;
  align-items: center;  /* Center vertically */
  justify-content: flex-start;  /* Align content to the right */
  text-align: center;
  position: relative;
  padding: 90px;
  min-height: 79.5vh;
  background-image: url('https://pcitechno.com/uploads/download_material/24/DownoadMateriall_123034115_24.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #f4faff; 
}
  
.hero p{
  text-align: left;
}

  .hero-text {
    background: rgba(255, 255, 255, 0.8);
    padding: 40px;
    border-radius: 20px;
    max-width: 800px;
    height: 380%;
    z-index: 10;
    /* margin-left: auto;  Push text to the right */
  }


      .hero-text h1 {
        font-size: 48px;
        color: #005ea6;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .hero-text p {
        font-size: 18px;
        margin-top: 30px;
        color: #111ece;
        line-height: 1.6;
      }

      .hero-buttons {
        margin-top: 20px;
      }

      .hero img {
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: 5;
        width: 100%;
        height: 100%;
        }

    .hero-buttons .btn {
      background-color: #00b8ff;
      color: white;
      padding: 10px 20px;
      text-transform: uppercase;
      font-weight: bold;
      border-radius: 5px;
      border: none;
      margin-right: 10px;
      transition: background-color 0.3s;
    }

    .hero-buttons .btn:hover {
      background-color: #005ea6;
    }

    .hero-buttons .btn-learn {
      background-color: white;
      color: #00b8ff;
      border: 2px solid #00b8ff;
      transition: background-color 0.3s, color 0.3s;  
    }

    .hero-buttons .btn-learn:hover {
      background-color: #00b8ff;
      color: white;
    }

    /* Footer Section */
    footer {
      padding: 5px;
      text-align: center;
      background-color: #00b8ff;
      color: white;
      z-index: 10;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    /* Background Shapes */
    .background-shape {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: linear-gradient(135deg, #f4faff 25%, #a4d8fc 100%);
      z-index: -1;
      
    }

    .nav-item {
      text-decoration: none;
      border-radius: 20px;
      background-color: rgb(242, 241, 238);
      padding-inline: 25px;
      font-weight: 750;
      margin: 10px;
      box-shadow: 0 4px 8px #00b8ff;
      transition: background-color 0.3s;
    }

    .nav-item:hover{
      .nav-link {
         color: #ffffff; /* Change text color on hover */
      }
        background-color: #005ea6; /* Color change on hover */
      }

      .img_axp{
        /* border-top: 5.3px solid #00b8ff; */
      }

    /* Media Queries */ 
    @media (max-width: 768px) {
      .hero {
        padding: 5px;
        min-height: auto;
        flex-direction: column;
        text-align: center;
      }

      .hero-text {
        max-width: 100%;
      }

      .hero img {
        max-width: 100%;
        margin-top: 30px;
        position: static;
      }

      .hero-text h1 {
        font-size: 32px;
      }
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <nav class="navbar navbar-expand-md bg-white shadow">
      <div class="container">
        <a class="navbar-brand company-logo" href="#">
          {{-- <img src="LOGO.png" alt="Maklife Company Logo"> --}}
          <img src="https://pcitechno.com/uploads/galleryimage/5/web%20backup_111741578_5_T.png" alt="Maklife Company Logo">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Background Shape -->
  <div class="background-shape"></div>
  <div class="graphic-1"></div>
  <div class="graphic-2"></div>

  <!-- Hero Section -->
  <main>
    <main>
      <div class="hero">
          <div class="hero-text">
              <h1>Our Farming & Products</h1>
              <div class="farming-container">
                <h2><i class="fas fa-leaf"></i> Farming Types</h2>
                <ul>
                    <i></i> Organic Farming
                    <i class="fas fa-chicken"></i> Poultry Farming
                    <i class="fas fa-cow"></i> Dairy Farming
                    <i class="fas fa-mushroom"></i> Mushroom Farming
                </ul>
                <h2><i class="fas fa-glass-cheers"></i> Dairy Products</h2>
                <ul>
                    <i></i> Milk
                    <i class="fas fa-glass-milk"></i> Lassi
                    <i></i> Ghee
                    <i class="fas fa-bowl-food"></i> Dahi
                </ul>
            </div>
            
              {{-- <div class="hero-buttons">
                  <button class="btn">Learn More</button>
                  <button class="btn btn-learn">Get Started</button>
              </div> --}}
          </div>
          <img class="img_axp" src="https://www.pcitechno.com/uploads/download_material/23/DownoadMateriall_48405493_23.png" alt="Illustration of Folder Management">
      </div>
    </main>
    
  </main>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2024 Maklife All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('.nav-link').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>
