<?php 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Albums</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <div id="app">
            <div class="container">
                <div class="row mx-4">
                    <div v-for="item in albumsList" class="col-4 mb-5 bg-secondary rounded text-center">
                        <img class="poster my-3" :src="item.poster" :alt="item.title + ' poster'">

                        <h4>
                            {{ item.title }}
                        </h4>

                        <h5>
                            {{ item.author }}
                        </h5>

                        <p>
                            {{ item.year }}
                        </p>

                        <p>
                            {{ item.genre }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/main.js"></script>
    </body>
</html>