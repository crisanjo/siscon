<div class="form-group row">
    <div class="col-md-12">
            <label for="name">Reajuste:</label>
            <input type="text" id="readjustment" name="readjustment" value="{{ $readjustment->readjustment}}" required  class="form-control">
    </div> 
     <div class="col-md-6">
            <label for="name">Contrato:</label>
            <select name="contrato_id" required class="form-control">
                @foreach ($contracts as $contract)
                    <option {{ $contract->id == $readjustment->contract_id ? 'selected' : ''}}  value="{{ $contract->contract_id}}">{{ $contract->id. '-' . $contract->value}} </option>
                @endforeach
            </select>

    </div>     
   </div> 
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
