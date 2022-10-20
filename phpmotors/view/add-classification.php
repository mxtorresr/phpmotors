<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="/phpmotors/css/motorstyle.css">
        <title>Add Car Classification</title>
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
                <h1>Add Car Classification</h1>
                <?php
                    if (isset($message)) {
                     echo $message;
                }
                ?>
                <form method="post" action="/phpmotors/vehicles/index.php">
                    <label for="classificationname">Classification Name</label><br>
                    <input type="text" id="classificationName" name="classificationName" required><br>
                    <input type="submit" name="submit" class="submitbtn" value="Add Classification">
                    <input type="hidden" name="action" value="addclass" >
                </form>
            </main>

            <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
            </footer>
    </body>
    </html>