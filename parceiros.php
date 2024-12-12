<?php
$titulo = "Parceiros - ";
include "includes/cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parceiros - DICASAUDE</title>

    <!-- Link para o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header class="bg-light py-5 text-center">
        <h1 class="display-4">Nossos Parceiros</h1>
        <p class="lead">Conheça os profissionais que colaboram com o DICASAUDE.</p>
    </header>

    <main class="conteudo container mt-5">
        <!-- Nutricionistas -->
        <section class="mb-5">
            <h2 class="text-center">Nutricionistas</h2>
            <div class="row">
                <?php
                $nutricionistas = [
                    ["nome" => "Dra. Maria Silva", "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL18Q2yY1kez2LvMPBymvijUF89S7NWHIL9A&s", "portfolio" => "Especialista em dietas personalizadas.", "instagram" => "https://www.instagram.com/dra.mariasilva_/", "linkedin" => "https://br.linkedin.com/in/maria-silvia-54317962"],
                    ["nome" => "Dr. João Santos", "foto" => "https://guiamedicoconquista.com.br/gerencia/upload/10082022020905-0.jpg", "portfolio" => "Nutrição esportiva e desempenho.", "instagram" => "https://www.instagram.com/dr.joaosantos.ft/", "linkedin" => "https://nl.linkedin.com/in/santosjmo"],
                    ["nome" => "Dra. Ana Pereira", "foto" => "https://orthomedcenter.com.br/wp-content/uploads/2019/07/Ana-Luiza-Naves-Pereira-1.jpg", "portfolio" => "Dieta vegetariana e plant-based.", "instagram" => "https://www.instagram.com/institutoanapereira/", "linkedin" => "https://br.linkedin.com/in/anacristinafonsecapereira"],
                ];

                foreach ($nutricionistas as $nutri) {
                    echo "<div class='col-md-4 mb-4'>
                            <div class='card shadow-sm'>
                                <img src='{$nutri['foto']}' class='card-img-top' alt='{$nutri['nome']}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$nutri['nome']}</h5>
                                    <p class='card-text'>{$nutri['portfolio']}</p>
                                    <a href='{$nutri['instagram']}' class='btn btn-primary btn-sm'>Instagram</a>
                                    <a href='{$nutri['linkedin']}' class='btn btn-secondary btn-sm'>LinkedIn</a>
                                </div>
                            </div>
                        </div>";
                }
                ?>
            </div>
        </section>

        <!-- Preparadores Físicos -->
        <section class="mb-5">
            <h2 class="text-center">Preparadores Físicos</h2>
            <div class="row">
                <?php
                $preparadores = [
                    ["nome" => "Luís Costa", "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2bhkvaK8bQe6oAUDJgcRhxHXMW93sD85v45FlwH78SrcNQHtIdmede-is8UGI3XZ6dGM&usqp=CAU", "portfolio" => "Treinamento funcional e mobilidade.", "instagram" => "https://www.instagram.com/mobilidadefuncional/", "linkedin" => "https://br.linkedin.com/in/luis-costa-37303a15a"],
                    ["nome" => "Fernanda Souza", "foto" => "https://fernandasouzapersonal.com/img/sobre.png", "portfolio" => "Condicionamento físico feminino.", "instagram" => "https://www.instagram.com/fernandasouza.personal/", "linkedin" => "https://br.linkedin.com/in/fernanda-souza-97ab8959"],
                    ["nome" => "Ricardo Lima", "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7thliTVqS5eOEnZfl6f5wGordbGv0VyAgej3vd3OCssB3Hwkx8buWk68oY6Nm541SOFg&usqp=CAU", "portfolio" => "Hipertrofia muscular.", "instagram" => "https://www.instagram.com/ricardolima.personal/?__d=1%3Futm_source%3Dig_embed", "linkedin" => "https://br.linkedin.com/in/ricardo-lima-70195166"],
                ];

                foreach ($preparadores as $prep) {
                    echo "<div class='col-md-4 mb-4'>
                            <div class='card shadow-sm'>
                                <img src='{$prep['foto']}' class='card-img-top' alt='{$prep['nome']}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$prep['nome']}</h5>
                                    <p class='card-text'>{$prep['portfolio']}</p>
                                    <a href='{$prep['instagram']}' class='btn btn-primary btn-sm'>Instagram</a>
                                    <a href='{$prep['linkedin']}' class='btn btn-secondary btn-sm'>LinkedIn</a>
                                </div>
                            </div>
                        </div>";
                }
                ?>
            </div>
        </section>

        <!-- Endocrinologistas -->
        <section class="mb-5">
            <h2 class="text-center">Endocrinologistas</h2>
            <div class="row">
                <?php
                $endocrinologistas = [
                    ["nome" => "Dra. Carla Souza", "foto" => "https://s3-sa-east-1.amazonaws.com/doctoralia.com.br/doctor/55a772/55a772a1163c770988386b86eb59a141_large.jpg", "portfolio" => "Distúrbios hormonais.", "instagram" => "https://www.instagram.com/dracarlasouza/", "linkedin" => "https://br.linkedin.com/in/carlasouzaphd?original_referer=https%3A%2F%2Fwww.google.com%2F"],
                    ["nome" => "Dr. Paulo Rezende", "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3igDyB1f3EVt4jQS1cSoZcLWHUM3YfXqQW0SISics6huco90hAcwJhqb8Py_o2PEv87c&usqp=CAU", "portfolio" => "Obesidade e tireoide.", "instagram" => "https://www.instagram.com/paulo_cesar_franco_rezende/", "linkedin" => "https://br.linkedin.com/in/paulo-tarso-de-jesus-229822123"],
                    ["nome" => "Dra. Helena Martins", "foto" => "https://s3-sa-east-1.amazonaws.com/doctoralia.com.br/doctor/73bd45/73bd451c81695dc8e0750d3a6abad127_large.jpg", "portfolio" => "Endocrinologia pediátrica.", "instagram" => "https://www.instagram.com/drahelena_martins/?hl=en", "linkedin" => "https://br.linkedin.com/in/dra-maria-helena-martins-93612874"],
                ];

                foreach ($endocrinologistas as $endo) {
                    echo "<div class='col-md-4 mb-4'>
                            <div class='card shadow-sm'>
                                <img src='{$endo['foto']}' class='card-img-top' alt='{$endo['nome']}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$endo['nome']}</h5>
                                    <p class='card-text'>{$endo['portfolio']}</p>
                                    <a href='{$endo['instagram']}' class='btn btn-primary btn-sm'>Instagram</a>
                                    <a href='{$endo['linkedin']}' class='btn btn-secondary btn-sm'>LinkedIn</a>
                                </div>
                            </div>
                        </div>";
                }
                ?>
            </div>
        </section>
    </main>

    <?php include "includes/rodape.php"; ?>
</body>

</html>
