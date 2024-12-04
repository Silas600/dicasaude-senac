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

            <div class="row">
                <!-- Card Alimentação Balanceada -->
                <div class="col-md-4 mb-4">
                    <a href="alimentacao.php" class="text-decoration-none text-dark">
                        <div class="card shadow-sm">
                            <img src="imagens/alimentacao.jpg" class="card-img-top" alt="Alimentação Saudável">
                            <div class="card-body">
                                <h5 class="card-title">1. Alimentação Balanceada</h5>
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
                    <a href="exercicio.php" class="text-decoration-none text-dark">
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
        <section class="videos mb-5">
            <h2 class="text-center mb-4">O que é ser uma pessoa saudável?</h2>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center mb-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9q7WaQqtWK4?si=M9V8y70Xz6fTZsKP" title="Dicas de Emagrecimento" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção Sobre Nós -->
        <section class="sobre-nos bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Sobre Nós</h2>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="imagens/sobre-nos.jpg" alt="Sobre Nós" class="img-fluid rounded shadow-sm">
                    </div>
                    <div class="col-md-6">
                        <p>
                           <!--  -->
                        </p>
                        <p>
                            <!--  -->
                        </p>
                    </div>
                </div>
            </div>
        </section>

         <!-- Seção Contato -->
         <section class="contato py-5">
            <div class="container">
                <h2 class="text-center mb-4">Contato</h2>
                <div class="row">
                    <!-- Formulário de Contato -->
                    <div class="col-md-6">
                        <form action="processa_contato.php" method="POST" class="shadow-sm p-4 rounded bg-light">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="4" placeholder="Escreva sua mensagem aqui" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </form>
                    </div>

                    <!-- Informações de Contato -->
                    <div class="col-md-6">
                        <h5>Entre em contato conosco</h5>
                        <p>
                            Se você tem dúvidas, sugestões ou gostaria de colaborar, entre em contato conosco. Estamos aqui para ajudar!
                        </p>
                        <ul class="list-unstyled">
                            <li><strong>E-mail:</strong> contato@dicasaude.com</li>
                            <li><strong>Telefone:</strong> (11) 1234-5678</li>
                            <li><strong>Endereço:</strong> Rua da Saúde, 123 - São Paulo, SP</li>
                        </ul>
                        <p>Siga-nos nas redes sociais:</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" class="text-primary">Facebook</a></li>
                            <li class="list-inline-item"><a href="#" class="text-info">Twitter</a></li>
                            <li class="list-inline-item"><a href="#" class="text-danger">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include "includes/rodape.php"; ?>

</body>

</html>