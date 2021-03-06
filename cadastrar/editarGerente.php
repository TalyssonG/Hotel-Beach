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
  <link rel="stylesheet" href="../css/cadastrarHospede.css">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <title>Cadastrar Gerente</title>
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Cadastrar Gerente</h2>
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
              <h6 class="mb-0 pb-3"><span>Editar gerente</span></h6>

              <label for="reg-log"></label>
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">

                  <div class="card-front">
                    <div class="center-wrap">
                      <div class="section text-center">

                        <?php include_once "../update_tables/editar_gerente.php"; ?>

                        <form action="../update_tables/editar_gerente_salvar.php" method="POST">
                            <input type="hidden" name="idGerente" value="<?= $result['id_gerente']; ?>">

                          <div class="form-group">
                            <input type="text" name="nome" class="form-style" placeholder="Seu nome completo"
                              id="logname" autocomplete="off" value="<?= $result['nome']; ?>">
                            <i class="input-icon uil uil-user"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="email" name="email" class="form-style" placeholder="Seu Email" id="logemail"
                              autocomplete="off" value="<?= $result['email']; ?>">
                            <i class="input-icon uil uil-at"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" name="senha" class="form-style" placeholder="Crie uma senha" id="logpass"
                              autocomplete="off" value="<?= $result['senha']; ?>">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" name="telefone" class="form-style" placeholder="Telefone" id="logpass"
                              autocomplete="off" value="<?= $result['telefone']; ?>">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" name="cpf" class="form-style" placeholder="CPF: 000.000.000-00"
                              id="logpass" autocomplete="off" value="<?= $result['cpf']; ?>">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>

                          <div class="form-group mt-2">
                            <input type="text" name="endereco" class="form-style" placeholder="Endereço" id="logpass"
                              autocomplete="off" value="<?= $result['endereco']; ?>">
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