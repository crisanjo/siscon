<div class="form-group row">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label required">Nome</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="name" name="name" required  placeholder="Nome do departamento, setor ou unidade" value="{{ $department->name}}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm" id="bt_salvar">Salvar</button>
    </div>
</div>
