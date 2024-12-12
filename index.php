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
<p></p>
   <p></p> 
       <p>
      
Neste guia, vamos explorar pequenas mudanças que transformam sua rotina e fazem você se sentir mais leve, enérgico e realizado.</p>
<p>Afinal, a saúde é o maior tesouro que podemos conquistar. Vamos juntos cuidar melhor de quem mais importa: você! </b>
     </p>        
    </header>

    <!-- Seção Principal de Dicas de Emagrecimento -->
    <main class="conteudo container mt-5">
        <section class="dicas mb-5">

            <div class="row">
                <!-- Card Alimentação Balanceada -->
                <div class="col-md-4 mb-4">
                    <a href="alimentacao.php" class="text-decoration-none text-dark">
                        <div class="card shadow-sm">
                            <img src="imagens/alimentacao.jpg" class="card-img-top" alt="Alimentação Saudável">
                            <div class="card-body">
                                <h5 class="card-title">1. Alimentação Balanceada </h5>
                                <p class="card-text">Mantenha uma dieta rica em frutas, legumes e proteínas magras. Evite alimentos processados e excesso de açúcar.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mb-4">
                    <a href="exercicio.php" class="text-decoration-none text-dark">
                        <div class="card shadow-sm">
                            <img src="imagens/exercicio.jpg" class="card-img-top" alt="Exercício Regular">
                            <div class="card-body">
                                <h5 class="card-title">2. Exercícios Regulares</h5>
                                <p class="card-text">A prática regular de atividades físicas, como caminhada, musculação ou natação, acelera o processo de emagrecimento.</p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-md-4 mb-4">
                    <a href="suplementacao.php" class="text-decoration-none text-dark">
                        <div class="card shadow-sm">
                            <img src="imagens/suplementacao.jpg" class="card-img-top" alt="Hidratação">
                            <div class="card-body">
                                <h5 class="card-title">3. Suplementação </h5>
                                <p class="card-text">A hidratação é essencial para o bom funcionamento do organismo e ajuda a controlar a fome.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Seção de Vídeos Educativos -->
        <section>
            <h2 class="text-center">Você sabe como está o seu indice de massa corporal?</h2>
            
<hr>
            <h3>Calcule seu IMC</h3>
            <div class="calculator">
                <form id="imcForm">
                    <div class="form-group">
                        <label for="weight">Peso (kg):</label>
                        <input type="number" id="weight" class="form-control" placeholder="Digite seu peso em kg" required>
                    </div>
                    <div class="form-group">
                        <label for="height">Altura (m):</label>
                        <input type="number" step="0.01" id="height" class="form-control" placeholder="Digite sua altura em metros" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculateIMC()">Calcular IMC</button>
                </form>
                <div id="imcResult" style="margin-top: 20px;"></div>
            </div>
        </section>
    </div>

    <script>
        function calculateIMC() {
            var weight = parseFloat(document.getElementById('weight').value);
            var height = parseFloat(document.getElementById('height').value);
            var result = document.getElementById('imcResult');

            if (isNaN(weight) || isNaN(height) || height <= 0 || weight <= 0) {
                result.innerHTML = "Por favor, insira valores válidos.";
                return;
            }

            var imc = weight / (height * height);
            var category = '';

            if (imc < 18.5) {
                category = 'Abaixo do peso';
            } else if (imc >= 18.5 && imc < 24.9) {
                category = 'Peso normal';
            } else if (imc >= 25 && imc < 29.9) {
                category = 'Sobrepeso';
            } else {
                category = 'Obesidade';
            }

            result.innerHTML = `Seu IMC é ${imc.toFixed(2)}. Categoria: ${category}.`;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <DIV>

   
    </main>

    <?php include "includes/rodape.php"; ?>

</body>

</html>