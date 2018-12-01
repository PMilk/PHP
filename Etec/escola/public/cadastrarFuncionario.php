<h1 class="h2">Cadastro de Funcionários</h1>
<hr>

<div class="container border">
<form> 
    <div class="row  pt-4">
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputNome" class="sr-only" >Nome do Funcionário:</label>
                    <input class="form-control" type="text" id="inputNome" placeholder="Nome do Funcionário" autofocus required> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputEscolaridade" class="sr-only" >Cargo do Funcionário:</label>
                    <select class="custom-select" id="inputGroupSelect01" required>
                        
                        <option value="1" selected>Faxineiro(a)</option>
                        <option value="2">Diretor(a)</option>
                        <option value="3">Cordenador(a)</option>
                        <option value="4">Atendente</option>
                    </select>
                </div>
            </div>     
        
            <div class="container-fluid pb-4">
                <button class="btn btn-danger col-md-5 float-left pt-3 pb-3">Cancelar</button>
                <button class="btn btn-success col-md-5 float-right pt-3 pb-3">Cadastrar Funcionário</button>
            </div>
        </div>
            
                
    </form>
</div>
