// Look up HTML mime type for email
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Hello from Budget</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            font-family: 'Arial';
        }
        header {
            background-color: ghostwhite;
            width: 100%;
            text-align: center;
            padding: 20px 0 40px;
            margin-bottom: 40px;
        }
        #content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        p {
            padding: 10px 0;
        }
        #div-btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #btn {
            background-color: dodgerblue;
            padding: 10px 40px;
            border-style: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;

            &:hover {
                background-color: deepskyblue;
            }
        }
        footer {
            background-color: ghostwhite;
            width: 100%;
            text-align: center;
            padding: 40px 0 80px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Budget</h1>
    </header>
    <div id="content">
        <div class="text">
            <h2>Hello!</h2>
            <p>You are receiving this email because we received a password reset request for your account.</p>
        </div>
        <div id="div-btn">
            <a id="btn" href="http://localhost:3000/reset-password?token=<?=$token ?>">Reset password</a>
        </div>
        <div class="text">
            <p>If you did not request a password reset, no further action is required.</p>
            <p>Regards,<br>Budget</p>
        </div>
    </div>
    <footer>
        <span>© 2024 <a href="localhost:3000">Budget</a>. All rights reserved.</span>
    </footer>
</body>
</html>