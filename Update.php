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
            text-align: justify;
            width: 100%;
            max-width: 580px;
            padding: 40px 30px 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
        }

        .data {
            margin-top: 20px;
        }
        label{
            margin: 15px;
        }
        input{
            margin: 15px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-heading">
                <h1>Edit Profile</h1>
            </div>
            <div class="data">
                <label for="name" class="form-label">Old Password</label><br>
                <input id="name" type="text" value='' class="form-control mb-1" placeholder="Name"><br>
                <label for="email" class="form-label">New Password</label><br>
                <input id="email" value='' type="email" size="30" class="form-control mb-1" placeholder="Email"><br>
                <label for="mobile" class="form-label">New Password</label><br>
                <input id="mobile" type="text" value='' class="form-control mb-1" placeholder="Mobile"><br>
                <div class="d-flex">
                    <input type="button" value="Submit" class="btn btn-blue"><br>
                </div>
            </div>
        </div>
    </div>

</body>

    </html>