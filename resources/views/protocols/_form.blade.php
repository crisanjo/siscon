<form action="edu.php" method="post">
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="Descrição">Descrição: </label>
            <div class="col-sm-12">
            <textarea name="description" class="form-control id="description" rows="4" cols="50" required placeholder="Descrição" value="{{ $protocol->description }}"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="name" class="col-sm-6 col-form-label required">Solução</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="solution" name="solution" required  placeholder="Soluçao" value="{{ $protocol->solution }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-8 row">
            <label for="name" class="col-sm-6 col-form-label required">Data de Abertura</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="opening_date" name="opening_date" required  placeholder="data de Abertura" value="{{ $protocol->opening_date }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="name" class="col-sm-6 col-form-label required">valor</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="value" name="value" required  placeholder="Valor" value="{{ $protocol->value }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="name" class="col-sm-12 col-form-label required">Usuário</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="user_id" name="user_id" required  placeholder="Usuário" value="{{ $protocol->user_id }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="name" class="col-sm-12 col-form-label required">Área</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="area_id" name="area_id" required  placeholder="Área" value="{{ $protocol->area_id }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="name" class="col-sm-12 col-form-label required">Status</label>
            <div class="col-sm-20">
                <input type="text" class="form-control" id="status_id" name="status_id" required  placeholder="Status" value="{{ $protocol->status_id }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-12 row">
            <label for="name" class="col-sm-12 col-form-label required">Tipo</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="type_id" name="type_id" required  placeholder="Tipo" value="{{ $protocol->type_id }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-4 row">
            <label for="priority" class="col-sm-8 col-form-label">Prioridade: </label>
                <select class="form-select" id="priority" name="priority" required  placeholder="Prioridade" >
                    <option value="" disabled selected>Selecione</option>
                    <option value="true">SIM</option>
                    <option value="false">NÃO</option>
                </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="mb-4 row">
            <label for="paid" class="form-label">Pago:</label>
                <select class="form-select" id="paid" name="paid" required placeholder="Pago">
                    <option value="" disabled selected>Selecione</option>
                    <option value="true">SIM</option>
                    <option value="false">NÃO</option>
                </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="d-grid gap-2 col-2 mx-auto">
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
    </div>
</form>