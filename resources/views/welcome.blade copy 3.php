<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Webpage with Animated Tabs & Graphics</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: radial-gradient( circle farthest-corner at 10% 20%,  rgb(0, 247, 62) 0%, rgba(249,0,0,1) 90.1% );
            position: relative;
        }
        @import url('https://fonts.googleapis.com/css2?family=Suez+One&display=swap');
     

        .bg-overlay2 {
            position: absolute; 
            top: 0;
            left: 1900;
            width: 900px;
            height: 900px;
            border-radius: 440px;
            background: radial-gradient(circle at 50% 50%, rgb(240, 188, 68), #ffbdbd);
            z-index: -1;
            animation: rotate-bg 1s infinite linear;
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
            width: 100%;
            max-width: 1000px;
            background: radial-gradient(circle, rgb(255, 255, 255), rgb(255, 255, 255));
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fade-in 1s ease-in;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgb(0, 0, 0);
        }

        .title {
            margin-bottom: 95px;
            color: #da2323;
            font-size: 50px;
            font-weight: 850;
            font-family: 'Roboto', sans-serif;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab-btn {
            background-color: #f1f1f1;
            padding: 24px 35px;
            border: none;
            outline: none;
            cursor: pointer;
            margin: 0 10px;
            border-radius: 90px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 1.4em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            font-weight: 700;
        }

        .tab-btn:nth-child(1) {
            background-color: #61ff8b; /* Cir-Commission */
        }

        .tab-btn:nth-child(2) {
            background-color: #a10751; /* CM-Commission */
            color: white;
        }

        .tab-btn:nth-child(3) {
            background-color: #1966d3; /* BM-Commission */
            color: white;
        }

        .tab-btn:hover {
            background-color: #ff0c96; /* Golden highlight on hover */
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        
        .tab-btn.active:hover {
            background-color: #ff0c96; /* Golden highlight on hover */
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .tab-btn.active {
            background-color: #086354;
            color: rgb(255, 255, 255);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
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
            width: 500px;
            height: 35px;
            background: radial-gradient(circle, rgba(255, 223, 186, 1), rgba(255, 132, 132, 1));
            margin: 100px auto;
            border-radius: 30%;
            animation: pulse 2s infinite alternate;
            box-shadow: 0 4px 2px rgba(233, 17, 17, 0.997);
        }

        @keyframes pulse {
            0% {
                background: radial-gradient(circle, rgb(241, 160, 68), rgb(255, 255, 255));
            }
            50% {
                background: radial-gradient(circle, rgb(252, 32, 164), rgb(252, 252, 252));
            }
            100% {
                background: radial-gradient(circle, rgb(68, 248, 56), rgb(255, 255, 255));
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

        .clock {
            margin-top: 90px;
            margin-bottom: 20px;
            margin-bottom: 20px;
            font-size: 25px;
            font-weight: bold;
            color: #23064d;
            animation: fade-in 1s ease-in;
        }


        p{
            color: #086354;
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

    {{-- <div class="bg-overlay2"></div> --}}

    <div class="container">
        
        <h1 class="title">MAKLIFE PRODUCER COMPANY</h1>
        <div class="tabs">
            <a href="\import" class="tab-btn active" data-tab="tab1">CIR-Commission</a>
            <a href="\commission" class="tab-btn" data-tab="tab2">CM-Commission</a>
            <a href="\import-export" class="tab-btn" data-tab="tab3">BM-Commission</a>
        </div>
        

    <div class="clock" id="liveClock"></div> 
           
            {{-- <p>The CIR Commission's support for Maklife Producer Company is invaluable in enhancing our community initiatives. Your guidance and collaboration are instrumental in driving sustainable growth and positive change!</p> 
        </div>
        <div class="tab-content" id="tab2">
           
            <p>The CM Commission's partnership with Maklife Producer Company is vital for empowering local producers. Your commitment to fostering innovation and sustainability is truly commendable.</p>
        </div>
        <div class="tab-content" id="tab3">
            
            <p>The BM Commission's collaboration with Maklife Producer Company is pivotal in promoting fair business practices. Your support is essential for empowering producers and enhancing local economies.</p>
        </div>
    </div> --}}

    <script>
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach((button) => {
            button.addEventListener('click', () => {
                tabButtons.forEach((btn) => btn.classList.remove('active'));
                button.classList.add('active');

                tabContents.forEach((content) => {
                    content.classList.remove('active');
                });

                const tab = document.getElementById(button.getAttribute('data-tab'));
                tab.classList.add('active');
            });
        });

        // Live Clock Function
        function updateClock() {
            const now = new Date();
            const options = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
            const timeString = now.toLocaleTimeString([], options);
            document.getElementById('liveClock').textContent = timeString;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);
        updateClock(); // Initial call to display clock immediately
    </script>
</body>
</html>
