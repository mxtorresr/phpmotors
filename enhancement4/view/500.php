<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Server   error</title>
    <meta name="description" content="HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" media="screen" href="css/motorstyle.css" >
</head>


<body>
    <section>
    <header>
        <div class="container">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </div>
    </header>
    
    <nav>
        <?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; 
        echo $navList;?>
    </nav>

    <div>
        <h1>SERVER ERROR</h1>
        <h3>Sorry our servers seems to be experiencing some technical difficulties. Please check back later</h3>
    </div>

    <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
    </section>
</body>
</html>