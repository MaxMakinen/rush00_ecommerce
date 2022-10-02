<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="landing.css">

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header-navbar">
                <nav>
                    <a href="#home" class="header-navbar-menu-link">Home</a>
                    <ul class="navigation">
                        <li>
                            <a href="#sweet" class="header-navbar-menu-link">Sweet</a>
                        </li>
                        <li>
                            <a href="#salty" class="header-navbar-menu-link">Salty</a>
                        </li>
                    </ul>
                    <ul class="user_actions">
                        <li>
                            <a class="cart" href="#shoppingcart" id="cart"></a>
                        </li>
                        <li>
                            <a class="signin" href="#signin" id="signin"></a>
                        </li>
                        <li>
                            <a class="logout" href="#logout" id="logout"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <main>
        <div class="sidebar"></div>
        <div class="store login">
            <form action="" method="post">
                <p>Please give Username and password for new account</p><br />
                <label for="username">Username:</label><br />
                <input type="text" id="username" name="username" placeholder="Username"><br />
                <label for="passwd">Password:</label><br />
                <input type="text" id="passwd" name="passwd" placeholder="Password"><br />
                <label for="passwd2">Re-enter password:</label><br />
                <input type="text" id="passwd2" name="passwd2" placeholder="Re-enter password"><br />
                <input type="submit" value="submit"><br />
            </form>
        </div>
        <div class="sidebar"></div>
    </main>
    <footer>
        <p>
            Made by <a href="https://github.com/MaxMakinen/" class="footer">Max Mäkinen</a> and <a
                href="https://github.com/reijjo" class="footer">Teemu Aitomeri</a> for Hive Helsinki in 2022.
        </p>
    </footer>
</body>

</html>