<!-- index.php -->
<?php
$titulo = "Serviços - ";
include "includes/cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas de Emagrecimento - DICASAUDE</title>

    <!-- Link para o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <!-- Cabeçalho -->
    <header class="bg-light py-5 text-center">
        <h1 class="display-4">Dicas de Saúde para uma Vida Melhor</h1>
    </header>

    <!-- Seção Principal de Dicas de Emagrecimento -->
    <main class="conteudo container mt-5">
        <section class="dicas mb-5">


            <!-- Card de Dica 1 -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="imagens/alimentacao.jpg" class="card-img-top" alt="Alimentação Saudável">
                        <div class="card-body">
                            <h5 class="card-title">1. Alimentação Balanceada</h5>
                            <p class="card-text">Mantenha uma dieta rica em frutas, legumes e proteínas magras. Evite alimentos processados e excesso de açúcar.</p>
                        </div>
                    </div>
                </div>

                <!-- Card de Dica 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="imagens/exercicio.jpg" class="card-img-top" alt="Exercício Regular">
                        <div class="card-body">
                            <h5 class="card-title">2. Exercícios Regulares</h5>
                            <p class="card-text">A prática regular de atividades físicas, como caminhada, musculação ou natação, acelera o processo de emagrecimento.</p>
                        </div>
                    </div>
                </div>

                <!-- Card de Dica 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="imagens/suplementacao.jpg" class="card-img-top" alt="Hidratação">
                        <div class="card-body">
                            <h5 class="card-title">3. Suplementação </h5>
                            <p class="card-text">A hidratação é essencial para o bom funcionamento do organismo e ajuda a controlar a fome.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Vídeos Educativos -->
        <section class="videos mb-5">
            <h2 class="text-center mb-4">
                4 DICAS PARA MELHORAR SUA SAÚDE MENTAL SEM PRECISAR IR AO PSICÓLOGO
            </h2>
            <div class="row">
                <div class="=col-md-12 d-flex justify-content-center mb-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/CrwRwgNJIMU?si=z6O2SNINY1-s9wic"
                            title="Dicas de Emagrecimento"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="=col-md-12 d-flex justify-content-center mb-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            class="embed-responsive-item"
                           src="https://www.youtube.com/embed/iQPNWBwP2nQ?si=ykyZgfX5iNW5Mc6Z"
                            title="Dicas de Emagrecimento"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>



    </main>

    <?php include "includes/rodape.php"; ?>

</body>

</html>