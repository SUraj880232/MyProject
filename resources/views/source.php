<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Webpage with Animated Tabs & Graphics</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            position: relative;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.5));
            z-index: -1;
            overflow: hidden;
            animation: rotate-bg 20s infinite linear;
        }

        @keyframes rotate-bg {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .container {
            width: 80%;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .title {
            margin-bottom: 20px;
            color: #333;
            font-size: 2em;
            position: relative;
            animation: fade-in 1s ease-in;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab-btn {
            background-color: #f1f1f1;
            padding: 12px 25px;
            border: none;
            outline: none;
            cursor: pointer;
            margin: 0 10px;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 1.1em;
        }

        .tab-btn:hover {
            transform: translateY(-3px);
        }

        .tab-btn.active {
            background-color: #74ebd5;
            color: white;
        }

        .tab-content {
            display: none;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
            position: relative;
        }

        .tab-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .animated-graphic {
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(255, 223, 186, 1), rgba(255, 132, 132, 1));
            margin: 20px auto;
            border-radius: 50%;
            animation: pulse 2s infinite alternate;
        }

        @keyframes pulse {
            from {
                transform: scale(1);
                opacity: 0.7;
            }
            to {
                transform: scale(1.2);
                opacity: 1;
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
                padding: 20px;
            }

            .tab-btn {
                padding: 10px 20px;
                margin: 0 5px;
            }

            .title {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="bg-overlay"></div> <!-- Background overlay for animated graphics -->
    <div class="container">
        <h1 class="title">Stunning Tab Design with Advanced Animation</h1>
        <div class="tabs">
            <button class="tab-btn active" data-tab="tab1">Tab 1</button>
            <button class="tab-btn" data-tab="tab2">Tab 2</button>
            <button class="tab-btn" data-tab="tab3">Tab 3</button>
        </div>
        <div class="tab-content active" id="tab1">
            <div class="animated-graphic"></div>
            <p>This is the content for Tab 1. Enjoy a sleek transition with vibrant animations!</p>
        </div>
        <div class="tab-content" id="tab2">
            <div class="animated-graphic"></div>
            <p>Welcome to Tab 2! Smooth, dynamic, and responsive animations enhance the experience.</p>
        </div>
        <div class="tab-content" id="tab3">
            <div class="animated-graphic"></div>
            <p>Here is Tab 3 content. Switch between tabs with engaging transitions and delightful designs.</p>
        </div>
    </div>

    <script>
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        // Add event listeners to buttons
        tabButtons.forEach((button) => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach((btn) => btn.classList.remove('active'));
                // Add active class to the clicked button
                button.classList.add('active');

                // Hide all tab contents
                tabContents.forEach((content) => {
                    content.classList.remove('active');
                });

                // Show the clicked tab content with animation
                const tab = document.getElementById(button.getAttribute('data-tab'));
                tab.classList.add('active');
            });
        });
    </script>
</body>
</html>
