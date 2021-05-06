<?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/head.php"; ?>
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/login/login.css?after=1">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/header.php"; ?>
    </header>

    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/nav.php"; ?>
    </nav>

    <main>
        <div class="common-container">
            <div id="login_box">
                <div id="login_title">
                    <span>로그인</span>
                </div>
                <div id="naver_id_login">
                    <a href="<?php echo $naver_login_api_url; ?>">
                        <img height="50" src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/naver_login.png"/>
                    </a>
                </div>
            </div> <!-- login_box -->
        </div>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/footer.php"; ?>
    </footer>

</body>

</html>