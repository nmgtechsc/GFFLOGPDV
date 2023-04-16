<?php
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">
    <title>Inicio</title>
</head>
<body>
    <div class="navigation">
        <ul>
        <li class="list active">
            <a href="#">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title">INICIO</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                <span class="title">CADASTROS</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                <span class="title">SUPRIMENTOS</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><ion-icon name="pricetags-outline"></ion-icon></span>
                <span class="title">VENDAS</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><ion-icon name="trending-up-outline"></ion-icon></span>
                <span class="title">FINANÇAS</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">CONTA</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                <span class="title">SAIR</span>
            </a>
        </li>
        </ul>
    </div>
    <div class="principal">
        <iframe src="corpo.php" class="corpo" name="inicio" frameborder="0"></iframe>
    </div>
    
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    const list = document.querySelectorAll('.list');
    function activelink(){
        list.forEach((item) => 
        item.classList.remove('active'));
        this.classList.add('active');
    }
        list.forEach((item) =>
        item.addEventListener('click', activelink));
</script>
</html>