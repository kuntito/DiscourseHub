<?php
    session_start();

    include("../misc/variables.php");
    include("../misc/functions.php");
    include("../db/database.php");

    $currentPage = "credits.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
    <link rel="stylesheet" href="../assets/stylesheets/normalize.css">
    <title>Credits</title>
</head>
<body>
    <?php
        include("../components/header.php");
        displayAlertsIfAny();
    ?>
    <main>
        <?php
            include("../components/sections/credits-section.php");
        ?>
    </main>
    <?php
        include("../components/footer.php");        
    ?>
    <script src="../scripts/nav-toggle.js"></script>
</body>
</html>