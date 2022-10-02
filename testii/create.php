<?php
	$name = "SISAAN CREATE";

	function thanks_bye($str)
	{
		echo $str;
		return (0);
	}

	function create_user($user)
	{
		$username = ($_POST['login']);
		$password = ($_POST['passwd']);

		$new_user['login'] = $username;
		$new_user['passwd'] = hash('whirlpool', $password);
		$user[] = $new_user;
		file_put_contents('./private/passwd', serialize($user));
	}

	function user_exists()
	{
		if (!file_exists('./private/'))
			mkdir('./private');
		$users = unserialize(file_get_contents('./private/passwd') . "\n");
		if ($users)
		{
			foreach($users as $key => $value)
				if ($value['login'] === $_POST['login'])
					return (1);
		}
		create_user($users);
		return (0);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new user</title>
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
        <div class="store login">
            <form action="create.php" method="post">
                <p>New user</p><br />
                <label for="username">Username:</label><br />
                <input type="text" name="login" placeholder="Username"><br />
                <label for="passwd">Password:</label><br />
                <input type="password" name="passwd" placeholder="Password"><br />
                <input type="submit" name="submit" value="OK"><br />
            </form>
            <!--<p>If you don't have a user account<br />please click here to sign in as a new user</p>-->
          <!-- <a href="create.php"><button>Create user</button></a>-->
<?php
	if ($_POST['submit'] === "OK" && $_POST['login'] && $_POST['passwd'])
	{
		if (user_exists())
		{
			thanks_bye("User already exists");
			//header('Location: error.php');
		}
		else
			echo "User created";
	}
	if ($_POST['submit'] === "OK" && (!$_POST['login'] || !$_POST['passwd']))
		thanks_bye("error");
?>
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
