<h1 class="h2">Cadastro de Alunos</h1>
<hr>

<div class="container border">
<form method="post" action="cadastros.php?action=aluno"> 
    <div class="row  pt-4">
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputNome" class="sr-only" >Nome do Aluno:</label>
                    <input class="form-control" type="text" id="inputNome" placeholder="Nome do Aluno" autofocus required name="nome_aluno">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputRm" class="sr-only" >RM do Aluno:</label>
                    <input class="form-control" type="number" id="inputRm" placeholder="RM do Aluno" required name="rm_aluno">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputData" class="sr-only" >Data de nascimento do Aluno:</label>
                    <input class="form-control" type="date" id="inputData" placeholder="" required name="data_aluno">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputEscolaridade" class="sr-only" >Escolaridade do Aluno:</label>
                    <select class="custom-select" id="inputGroupSelect01" required name="escolaridade">
                        <option value="Ensino Fundamental(1ºano)" selected>Ensino Fundamental(1ºano)</option>
                        <option value="Ensino Fundamental(2ºano)">Ensino Fundamental(2ºano)</option>
                        <option value="Ensino Fundamental(3ºano)">Ensino Fundamental(3ºano)</option>
                        <option value="Ensino Fundamental(4ºano)">Ensino Fundamental(4ºano)</option>
                        <option value="Ensino Fundamental(5ºano)">Ensino Fundamental(5ºano)</option>
                        <option value="Ensino Fundamental(6ºano)">Ensino Fundamental(6ºano)</option>
                        <option value="Ensino Fundamental(7ºano)">Ensino Fundamental(7ºano)</option>
                        <option value="Ensino Fundamental(8ºano)">Ensino Fundamental(8ºano)</option>
                        <option value="Ensino Fundamental(9ºano)">Ensino Fundamental(9ºano)</option>
                        <option value="Ensino Médio(1ºano)">Ensino Médio(1ºano)</option>
                        <option value="Ensino Médio(2ºano)">Ensino Médio(2ºano)</option>
                        <option value="Ensino Médio(3ºano)">Ensino Médio(3ºano)</option>
                    </select>
                </div>
            </div>     
        
            <div class="container-fluid pb-4">
                <button class="btn btn-danger col-md-5 float-left pt-3 pb-3" onclick="alert('cancelado!')">Cancelar</button>
                <button class="btn btn-success col-md-5 float-right pt-3 pb-3">Cadastrar Aluno</button>
            </div>
        </div>
            
                
    </form>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">RM</th>
      <th scope="col">NOME</th>
      <th scope="col">DATA DE NASCIMENTO</th>
      <th scope="col">ESCOLARIDADE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>123123</td>
      <td>PAULO LEITE COSTA</td>
      <td>14/10/2001</td>
      <td>3° ANO DO ENSINO MÉDIO</td>
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>123123</td>
      <td>PAULO LEITE COSTA</td>
      <td>14/10/2001</td>
      <td>3° ANO DO ENSINO MÉDIO</td>
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>123123</td>
      <td>PAULO LEITE COSTA</td>
      <td>14/10/2001</td>
      <td>3° ANO DO ENSINO MÉDIO</td>
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>123123</td>
      <td>PAULO LEITE COSTA</td>
      <td>14/10/2001</td>
      <td>3° ANO DO ENSINO MÉDIO</td>
    </tr>
   
  </tbody>
</table>


</div>
