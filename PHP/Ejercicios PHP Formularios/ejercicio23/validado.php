<!DOCTYPE html>
<html>

<head>
    <title> Formulario </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>
    <?php
    foreach ($_GET as $key => $value) {
        echo "<p> ".ucfirst($key)." tiene el valor <strong>".strtoupper($value)."</strong> </p>";
    }
    ?>
</body>

</html>