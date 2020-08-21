<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<div class="box" id="box">
    <div class="qwe"><img class="axe" src="img/user.png"></div>
    <form action="lib/land.php"method="post">
        <label>username</label>
        <input class="doo" type="text" name="name" placeholder="Inter Username" required>
        <label>password</label>
        <input class="doo" type="password" name="pass" placeholder="Enter Password" required>
    </form>
    <button class="btn1">login</button>
    <label class=" Remember">
    <input class="check" type="checkbox" checked="checked"> Remember me
    </label>
    <div class="container">
        <button class="cancel" onclick="closeform()">cancel</button>
        <span>Forgot <a href="#"><u>password?</u></a></span>
    </div>



</div>

<button class="hol" onclick="openform()">login</button>
<div class="foo" id="holo"></div>
<script>
function openform() {
document.getElementById("box").style.display="block";
}
function closeform() {
document.getElementById("box").style.display="none";
}
</script>
</body>
</html>
