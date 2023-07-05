<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
3 file -->


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

    <div id="app">

        <div class="info-disc p-4">
            <div class="d-flex w-100 justify-content-end">
                <button>
                    x
                </button>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                <img src="" alt="">
                <h1 class="title">Titolo</h1>
                <p>Autore</p>
                <h2 class="year">Anno</h2>
            </div>
        </div>

        <header class="my-header">
            <div class="header-container d-flex align-items-center">
                <img class="logo " src="./img/spotify_logo.webp" alt="">
            </div>
        </header>
        <div class="container my_container px-4">
            <div class="row gx-5 d-flex">
                <div v-for=" (disc,index) in discsList" class="col-3 my-card m-3" @click="turnOn(infoBox)">
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