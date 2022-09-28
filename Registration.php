<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>
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
            max-width: 580px;
            padding: 40px 30px 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }

        .form h2 {
            text-align: center;
            letter-spacing: 1px;
            margin-bottom: 2rem;
        }

        input[type=text],
        [type=email],
        [type=password] {
            padding: 5px;
            border-radius: 5px;
            border-color: darkgray;
        }

        input[type=radio] {
            margin: 10px;
        }

        input[type=date] {
            height: 40px;
            width: 510px;
        }

        .form button {
            margin-left: 200px;
        }

        span {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form" action="#" onsubmit="return validation()">
            <h2>Registration</h2>

            <label for="name">Name</label><br>
            <input type="text" id="name1" name="name" size="64" placeholder="Enter your name" autocomplete="off">
            <span id="sname"></span>
            <br><br>

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" size="64" placeholder="Enter your email" autocomplete="off">
            <span id="semail"></span>
            <br><br>

            <label for="mobile">Mobile</label><br>
            <input type="text" id="mobile" name="mobile" size="64" placeholder="Enter your mobile no."
                autocomplete="off">
            <span id="smobile"></span>
            <br><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" size="64" placeholder="Enter your Password"
                autocomplete="off">
            <span id="spassword"></span>
            <br><br>

            <label for="gender">Gender</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <span id="sgender"></span>
            <br><br>

            <label for="dob">DOB</label><br>
            <input type="date" id="dob" name="dob" required>
            <br><br>

            <button type="button" class="btn btn-primary" onclick="validation()">Submit</button>
            <br><br>

            <p style="text-align: center;">If you already registered....<a href="index.php">Login</a></p>
        </form>
    </div>

    <script src="./Registration.js"></script>
</body>

    </html>