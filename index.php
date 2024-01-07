<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.CSS">
    <title>Dom to DB1</title>
</head>
<body>
    <h1>Dom to DB1 from tutorial by Dr. Charles Severance</h1>
    <p>(07:59:57) PHP, MySQL, and PDO - Part 1</p>

    <?php
    echo "<pre>\n";
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=the88','bobc','iau');  
    $stmt = $pdo->query("SELECT * FROM Sterngucker");                                                                                                                                                                        $stmt = $pdo→query(“SELECT * FROM Sternglucker”);
    while ( $row = $stmt→fetch(PDO::FETCH_ASSOC)  )  {
        print_r($row);
    }
    echo "</pre>\n";
    ?>
 
    



<script src="jscript.js"></script>
<span class="px-viewport-dimensions tr px-viewport-dimensions--hidden"></span>
</body>
</html>