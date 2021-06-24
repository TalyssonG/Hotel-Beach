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
  <link rel="stylesheet" href="../css/home.css">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>Hotel Beach - Consultar gerente</title>
</head>

<body>
  <div class="grid-container">
    <div class="wrapper">
      <div class="sidebar">
        <h2>Consultar Gerente</h2>
        <ul>
          <li><a href="../index.html">Página inicial</a></li>
          <li><a href="../cadastrar/cadastrarGerente.html">Cadastrar gerente</a></li>
          <li><a href="../cadastrar/cadastrarHospede.html">Cadastrar hóspede</a></li>
          <li><a href="../cadastrar/cadastrarRecep.html">Cadastrar recepcionista</a></li>
          <li><a href="../cadastrar/cadastrarQuarto.html">Cadastrar quarto</a></li>

<li><a href="ConsultarQuarto.php">Consultar quarto</a></li>

          <li><a href="ConsultarHospede.php">Consultar hóspede</a></li>
          
        </ul>
        <div class="social_media"> <a href="#"><i class="fa fa-facebook-f"></i></a> <a href="#"><i
              class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
      </div>
    </div>

    <div class="content">

      <h2>Consultar gerente:</h2>

      <form action="#">
        <div class="mb-3">
         
          <div class="input-group mb-3">
              <input type="text" class="form-control" id="nome" placeholder="Nome do gerente">
              <span class="input-group-text" id="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
              
         <?php
          session_start();
          include_once("ListarGerente.php"); ?>
       
          </div>
        </div>
      </form>
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