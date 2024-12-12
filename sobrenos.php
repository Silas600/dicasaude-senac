<?php
$titulo = "Serviços - ";
include "includes/cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Projeto Integrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #004d99;
        }

        .section-title {
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .section-content {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .team-member h4 {
            color: #007bff;
        }

        .team-member p {
            font-style: italic;
        }

    </style>
</head>
<body>

    <div class="container">
        <header class="text-center mb-4">
            <h1>Sobre Nós</h1>
            <p>Conheça os alunos do SENAC responsáveis pelo desenvolvimento do Projeto Integrador.</p>
        </header>

        <!-- Introdução -->
        <section>
            <h2 class="section-title">Nosso Projeto</h2>
            <p class="section-content">
                O Projeto Integrador é uma iniciativa desenvolvida por três alunos do SENAC que buscam aplicar os conhecimentos adquiridos ao longo do curso para resolver problemas reais e contribuir para a sociedade. 
                A equipe é composta por Rafael Malaquias, Sila Medeiros e Ruan Victor, cada um trazendo sua experiência e perspectiva única para o projeto.
            </p>
        </section>

        <!-- Alunos -->
        <section id="sobrenos">
            <h2 class="section-title">Nosso Time</h2>
            <div class="row">
                <!-- Rafael Malaquias -->
                <div class="col-md-4 team-member">
                    <img src="imagens/rafa.jfif" alt="Rafael Malaquias">
                    <h4>Rafael Malaquias</h4>
                    <p>31 anos - Desenvolvedor Web</p>
                    <p>Rafael traz uma experiência na área de desenvolvimento de software, com ênfase em soluções criativas e eficientes. Seu foco no projeto é garantir a parte técnica, criando ferramentas que facilitem a aplicação prática da ideia proposta.</p>
                </div>

                <!-- Sila Medeiros -->
                <div class="col-md-4 team-member">
                    <img src="imagens/silas.jfif" alt="Sila Medeiros">
                    <h4>Sila Medeiros</h4>
                    <p>18 anos - Desenvolvedor Web</p>
    <p>Silas é o responsável pelo desenvolvimento da interface do usuário do projeto. Com habilidades em programação front-end, ele cria páginas interativas e responsivas, garantindo que os usuários tenham uma experiência fluida e agradável ao interagir com o sistema.</p>
                </div>

                <!-- Ruan Victor -->
                <div class="col-md-4 team-member">
                    <img src="imagens/ruan.jfif" alt="Ruan Victor">
                    <h4>Ruan Victor</h4>
                    <p>17 anos - Desenvolvedor Web</p>
                    <p>Com uma forte base em análise de sistemas, Ruan contribui com sua visão crítica sobre o desenvolvimento e a implementação do projeto. Ele é responsável por planejar, testar e garantir que o sistema seja funcional e atenda às necessidades do projeto.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include "includes/rodape.php"; ?>

</body>

</html>