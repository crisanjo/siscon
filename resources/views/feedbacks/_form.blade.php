<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Descrição</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="description" name="description" required  placeholder="Descrição" value="{{ $feedback->description}}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="user_id" class="col-sm-4 col-form-label required">User ID</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="user_id" name="user_id" required  placeholder="User" value="{{ $feedback->user_id}}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
