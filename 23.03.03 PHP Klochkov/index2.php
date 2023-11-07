<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">1</a>
    <a href="index2.php">2</a>
    <a href="index3.php">3</a>
    <a href="index4.php">4</a><br>
    <form method='post' enctype='multipart/form-data'>
        Select File: <input type='file' name='filename' size='10'>
        <input type='submit' value='Upload'>
        </form>
    <?php
        if($_FILES){
            $name = $_FILES['filename']['name'];
            move_uploaded_file($_FILES['filename']['tmp_name'], $name);
            echo "Uploaded image '$name' <br><img src='$name'>";
        }
    ?>
</body>
</html>