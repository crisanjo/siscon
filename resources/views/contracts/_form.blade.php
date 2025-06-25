<div class="form-group row">
    <div class="col-md-12">
            <label for="name">Valor:</label>
            <input type="text" id="value" name="value" value="{{ $contract->value}}" required  class="form-control">
    </div> 
    <div class="col-md-6"> 
            <label for="name">Data de início:</label>
            <input type="date" id="start_date" name="start_date" value="{{ $contract->start_date}}" required class="form-control">
    </div>
    <div class="col-md-6">
            <label for="name">Data de término:</label>
            <input type="date" id="end_date" name="end_date" value="{{ $contract->end_date}}" required class="form-control"> 
    </div>     
    <div class="col-md-6">
            <label for="name">Assinatura digital:</label>
            <input type="text" id="digital_signature" name="digital_signature" value="{{ $contract->digital_signature}}" required class="form-control"> 
    </div>     
    <div class="col-md-6">
            <label for="name">Provedor:</label>
            <select name="providers_id" required class="form-control">
                @foreach ($providers as $provider)
                        <option {{ $provider->id == $contract->providers_id ? 'selected' : '' }}  value="{{ $provider->id}}" >{{ $provider->name}}</option>
                @endforeach
            </select>
    </div>     
  
</div> 
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
