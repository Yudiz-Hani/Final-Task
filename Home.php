
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0 auto;
            font-size: 22px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .left,
        .right {
            list-style-type: none;
        }

        .left li,
        .right li {
            display: inline-block;
            
        }

        .left li a,
        .right li a {
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            padding: 14px 16px;
            color: #000;

        }

        .nav-bar {
            display: flex;
            margin: 0;
            padding: 0;
            justify-content: space-between;
            background-color: rgb(246, 246, 239);
            border: 1px solid black;
        }

        /*Pseudo class- used to add special state o n hover and etc*/
        .nav-bar li a:hover {
            background-color: rgb(158, 153, 153);
            color: #000;
        }

        .nav-bar li button {
            padding: 1px;
            margin-top: 4px;
            margin-right: 20px;
            border-radius: 5px;
            background: rgb(246, 246, 239);
            border-color: #000;
        }

        .sidebar {
            height: 690px;
            width: 300px;
            background: rgb(246, 246, 239);
            border-color: #000;
            float: left;
        }

        .temp{
            margin-left: 50px;
        }
        .time{
            margin-left: 50px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="nav-bar">
        <!-- left-nav -->
        <ul class="left">
            <li><a href="Profile.php">Profile</a></li>
            <li><a>|</a></li>
            <li><a href="#">Task</a></li>
        </ul>
        <!-- right-nav -->
        <ul class="right">
            <li>
                <form onsubmit="return logout()">
                    <button type="submit"><a>Logout</a></button>
                </form>
            </li>
        </ul>
    </div>

    <div class="main">
        <div class="sidebar">

            <div class="time"><b>Current Time:</b>
            <h2 id="clock"></h2>
        </div>
            <br><br>

            <div style="height: 250px; margin-left:50px">
                <b>Random GIF:</b><br>
                <img id="mygif" style="margin-top: 15px;height: 150px;width: 150px;" />
            </div>
           
            <div class="temp">
            <b>Temperature:</b><br>
            <img src="https://ssl.gstatic.com/onebox/weather/64/partly_cloudy.png">
            <h2 id="temp"></h2>
            <h3 id="desc"></h3>
            <p id="loc">
            </div>
        </div>

        <div class="container">
            <h1 style="text-align: center;">Welcome to Dashboard</h1>
        </div>
    </div>
    <script src="Home.js"></script>
</body>

    </html>