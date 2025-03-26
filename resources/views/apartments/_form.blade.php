<div class="form-group row">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label required">Descrição</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="description" name="description" required  placeholder="Descrição" value="{{ $apartment->description}}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label required">Descrição</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="user_id" name="user_id" required  placeholder="usuário" value="{{ $apartment->user_id}}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm" id="bt_salvar">Salvar</button>
    </div>
</div>
