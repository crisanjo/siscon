<div class="form-group row">
    <div class="col-md-12">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $provider->name}}" required  class="form-control">
    </div> 
    <div class="col-md-6"> 
            <label for="name">Telefone:</label>
            <input type="text" id="phone" name="phone" value="{{ $provider->phone}}" required class="form-control">
    </div>
    <div class="col-md-6">
            <label for="name">Email:</label>
            <input type="email" id="email" name="email" value="{{ $provider->email}}" required class="form-control"> 
    </div>     
</div> 
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
