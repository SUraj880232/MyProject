
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CM Commission Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background: #343a40;
            position: fixed;
            top: 0;
            left: 0;
            padding: 60px;
            
            box-shadow: 2px 0 10px rgba(207, 29, 29, 0.2);
            transition: width 0.3s;
            font-size: 17px;
        }

        .sidebar h4 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
        }

        .sidebar a:hover {
            background: #495057;
            transform: scale(1.02);
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .container {
            margin-top: 30px;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #ffffff;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            background: linear-gradient(90deg, #ffffff, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .search-input {
            border: 2px solid #007bff;
            border-radius: 30px;
            padding: 10px 20px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #0056b3;
            outline: none;
        }

    
        .search-button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 0 20px;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
        }

        .search-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #d1ecf1;
        }

        .details-row {
            display: none;
        }

        .btn-info {
            transition: all 0.3s;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 8px 12px;
        }

        .btn-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            background-color: #0056b3;
        }

        .no-data {
            text-align: center;
            color: #dc3545;
            font-style: italic;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 210px;
            }

            table {
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0;
                padding: 10px;
            }

            h1 {
                font-size: 1.5em;
            }
        }


        /* body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
} */

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}


.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}


    </style>
</head>

<body>

    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>


    <div class="sidebar">
        <h4 style="font-size: 30px">Dashboard</h4>
        <a href="/#"><i class="fas fa-home"></i> Home</a>
        <a href="/coming"><i class="fas fa-chart-line"></i> Statistics</a>
        <a href="/coming1"><i class="fas fa-user"></i> Users</a>
        <a href="/coming2"><i class="fas fa-cog"></i> Settings</a>
        <a href="/login"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Colorful Technical Animation</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(135deg, #ff7f50, #ff6347);
                color: white;
                /* text-align: center; */
                overflow: hidden; /* Prevents scrollbars from appearing */
                animation: backgroundChange 10s infinite alternate;
             } 
    
            @keyframes backgroundChange {
                0% { background: linear-gradient(135deg, #ff7f50, #ff6347); }
                50% { background: linear-gradient(135deg, #6a5acd, #ff69b4); }
                100% { background: linear-gradient(135deg, #32cd32, #00bfff); }
            }
    
            header {
                padding: 20px;
                background: rgba(0, 0, 0, 0.5);
            }
    
            .animation-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 80vh;
            }
    
            .animation {
                width: 100px; /* Reduced size for better visibility */
                height: 100px; /* Reduced size for better visibility */
                background: radial-gradient(circle, #fffa65, #ffcc00);
                border-radius: 50%;
                animation: spin 4s linear infinite, bounce 1s infinite;
            }
    
            @keyframes spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
    
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-30px);
                }
                60% {
                    transform: translateY(-15px);
                }
            }
    
            footer {
                padding: 10px;
                background: rgba(0, 0, 0, 0.5);
            }

            h1{
                text-align: center;
                color: white;
            }



        </style>
    </head>
    <body>
        <header>
            <h1>Proccessing...</h1>
        </header>
        <main>
            <section class="animation-container">
                <div class="animation" id="animatedElement"></div>
            </section>
        </main>
        <footer>
            <p>&copy; @2024 Mr. Suraj</p>
        </footer>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const animatedElement = document.getElementById("animatedElement");
    
                // Change animation on hover
                animatedElement.addEventListener("mouseover", () => {
                    animatedElement.style.background = "radial-gradient(circle, #65ff7f, #00cc00)";
                });
    
                animatedElement.addEventListener("mouseout", () => {
                    animatedElement.style.background = "radial-gradient(circle, #fffa65, #ffcc00)";
                });
            });
        </script>
    </body>
    </html>
    
    
</body>

</html>