<?php
  session_start();
 include "./common/lib/init_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css?after2">
    <title>초록리싸이클</title>
</head>
<body>
    <header>
        <?php include "./common/lib/header.php";?>
    </header>

    <nav>
        <?php include "./common/lib/nav.php";?>
    </nav>

    <main>
        <?php include "./common/lib/main.php";?>  
    </main>

    <footer>
        <?php include "./common/lib/footer.php";?>
    </footer>
    
</body>
</html>