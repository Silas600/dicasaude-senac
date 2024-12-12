<?php 
$titulo = "Suplementacao - ";
include "includes/cabecalho.php" 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplementação Adequada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            padding-top: 50px;
        }

        .content-section {
            margin-bottom: 30px;
        }

        .content-section h3 {
            color: #007bff;
        }

        .btn-primary {
            border-radius: 8px;
            padding: 12px;
            width: 100%;
        }

        .embed-responsive {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            margin-top: 20px;
        }

        .embed-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        h1, h3 {
            font-weight: bold;
        }

        .imc-result {
            margin-top: 20px;
            font-size: 1.2em;
            padding: 15px;
            border-radius: 8px;
            background-color: #e9f7ef;
            border: 1px solid #4CAF50;
            color: #4CAF50;
        }

        .imc-result.error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        /* Estilo para lista */
        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            padding: 8px;
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .container h1 {
            font-size: 2.5rem;
            text-align: center;
            color: #343a40;
        }

        /* Melhorando responsividade */
        @media (max-width: 768px) {
            .container h1 {
                font-size: 2rem;
            }

            .content-section h3 {
                font-size: 1.5rem;
            }

            .btn-primary {
                padding: 10px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding-top: 30px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center mt-5">Suplementação Adequada: <p>Melhore Sua Saúde e Performance</p></h1>
        <p>A suplementação adequada pode ser uma aliada importante para garantir que o corpo receba os nutrientes essenciais para o bom funcionamento, especialmente para pessoas com dietas restritas ou alta demanda de energia.</p>

        <h3>Benefícios da Suplementação Adequada:</h3>
        <ul>
            <li><strong>Suporte à Imunidade:</strong> Vitaminas e minerais, como vitamina C e zinco, ajudam a fortalecer o sistema imunológico.</li>
            <li><strong>Desempenho Físico:</strong> Suplementos como creatina e proteínas auxiliam na recuperação muscular e no aumento de força.</li>
            <li><strong>Saúde Mental:</strong> Suplementos como ômega-3 podem melhorar a função cognitiva e reduzir sintomas de estresse.</li>
        </ul>

        <h3>Dicas para Suplementação Adequada:</h3>
        <ul>
            <li><strong>Consulte um Profissional:</strong> Antes de iniciar qualquer suplementação, é essencial consultar um nutricionista ou médico.</li>
            <li><strong>Equilibre com a Alimentação:</strong> Suplementos devem complementar, não substituir, uma dieta saudável.</li>
            <li><strong>Use com Moderação:</strong> A dosagem recomendada deve ser seguida para evitar efeitos colaterais indesejados.</li>
        </ul>

        <p>A suplementação deve ser feita de forma equilibrada e personalizada para otimizar os benefícios à saúde e ao bem-estar.</p>

        <!-- Seção de vídeo -->
        <h3 class="text-center mt-5">Suplementação Adequada para Melhor Desempenho</h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EvZeg3m6uok?si=pxjA6MOsiManAhzq" title="Suplementação Adequada" allowfullscreen></iframe>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

        

<?php include "includes/rodape.php"?>