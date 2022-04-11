<!DOCTYPE html>
<html>

<head>
    <style>
    </style>
</head>

<body>
    <h2>Tempo atual com a função time</h2>

    <?php
    echo "<p>Agora... " .time(). "</p>";
    echo "<p>Amanhã..." .(time()+24*60*60),"</p>";
    ?>

</body>

</html>