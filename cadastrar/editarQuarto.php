<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/cadastrarQuarto.css">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <title>Cadastrar Quarto</title>
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Cadastrar quarto</h2>
      <ul>
        <li><a href="cadastrarGerente.html">Cadastrar gerente</a></li>
        
        <li><a href="cadastrarRecep.html">Cadastrar recepcionista</a>
        </li>
        
        <li><a href="cadastrarHospede.html">Cadastrar hóspede</a></li>

        <li><a href="cadastrarQuarto.html">Cadastrar quarto</a></li>

        <li><a href="../php/ConsultarGerente.php">Consultar gerente</a></li>

        <li><a href="../php/ConsultarRecep.php">Consultar recepcionista</a></li>

        <li><a href="../php/ConsultarHospede.php">Consultar hóspede</a></li>

        <li><a href="../php/ConsultarQuarto.php">Consultar quarto</a></li>

        <li><a href="../Sair.php">Sair</a></li>
      </ul>
      <div class="social_media"> <a href="#"><i class="fa fa-facebook-f"></i></a> <a href="#"><i
            class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
    </div>

    <!-- Form -->

    <div class="section">
      <div class="container">
        <div class="row full-height justify-content-center">
          <div class="col-12 text-center align-self-center py-5">
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              <h6 class="mb-0 pb-3"><span>Editar quarto</span></h6>

              <label for="reg-log"></label>
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">

                  <div class="card-front">
                    <div class="center-wrap">
                      <div class="section text-center">

                        <?php include_once "../update_tables/editar_quarto.php"; ?>

                        <form action="../update_tables/editar_quarto_salvar.php" method="POST">
                            <input type="hidden" name="idQuarto" value="<?php echo $result['id_quarto'] ?>">

                          <div class="form-group mt-2">
                            <input type="text" name="tipo" class="form-style" placeholder="Tipo do quarto"
                              id="logquarto" autocomplete="off" value="<?= $result['tipo']; ?>">
                            <i class="input-icon uil uil-at"></i>
                          </div>

                          <div class="form-group mt-2">
                            <input type="text" name="tamanho" class="form-style" placeholder="Tamanho do quarto"
                              id="logquarto" autocomplete="off" value="<?= $result['tamanho_quarto']; ?>">
                            <i class="input-icon uil uil-at"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" name="andar" class="form-style" placeholder="Andar do quarto"
                              id="logandar" autocomplete="off" value="<?= $result['andar_quarto']; ?>">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" name="porta" class="form-style" placeholder="Número da porta"
                              id="logpass" autocomplete="off" value="<?= $result['numero_porta']; ?>">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>

                          <button class="btn mt-4" type="submit">Salvar</button>
                        </form>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"></script>

</body>

</html>