<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Descrição</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="description" name="description" required  placeholder="Dscrição" value="{{ $protocol->description }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Solução</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="solution" name="solution" required  placeholder="Soluçao" value="{{ $protocol->solution }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Data de Abertura</label>
        <div class="col-sm-7">
            <input type="date" class="form-control" id="opening_date" name="opening_date" required  placeholder="data de Abertura" value="{{ $protocol->opening_date }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">valor</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="value" name="value" required  placeholder="Valor" value="{{ $protocol->value }}">
        </div>
    </div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Pago</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="paid" name="paid" required  placeholder="Pago" value="{{ $protocol->paid }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Usuário</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="user_id" name="user_id" required  placeholder="Usuário" value="{{ $protocol->user_id }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Área</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="area_id" name="area_id" required  placeholder="Área" value="{{ $protocol->area_id }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Status</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="status_id" name="status_id" required  placeholder="Status" value="{{ $protocol->status_id }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Tipo</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="type_id" name="type_id" required  placeholder="Tipo" value="{{ $protocol->type_id }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Prioridade</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="priority" name="priority" required  placeholder="Prioridade" value="{{ $protocol->priority }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
