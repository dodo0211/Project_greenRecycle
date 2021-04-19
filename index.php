<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/style/main.css?after=19">
    <script src="https://kit.fontawesome.com/e5f544887c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">
    <title>초록리싸이클</title>
</head>
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/header.php";?>
    </header>

    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/nav.php";?>
    </nav>

    <main>
        <span>
            <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/main.php";?>  
        </span>
        <aside>
            <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/aside.php";?>
        </aside>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/footer.php";?>
    </footer>
    
</body>
</html>