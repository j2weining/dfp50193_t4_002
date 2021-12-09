<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="readfile.php">
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>
    <?php
    $myfile = fopen("hello.txt", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("hello.txt")));
    fclose($myfile);
    ?>
</body>

</html>