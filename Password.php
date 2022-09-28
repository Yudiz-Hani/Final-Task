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
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
          <div class="card-heading">
            <h3>Change Password</h3>
          </div>
          <label for="oldpassword" class="form-label">Old Password</label>
          <input id="oldPassword" type="password" class="form-control" placeholder="Old Password">
          <label for="newpassword" class="form-label">New Password</label>
          <input id="newPassword" type="password" class="form-control" placeholder="New Password">
          <div id="passwordHelpBlock" class="form-text">Your password must be 8-16 characters long.</div>
          <div class="d-flex">
            <input type="button" value="Submit" class="btn btn-blue"><br>
          </div>
        </div>
      </div>
    
</body>
      </html>