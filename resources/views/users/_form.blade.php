<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Nome</label>
        <div class="col-sm-7">
            <input user="text" class="form-control" id="name" name="name" required  placeholder="Nome" value="{{ $user->name }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Telefone</label>
        <div class="col-sm-7">
            <input user="text" class="form-control" id="phone" name="phone" required  placeholder="Telefone" value="{{ $user->phone }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Whatsapp</label>
        <div class="col-sm-7">
            <input user="text" class="form-control" id="whatsapp" name="whatsapp" required  placeholder="Whatsapp" value="{{ $user->whatsapp }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="mb-12 row">
        <label for="name" class="col-sm-4 col-form-label required">Perfil</label>
        <div class="col-sm-7">
            <input user="text" class="form-control" id="profile_id" name="profile_id" required  placeholder="Perfil" value="{{ $user->profile_id }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button user="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
