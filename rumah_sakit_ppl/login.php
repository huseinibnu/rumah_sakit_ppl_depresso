<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    a {
        text-decoration: none;
    }

    html {
        height: 100%;
    }

    body {
        background-image: url(img/rumahsakit.jpg);
        background-size: cover;
        background-position-x: center;
        background-position-y: top;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: rgba(0, 0, 0, .65);
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    #card {
        background: linear-gradient(rgba(0, 136, 160, .9), rgba(87, 189, 168, .9));
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .65);
        height: 480px;
        margin: 6rem auto 9.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        color: white;
        font-size: 25px;
        letter-spacing: 4px;
        padding-bottom: 25px;
        padding-top: 0px;
        text-align: center;
    }

    #signup {
        color: rgba(0, 0, 0, .65);
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
    }

    #submit-btn {
        background: -webkit-linear-gradient(right, #0088a0, #21a3a7);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #000;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        font-size: large;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: .25s;
        width: 153px;
    }

    #submit-btn:hover {
        box-shadow: 0px 1px 18px #0088a0;
    }

    .form {
        display: flex;
        align-items: left;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7b8ef7, #2ec06f);
        height: 1px;
        width: 90%;
        align-self: center;
    }

    .form-content {
        background: #fbfbfb;
        border-radius: 10px;
        border: none;
        outline: none;
        padding-top: 14px;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    </style>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Rumah Sakit Kita</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="ceklogin.php">
                <label for="user-username" style="padding-top: 13px; padding-left: 8px;">
                    &nbsp;Username
                </label>
                <input id="user-username" style="padding-left: 15px;" class="form-content" type="username" name="username" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px; padding-left: 8px;">
                    &nbsp;Password
                </label>
                <input id="user-password" style="padding-left: 15px;" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>

                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                <a href="#" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>