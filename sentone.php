<!-- //bai2 -->

<?php
$_POST['act']=1;
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
<form action="mail.php" enctype="multipart/form-data" method="POST">
<h3>Email tới cá nhân</h3>
    <h5>Email:</h5>
<input type="text" class="form-control" name="email" placeholder="Email">
<h5>Tên người nhận:</h5>
<input type="text" class="form-control" name="nameperson" placeholder="tên người nhận">
<h5>Tiêu đề:</h5>
<input type="text" class="form-control" name="tieude" placeholder="ten">
<h5>Nội dung:</h5>
<textarea name="content" id="editor" class="form-control"></textarea>
<h5>File đính kèm</h5>
<input type="file" class="form-control" name="file"  >
<button type="submit" class="btn btn-primary">Gửi</button>

</body>
</html>

