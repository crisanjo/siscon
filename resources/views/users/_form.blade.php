<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Descrição</label>
        <div class="col-sm-7">
            <input user="text" class="form-control" id="description" name="description" required  placeholder="Descrição" value="{{ $user->description }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Emergencia</label>
        <div class="col-sm-7">
            <input user="text" class="form-control" id="emergency" name="emergency" required  placeholder="emergency" value="{{ $user->emergency }}">
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button user="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
