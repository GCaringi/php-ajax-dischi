<?php

require_once __DIR__ . "/server/database.php";

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TailwindCss Cdn-->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- /TailwindCss Cdn -->
        <!-- Vue Cdn -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- /Vue Cdn -->
        <!-- Axios Cdn -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- /Axios Cdn -->
        <!-- Css Files -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- /Css Files -->
        <title>Php-Ajax-Dischi</title>
    </head>
    <body>
        <header class = "bg-[color:var(--clr-primary)] h-[var(--header-height)] flex items-center justify-between px-3">
            <img class = "h-full p-2" src="./img/spotify-logo.png" alt="Logo App">
        </header>
        <main class="min-h-[calc(100vh-var(--header-height))] flex justify-center items-center bg-[color:var(--clr-bg-secondary)]">
            <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 place-items-center py-5 gap-3">
                <?php foreach($database as $album){?>
                <div class = "a-card w-full h-full flex flex-col items-center bg-[color:var(--clr-primary)] p-4">
                    <img class = "w-full aspect-square pb-2" src= <?= $album['poster'] ?>  alt= elem.title>
                    <h2 class= "text-white font-bold text-xxl text-center" ><?= $album['title'] ?></h2>
                    <div class = "text-[color:var(--clr-tertiary)]"><?= $album['author'] ?></div>
                    <small class = "text-[color:var(--clr-tertiary)]"><?= $album['year'] ?></small>
                </div>
                <?php } ?>
            </div>
        </main>
    </body>
</html>