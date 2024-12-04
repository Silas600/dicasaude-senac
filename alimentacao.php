<?php 
$titulo = "alimentacao - ";
include "includes/cabecalho.php" 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentação Balanceada para Programadores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .calculator {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            width: 100%;
            border-radius: 8px;
            padding: 12px;
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
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center">Alimentação Balanceada:
            <p> Como Melhorar a Saúde e Produtividade</p></h1>

        <section class="content-section">
            <h3>Por que a Alimentação é Importante?</h3>
            <p>A alimentação é crucial para manter o corpo e a mente em alta performance, especialmente para programadores que passam longas horas em frente ao computador. Uma dieta balanceada ajuda a aumentar a concentração, reduzir a fadiga e melhorar a saúde geral.</p>
        </section>

        <section class="content-section">
            <h3>Nutrientes Essenciais para o Desempenho</h3>
            <ul>
                <li><strong>Carboidratos Complexos:</strong> Alimentos como arroz integral e aveia fornecem energia constante para o cérebro.</li>
                <li><strong>Proteínas de Alta Qualidade:</strong> Ovos, carnes magras e legumes são importantes para a recuperação e o funcionamento cerebral.</li>
                <li><strong>Gorduras Saudáveis:</strong> Abacate, nozes e azeite de oliva ajudam na função cerebral e absorção de vitaminas.</li>
                <li><strong>Vitaminas e Minerais:</strong> Frutas e vegetais, ricos em vitaminas C e B, são essenciais para reduzir o estresse e melhorar a memória.</li>
                <li><strong>Água:</strong> Manter-se hidratado é fundamental para o foco e a concentração.</li>
            </ul>
        </section>

        <section class="content-section">
            <h3>Alimentos para Melhorar a Função Cognitiva</h3>
            <ul>
                <li><strong>Peixes ricos em ômega-3:</strong> (salmão e sardinha) ajudam na memória e concentração.</li>
                <li><strong>Frutas e verduras antioxidantes:</strong> (berries, espinafre) protegem o cérebro contra danos.</li>
                <li><strong>Nozes e sementes:</strong> fornecem nutrientes para manter a mente ativa.</li>
            </ul>
        </section>

        <section class="content-section">
            <h3>Dicas Práticas</h3>
            <ul>
                <li>Evite pular refeições e opte por lanches saudáveis, como frutas e nozes.</li>
                <li>Reduza alimentos ricos em açúcares refinados, que causam picos e quedas de energia.</li>
                <li>Faça pausas regulares para descansar e manter o foco.</li>
            </ul>
        </section>
        <h3 class="text-center mt-5">Alimentação Balanceada </h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/ywUuoTJJznA?si=vesNMI40JCq6B0jR" title="Suplementação Adequada" allowfullscreen></iframe>
        </div>

         

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



<?php include "includes/rodape.php"?>