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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    body, html {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4faff;
      color: #333;
      overflow-x: hidden;
     
    }
    .hero {
  background-size: 60%; /* Reduce background size */
  background-color: #f4faff; /* Keeps light background under the form */
    
  .hero-text h1 {
      font-size: 48px;
      color: #005ea6;
      font-weight: bold;
      margin-bottom: 20px;
    }


}
.login-container {
  width: 400px;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  background-color: white;
  margin: auto;
  z-index: 11; /* Increased to be above background elements */
  position: relative; /* Ensure it follows z-index behavior */
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

    .hero {
  display: flex;
  align-items: center;  /* Center vertically */
  justify-content: flex-end;  /* Align content to the right */
  text-align: center;
  position: relative;
  padding: 100px;
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
  padding: 0px;
  border-radius: 20px;
  max-width: 650px;
  height: 325px;
  z-index: 10;
  /* margin-left: auto;  Push text to the right */
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



    .btn-custom {
      background-color: #007bff;
      color: white;
      transition: background-color 0.3s;
    }

    .btn-custom:hover {
      background-color: #0056b3;
    }

    .forgot-password {
      font-size: 14px;
      color: #005ea6;
      text-decoration: none;
      transition: color 0.3s;
    }

    .forgot-password:hover {
      text-decoration: underline;
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

    .nav-item:hover .nav-link {
      color: #ffffff; /* Change text color on hover */
    }

    .nav-item:hover {
      background-color: #005ea6; /* Color change on hover */
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .hero {
        padding: 20px;
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

      .graphic-1, .graphic-2 {
        display: none;
      }

      .login-container { 
        width: 400px; 
        padding: 20px; 
        border-radius: 15px; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
        background-color: white; 
      }
      .login-container h1 { 
        margin-bottom: 20px; 
        text-align: center; 
      }
      .btn-custom { 
        background-color: #007bff; 
        color: white; 
      }
      .btn-custom:hover { 
        background-color: #0056b3; 
        color: white; 
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
          <img src="https://pcitechno.com/uploads/galleryimage/5/web%20backup_111741578_5_T.png" alt="Maklife Company Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
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
  <section class="hero" id="home">
    <div class="login-container">
        <h1><i class="fas fa-user-lock"></i> Login</h1>
      
            <form action="{{ route('login') }}" method="POST">

            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
            <div class="text-center mt-3">
                <a href="#" class="text-primary">Forgot Password?</a>
            </div>
  <!-- Display errors -->
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
    <img src="https://pcitechno.com/uploads/download_material/19/DownoadMateriall_32931001_19.png" alt="Illustration of Folder Management">
  </section>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2024 Maklife. All rights reserved.</p>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
