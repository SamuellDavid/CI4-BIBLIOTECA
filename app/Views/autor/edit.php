<div class="container p-5">
    <?=form_open('Autor/salvar')?>
    <input value='<?=$autor['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome:</label>
        </div>
        <div class="col-10">
            <input value='<?=$autor['nome']?>'class='form-control' type="text" id='nome' name='nome'>
        </div>
    </div>
    <div class="row p-4">
        <div class="col form-group">
            <div class="btn-group w-100" role="group">
                <a href='http://localhost:8080/index.php/Aluno/index'class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </div>
    </div>
    <?=form_close()?>
</div>