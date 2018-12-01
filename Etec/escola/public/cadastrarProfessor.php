<?php
?>
<h1 class="h2">Cadastro de Professores</h1>
<hr>

<div class="container border">
<form method="post" action="cadastros.php?action=professor"> 
    <div class="row  pt-4">
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputNome" class="sr-only" >Nome do Professor:</label>
                    <input class="form-control" type="text" id="inputNome" placeholder="Nome do Professor" autofocus required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputEscolaridade" class="sr-only" >Matéria do Professor:</label>
                    <select class="custom-select" id="inputGroupSelect01" required>
                        <option value="1" selected>Matemática</option>
                        <option value="2">Português</option>
                        <option value="3">Geografia</option>
                        <option value="4">Biológia</option>
                        <option value="5">Redação</option>
                        <option value="6">História</option>
                        <option value="7">Inglês</option>
                        <option value="8">Física</option>
                        <option value="9">Química</option>
                        <option value="10">Educação Física</option>
                        <option value="11">Informática</option>
                    </select>
                </div>
            </div>     
        
            <div class="container-fluid pb-4">
                <button class="btn btn-danger col-md-5 float-left pt-3 pb-3">Cancelar</button>
                <button class="btn btn-success col-md-5 float-right pt-3 pb-3">Cadastrar Professor</button>
            </div>
        </div>
            
                
    </form>
</div>
