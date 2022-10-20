<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="/phpmotors/css/motorstyle.css">
        <title>Add vehicle</title>
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
                <h1>Vehicle Management</h1>
                <ul>
                    <li class="manli"><a href='/phpmotors/vehicles/?action=addclassification' title='Add Classification'>Add Classification</a></li>
                    <li class="manli"><a href='/phpmotors/vehicles/?action=addvehicles' title='Add Vehicle'>Add Vehicle</a></li>
                </ul>
            </main>

            <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
            </footer>
    </body>
    </html>