
<?php 
if(isset($POST['email'])) $POST['email']=NULL;
if(isset($POST['nameperson'])) $POST['nameperson']=NULL;
if(isset($POST['tieude'])) $POST['tieude']=NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent email</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="sentone.php">Gửi cho cá nhân</a>
</br>
<a href="sentmany.php">Gửi cho nhiều địa chỉ khác nhau</a>
</body>
</html>

