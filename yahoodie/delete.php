<!DOCTYPE html>
<html>
<head>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Popup</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .container{
            width: 100%;
            height: 100vh;
            background: #5f687c;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn{
            padding: 10px 60px;
            background: rgb(224, 86, 86);
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }
        .popup{
            width: 400px;
            background: rgb(199, 183, 183);
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
        }
        .popup img{
            width: 200px;
            margin-top: -25px;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <button type="submit" class="btn">Submit</button>
        <div class="popup">
            <img src="tick.png">
            <h2>The Data</h2>
            <p>Has been successfully deleted!</p>
            <button type="button">OK</button>
            <h1>-----</h1>
            <a href="dashboardAdmin.php" class="btn-primary btn-md">Back to dashboard</a>
    </div>
</body>
</html>