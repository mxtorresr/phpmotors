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
                <h1>Add Vehicle</h1>
                <p>*Note all fields are required</p>
                <?php
                    if (isset($message)) {
                     echo $message;
                    }
                ?>
                <form method="post" action="/phpmotors/vehicles/index.php">
                    <fieldset>
                       <label id="cars">Choose a car:</label>
                       <label>
                          <?php echo $vehicleList;?> 
                        </label>
                        <br>    
                        <label for="make">Make</label><br>
                        <input type="text" id="make" name="invMake"><br>
                        <label for="model">Model</label><br>
                        <input type="text" id="model" name="invModel"><br>
                        <label for="description">Description</label><br>
                        <input type="text" id="description" name="invDescription"><br>
                        <label for="imagepath">Image Path</label><br>
                        <input type="text" id="imagepath" name="invImage"><br>
                        <label for="thumbnailpath">Thumbnail Path</label><br>
                        <input type="text" id="thumbnailpath" name="invThumbnail"><br>
                        <label for="price">Price</label><br>
                        <input type="text" id="price" name="invPrice"><br>
                        <label for="stock">Stock</label><br>
                        <input type="text" id="stock" name="invStock"><br>
                        <label for="color">Color</label><br>
                        <input type="text" id="color" name="invColor"><br>
                        <input type="submit" name="submit" class="submitbtn" value="Add vehicle">
                        <input type="hidden" name="action" value="addvehicles">
                    </fieldset>
                </form>
            </main>

            <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
            </footer>
    </body>
    </html>