
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-size: cover;
        }

        .container {
            margin: 0 auto;
            margin-top: 20px;
            height: 100vh;
            width: 100vh;
            display: flex;
            justify-content: center;
            align-content: center;
            padding: 10px;
        }

        .form {
            position: relative;
            width: 100%;
            max-width: 380px;
            padding: 40px 50px 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            height: 400px;
        }

        .form h2 {
            text-align: center;
            letter-spacing: 1px;
            margin-bottom: 2rem;
        }

        .form label {
            position: absolute;
            font-size: 1rem;
            color: #000;
        }

        .form button {
            margin-left: 100px;
        }

        .form input {
            width: 100%;
            height: 35px;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form" action="#" onsubmit="return validation()">
            <h2>Login</h2>

            <label for=" uname">Enter Username</label><br>
            <input id="uname" type="text" placeholder="Enter Username" autocomplete="off"><br>

            <label for="pass">Enter Password</label><br>
            <input id="pass" type="password" placeholder="Enter Password" autocomplete="off"><br>
            
            <button type="button" class="btn btn-primary" onclick="validation()">Submit</button>
            <br><br>
            <p style="text-align: center;">If you are new....<a href="./Registration.php">Register here</a></p>
        </form>
    </div>

        <script src="./login.js"></script>
</body>

    </html>