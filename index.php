<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    
    <link rel="stylesheet" href="./style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<div id="app">

    <h1>Dischi</h1>
    
    <ul>
        <li v-for="disc in dischi">
            <img :src="disc.poster" :alt="disc.title">
            <h4>{{ disc.year }}</h4>
            <h2>{{ disc.title }}</h2>
        </li>
    </ul>
        



</div>
    



    <script src="./script.js"></script>
</body>
</html>