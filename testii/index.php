<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolstore landing page</title>
    <link rel="stylesheet" href="landing.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header-navbar">
                <nav>
                    <a href="index.php" class="header-navbar-menu-link">Home</a>
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
                            <a class="cart" href="cart.php" id="cart"></a>
                        </li>
                        <li>
                            <a class="signin" href="login.php" id="signin"></a>
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
        <div class="store">
            <ol>
                <li>
                    <div class="product_display">
                        <a title="Breadboye" href="#bread">
                            <div class="product" name="Breadboye" style="background-image: url('images/doge_bread.png');">
                                Breadboye</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="product_display">
                        <a href="#cool">
                            <div class="product" name="Coolboye" style="background-image: url('images/cool_doge.png');">
                                Coolboye</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="product_display">
                        <a href="#smile">
                            <div class="product" name="Smileboye" style="background-image: url('images/smile_dog.png');">
                                Smileboye</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="product_display">
                        <a href="#buff">
                            <div class="product" name="Buffboye" style="background-image: url('images/buff_doge.png');">
                                Buffboye</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="product_display">
                        <a href="#skeleboye">
                            <div class="product" name="Skeleboye" style="background-image: url('images/skeletor_points.png');">
                                Skeleboye</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="product_display">
                        <a href="#jokeboye">
                            <div class="product" name="jokeboye" style="background-image: url('images/joke_dog.png');">
                                Jokeboye</div>
                        </a>
                    </div>
                </li>
            </ol>
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
