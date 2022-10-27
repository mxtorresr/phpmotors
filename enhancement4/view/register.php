<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="/phpmotors/css/motorstyle.css">
        <title>Register</title>
    </head>

    <body>
            <header>
                <div class="container">
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
                </div>
            </header>

            <nav>
                <?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; 
                echo $navList;?>
            </nav>

            <main>
                <div>
                    <h2>Register</h2>
                    <p>All the fields are required</p>
                    <?php
                        if (isset($message)) {
                         echo $message;
                    }
                    ?>
                    <form method="post" action="/phpmotors/accounts/index.php">
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="clientFirstname"><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="clientLastname"><br>
                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="clientEmail"><br>
                        <label for="password">Password</label><br>
                        <input type="text" id="password" name="clientPassword"><br>
                        <p> Password must be at least 8 characters and contain at least 1 number, 1 capital letter, and 1 special character</p>
                        <input type="submit" name="submit" id="regbtn" value="Register">
                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="register">
                    </form>
                </div>
            </main>

            <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
            </footer>
    </body>
    </html>