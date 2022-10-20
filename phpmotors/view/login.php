<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="/phpmotors/css/motorstyle.css">
        <title>login</title>
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
                <h2>Sign in</h2>
                    <?php
                    if (isset($message)) {
                    echo $message;
                    }
                    ?>
                    <form>
                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" required><br>
                        <label for="password">Password</label><br>
                        <input type="text" id="password" name="password" required><br>
                        <input type="submit" value="Sign-In">
                    </form>
                    <br>
                    <a href="index.php?action=register">Not a member yet? Sign-up here</a>
            </div>
            </main>

            <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
            </footer>
    </body>
    </html>