

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Página Inicial</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Escola dos Universos</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair do sistema</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <button class="nav-link active" id="menu">
                  Menu Principal 
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="Aluno">
                  
                  Cadastrar Aluno
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="Prof">
                  <span data-feather="file"></span>
                  Cadastrar Professor
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="Func">
                  <span data-feather="shopping-cart"></span>
                  Cadastrar Funcionário
                </button>
              </li>
            </ul>
          </div>
        </nav>

        <main id="conteudo" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
       
        </main>
      </div>
    </div>
</body>
</html>
<script>
 $("#Aluno").click(function(){
   $.get("cadastrarAluno.php", function(data,status){
    $("#conteudo").html(data)
    $("#Prof").removeClass('active');
    $("#menu").removeClass('active');
    $("#Func").removeClass('active');
    $("#Aluno").toggleClass('active');
   })
  
 });

  $("#Prof").click(function(){
   $.get("cadastrarProfessor.php", function(data,status){
    $("#conteudo").html(data)
    $("#Aluno").removeClass('active');
    $("#menu").removeClass('active');
    $("#Func").removeClass('active');
    $("#Prof").toggleClass('active');
   })
  
 });

   $("#Func").click(function(){
   $.get("cadastrarFuncionario.php", function(data,status){
    $("#conteudo").html(data)
    $("#Aluno").removeClass('active');
    $("#menu").removeClass('active');
    $("#Prof").removeClass('active');
    $("#Func").toggleClass('active');
   })
  
 });

   $("#menu").click(function(){
   $.get("menu.php", function(data,status){
    $("#conteudo").html(data)
    $("#Aluno").removeClass('active');
    $("#Prof").removeClass('active');
    $("#Func").removeClass('active');
    $("#menu").toggleClass('active');
   })
  
 });

</script>

