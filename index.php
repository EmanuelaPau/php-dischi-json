<?php
include __DIR__ . '/var.php';
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

    if (isset($_GET['searchbar'])) {
        $keyword = $_GET['searchbar'];
    };

    ?>
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
            <div class="header-container d-flex align-items-center justify-content-between">
                <img class="logo me-5" src="./img/spotify_logo.webp" alt="">
                <h2 class="mb-0">Session counter
                    <?php
                    if (isset($_SESSION['sessionCounter'])) {
                        echo $_SESSION["sessionCounter"] + 1;
                    }
                    ?>
                </h2>
                <form class="form-inline my-2 my-lg-0 d-flex " method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchbar">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
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