

<?php
    echo <<<_END
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='post' enctype='multipart/form-data'>
Select file: <input type='file' name='filename' size='10'>
<input type='submit' value='Upload'>
_END;

if($_FILES)
{
    $name = $_FILES['filename']['name'];
     move_uploaded_file($_FILES['filename']['tmp_name'], $name);
     echo "Uploaded image '$name' <br><img src='$name'>";
}

echo "</body>
</html>"
?>