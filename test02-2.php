<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
<?PHP
    $message = $_POST["message"];
    $command="python test02.py " . $message;
    exec($command, $output);
    print "$output[0]\n";
    print "$output[1]\n";
    print "$output[2]\n";
?>
</div>
</body>
</html>
