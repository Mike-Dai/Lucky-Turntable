<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
    body{
        background: url(red.jpg) no-repeat;
        background-size: cover;
    }
    .main{
        width: 480px;
        height: 480px;
        margin-left: 400px;
        margin-top: 150px;
        background: orange;
        border-radius: 50%;
        box-shadow: inset 0 0 30px yellow;
        -webkit-transition: all 0.5 ease;
    }
    input[type="submit"]{
        margin-left: 190px;
        margin-top: 190px;
        width: 100px;
        height: 100px;
        background: red;
        color: white;
        font-size: 23px;
        border-radius: 50%;
        border-style: hidden;
        box-shadow: inset 0 0 15px inset rgb(54, 4, 4);
        cursor: pointer;
    }
</style>
<head>
</head>
<body>
    <div class="main">
    <form method="post" action="turntable.php">
        <input type="submit" value="开始">
    </form>
    </div>
</body>
</html>