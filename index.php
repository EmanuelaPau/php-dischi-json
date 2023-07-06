<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <!-- CSS style -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php
    // Set session variables
    $_SESSION["sessionCounter"] += 1;
    ?>

    <div>
        <h1>Session counter <?php
                            if (isset($_SESSION['sessionCounter'])) {
                                echo $_SESSION["sessionCounter"] + 1;
                            } ?>
        </h1>
    </div>
    <div id="app">
        <!-- 
        <div class="info-disc p-4" :class="infoDiscStatus">
            <div class="d-flex w-100 justify-content-end">
                <button @click='infoDiscStatus = "d-none"'>
                    x
                </button>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                <img src="" alt="">
                <h1 class="title"></h1>
                <p>Autore</p>
                <h2 class="year">Anno</h2>
            </div>
        </div> -->

        <header class="my-header">
            <div class="header-container d-flex align-items-center">
                <img class="logo " src="./img/spotify_logo.webp" alt="">
            </div>
        </header>

        <div class="container my_container px-4">
            <div class="row gx-5 d-flex">
                <div v-for=" (disc , index) in discsList" class="col-3 my-card m-3" @click="turnOn(infoBox, discIndex, index)">

                    <img class="img-disc" :src="disc.poster" :alt="disc.title + 'poster'">
                    <h1 class="title">{{disc.title}}</h1>
                    <p>{{disc.author}}</p>
                    <h2 class="year">{{disc.year}}</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/script.js"></script>
</body>

</html>