<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Descrição</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="description" name="description" required  placeholder="Descrição" value="{{ $area->description}}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
