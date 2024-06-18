<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ONLINE BLOGGING SYSTEM</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url('interface_image.jpg'); /* Replace 'background.jpg' with your image path */
        background-size: cover;
        background-position: center;
    }
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }
    h1 {
        color: #000000;
        font-size: 40px; /* Increased font size */
        font-weight: bold; /* Made bold */
    }
    .buttons {
        margin-top: 20px;
    }
    .buttons button {
        padding: 10px 20px;
        margin: 0 10px;
        font-size: 19px;
        background-color: #000000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.4s;
    }
    .buttons button:hover {
        background-color: #00000;
    }
</style>
</head>
<body>

<div class="container">
    <h1>ONLINE BLOGGING SYSTEM</h1>
    <div class="buttons">
        <button onclick="location.href='signup.php';">User1</button>
        <button onclick="location.href='signup.php';">User2</button>
        <button onclick="location.href='admin_login.php';">Admin</button>
    </div>
</div>

</body>
</html>
