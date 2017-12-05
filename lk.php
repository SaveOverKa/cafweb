<html>
<head>
<title>Личный Кабинет</title>
<style>
    .panel {
        margin-left: 20px;
        margin-right: 20px;
        text-align: left;    
    }
    #headers {
        margin-left: 20px;
        margin-right: 20px;
    }
</style>
</head>
<body>
    <dir id="headers">
        <input type="button" value="Анкета" onclick="document.location.href = 'anketa.php';">
    </dir>
    <div class="panel">
        <h3>Здравствуйте, <?php echo $_COOKIE['name']; ?><br /></h3>
        <h3>Remix:  <?php echo $_COOKIE['Remix']; ?><br /></h3>
        <h3>Remixdata, <?php echo $_COOKIE['Remixdata']; ?><br /></h3>
    <h3>Verifed device: <?php if ($_COOKIE['Remix'] == md5($_SERVER['REMOTE_ADDR'])) { echo "OK"; } else { echo "NOT"; } ?></h3>
    </div>
</body>
</html>