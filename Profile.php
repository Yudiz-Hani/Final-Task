<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin-top: 30px;
            text-align: center;
            width: 100%;
            max-width: 580px;
            padding: 40px 30px 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }
        h1{
            text-align: center;
        }
        li {
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            padding: 14px 16px;
            color: red;
            letter-spacing: 1px;
        }
        span{
            color: blue;
        }
        li a {
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            padding: 14px 16px;
            color: #000;

        }
        li {
            display: inline-block;
            list-style-type: none;
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

    </style>
    <title>Document</title>
</head>
<body>
    <div class="nav-bar">
    <ul class="right">
        <li>
            <form onsubmit="return logout()">
                <li><a href="Update.php">Update Profile</a></li>
                <li><a href="Password.php">Change Password</a></li>
                
            </form>
        </li>
    </ul>
</div>
    <div class="container">
        <h1>User Profile</h1><hr>
            <ul>
                <li>Name : <span id="name1"></span></li>
                <li>Email : <span id="email"></span></li>
                <li>Number : <span id="mobile"></span></li>
                <li>Birthdate : <span id="dob"></span></li>
            </ul>
    </div>
    <script>

        if (window.localStorage.getItem('users')) {
            var userName = document.getElementById('name1')
            var userEmail = document.getElementById('email')
            var userNumber = document.getElementById('mobile')
            var userBirthdate = document.getElementById('dob')

            let objuser = JSON.parse(localStorage.getItem('users'))

            userName.innerphp = objuser[0].user
            userEmail.innerphp = objuser[0].email
            userNumber.innerphp = objuser[0].mobile
            userBirthdate.innerphp = objuser[0].dob
        }
    </script>
</body>
    </html>