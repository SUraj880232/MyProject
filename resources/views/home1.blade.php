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
      padding: 15px 50px;
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
      font-size: 18px;
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
      height: 80px;
      width: 290px;
      margin-right: 10px;
    }

    /* Hero Section */
    .hero {
  display: flex;
  align-items: center;  /* Center vertically */
  justify-content: flex-end;  /* Align content to the right */
  text-align: left;
  position: relative;
  padding: 80px;
  min-height: 79.5vh;
  background-image: url('https://pcitechno.com/uploads/download_material/24/DownoadMateriall_123034115_24.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #f4faff; 
}

    

    .hero-text {
      background: rgba(255, 255, 255, 0.8);
      /* padding: 30px; */
      /* border-radius: 30px; */
      max-width: 700px;
      height: 400px;
      z-index: 10;
    }

    .hero-text h1 {
      font-size: 48px;
      color: #005ea6;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .hero-text p {
      font-size: 18px;
      margin-top: 20px;
      color: #555;
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
      background-color: rgb(206, 17, 52);
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
      color: #005ea6;
      border: 2px solid #005ea6;
      transition: background-color 0.3s, color 0.3s;
    }

    .hero-buttons .btn-learn:hover {
      background-color: #005ea6;
      color: white;
    }

    /* Footer Section */
    footer {
      padding: 5px;
      text-align: center;
      background-color: #00b8ff;
      color: white;
      z-index: 10;
      position: relative;
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

    .graphic-1 {
      position: absolute;
      left: 50px;
      top: 200px;
      width: 200px;
      height: 200px;
      background: rgba(0, 184, 255, 0.3);
      border-radius: 50%;
    }

    .graphic-2 {
      position: absolute;
      right: 250px;
      bottom: 50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 204, 128, 0.3);
      border-radius: 50%;
    }

    .nav-item {
      text-decoration: none;
      border-radius: 20px;
      background-color: rgb(242, 241, 238);
      padding-inline: 18px;
      font-weight: 700;
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

    /* Media Queries */
    @media (max-width: 768px) {
      .hero {
        padding: 20px;
        min-height: auto;
        .img_axp{
          display: none;
        }
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

      .graphic-1, .graphic-2 {
        display: none;
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
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
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
    <div class="hero">
      <div class="hero-text">
        <h1>Mak Life Producer Company Limited</h1>
        <p>
          <b>Mak Life Producer Company Limited (An ISO 9001:2015 & ISO 22000:2018 Certified Company) </b>  was established on 27 September 2018 with vision to improve the live hood of the farmers in all India the expectations were very high for the farmers development. That’s why we invite the best professional from the agriculture society to work with us so that we can create bigger opportunities for the farmers.

          We also work in the agricultural field to provide better quality products.
          
          Mak Life Producer Company Limited (MLPCL) organization registered under company Act-2013 established in gurugram Haryana. MLPCL is pioneered by Group of Young Professional.

        </p>
        <div class="hero-buttons">
          <a href="https://www.maklife.in/" class="btn" aria-label="Submit your commission reports">Network</a>
          <a href="https://www.maklife.in/dairy-farming" class="btn btn-learn" aria-label="Learn more about managing commission reports">More</a>
        </div>
      </div>
      <img class="img_axp" src="https://www.pcitechno.com/uploads/download_material/29/DownoadMateriall_98926817_29.png" alt="Illustration of Folder Management">
    </div>
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
