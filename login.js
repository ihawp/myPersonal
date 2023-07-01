function loginHeader() {
    const navbar = document.getElementById("navbar");
    navbar.innerHTML = `
        <a href="index.php" class="back-button" id="navbar-button"><i class="fa-solid fa-arrow-left"></i></a>
        <a href="register.php" id="navbar-button">register</a>
        <a href="help.php" id="navbar-button">help</a>
    `
}

loginHeader();