<h1 class="h2">Cadastro de Alunos</h1>
<hr>

<div class="container border">
<form> 
    <div class="row  pt-4">
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputNome" class="sr-only" >Nome do Aluno:</label>
                    <input class="form-control" type="text" id="inputNome" placeholder="Nome do Aluno" autofocus required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputRm" class="sr-only" >RM do Aluno:</label>
                    <input class="form-control" type="number" id="inputRm" placeholder="RM do Aluno" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputData" class="sr-only" >Data de nascimento do Aluno:</label>
                    <input class="form-control" type="date" id="inputData" placeholder="" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputEscolaridade" class="sr-only" >Escolaridade do Aluno:</label>
                    <select class="custom-select" id="inputGroupSelect01" required>
                        <option value="1" selected>Ensino Fundamental(1ºano)</option>
                        <option value="2">Ensino Fundamental(2ºano)</option>
                        <option value="3">Ensino Fundamental(3ºano)</option>
                        <option value="4">Ensino Fundamental(4ºano)</option>
                        <option value="5">Ensino Fundamental(5ºano)</option>
                        <option value="6">Ensino Fundamental(6ºano)</option>
                        <option value="7">Ensino Fundamental(7ºano)</option>
                        <option value="8">Ensino Fundamental(8ºano)</option>
                        <option value="9">Ensino Fundamental(9ºano)</option>
                        <option value="10">Ensino Médio(1ºano)</option>
                        <option value="11">Ensino Médio(2ºano)</option>
                        <option value="12">Ensino Médio(3ºano)</option>
                    </select>
                </div>
            </div>     
        
            <div class="container-fluid pb-4">
                <button class="btn btn-danger col-md-5 float-left pt-3 pb-3">Cancelar</button>
                <button class="btn btn-success col-md-5 float-right pt-3 pb-3">Cadastrar Aluno</button>
            </div>
        </div>
            
                
    </form>
</div>
