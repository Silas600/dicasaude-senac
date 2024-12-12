<?php 
$titulo = "exercicio- ";
include "includes/cabecalho.php" 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Regulares: Benefícios para a Saúde e Bem-Estar</title>
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
        <h1 class="text-center mt-5">Exercícios Regulares: <p>Benefícios para a Saúde e Bem-Estar</p></h1>
        <p>A prática de exercícios regulares é fundamental para manter uma boa saúde física e mental. Além de melhorar a qualidade de vida, os exercícios oferecem diversos benefícios para o corpo e a mente, especialmente para quem passa longas horas sentado, como programadores e profissionais de escritório.</p>

        <h3>Benefícios dos Exercícios Regulares:</h3>
        <ul>
            <li><strong>Melhora a Saúde Cardiovascular:</strong> Exercícios como caminhada, corrida e natação ajudam a fortalecer o coração e os pulmões.</li>
            <li><strong>Aumenta a Força e a Flexibilidade:</strong> A musculação e o alongamento melhoram a resistência e a flexibilidade muscular, prevenindo lesões.</li>
            <li><strong>Reduz o Estresse:</strong> Atividades físicas liberam endorfina, um hormônio que ajuda a reduzir o estresse e a ansiedade.</li>
            <li><strong>Aumenta a Energia:</strong> A prática regular de exercícios melhora a circulação sanguínea e o transporte de oxigênio, proporcionando mais energia ao longo do dia.</li>
            <li><strong>Melhora a Qualidade do Sono:</strong> A atividade física regular pode ajudar a ter um sono mais profundo e reparador.</li>
        </ul>

        <h3>Dicas para Começar:</h3>
        <ul>
            <li><strong>Escolha Atividades que Você Goste:</strong> Pode ser caminhada, dança, natação ou qualquer outro exercício que traga prazer.</li>
            <li><strong>Comece Devagar:</strong> Inicie com sessões curtas e vá aumentando a intensidade gradualmente.</li>
            <li><strong>Faça Pausas no Trabalho:</strong> Levante-se a cada hora e faça alongamentos rápidos para melhorar a circulação.</li>
        </ul>

        <p>Em resumo, exercícios regulares não apenas ajudam a manter o corpo saudável, mas também têm um impacto significativo no bem-estar mental e na produtividade.</p>
    </div>

    <!-- Seção de vídeo -->
    <h3 class="text-center mt-5">A Importância dos Exercicos Fisicos </h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/Gnh3dwps_jE?si=kRr5xVhvPrIAWWGe" title="Suplementação Adequada" allowfullscreen></iframe>
        </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


<?php include "includes/rodape.php"?>