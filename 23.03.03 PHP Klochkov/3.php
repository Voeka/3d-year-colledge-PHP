<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Select a img file: <input type="file" name="filename" size="10">
        <input type="submit" value="Upload">
    </form>

    <?php
    if($_FILES){
        $name = $_FILES['filename']['name'];

        switch($_FILES['filename']['type']){
            case 'image/jpeg':$ext ='jpg';break;
            case 'image/gif':$ext ='gif';break;
            case 'image/png':$ext ='png';break;
            case 'image/tiff':$ext ='tiff';break;
            default: $ext= '';break;
        }
        if($ext){
            $n ="image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'],$n);
            echo("Uploaded image '$name' as '$n':<br>");
            echo("<img src='$n'>");
        }
        else echo "'$name' is not an accepted image file";
    }
    else echo"No image has been uploaded";
    ?>
    
</body>
</html>