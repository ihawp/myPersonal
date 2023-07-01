<?php

session_start();

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>myPersonal</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <header>
        <navbar id="navbar">
            <a href="login.php" id="navbar-button">login</a>
            <a href="register.php" id="navbar-button">register</a>
            <a href="help.php" id="navbar-button">help</a>
        </navbar>
    </header>
    <main>
        <section id="main">
            <div id="cookies-notification">
                <p>We use cookies to ensure a good UX</p>
                <a id="cookies-button">accept</a>
            </div>
            <div id="mptt-custom">
                <h1 id="mp-title-text">myPersonal<a id="mp-pink-dot">.</a></h1>
            </div>
            <div id="mpar-custom">
                <a onclick="scrollToSection('whoarewe')"><i id="mparc-darrow" class="fa-solid fa-arrow-down" style="color:#f5f5f5"></i></a>
            </div>
            <div id="whoarewe" class="info-block">

            </div>
            <div id="moreabout" class="info-block">

            </div>
            <div id="more" class="info-block">

            </div>
        </section>
    </main>
<?php

include 'footer.php';
$_SESSION['logged_in'] = true;

?>