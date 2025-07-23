<div class="form-group row">
    <div class="col-md-6"> 
            <label for="name">Data de início:</label>
            <input type="date" id="start_date" name="start_date" value="{{ $visit->start_date}}" required class="form-control">
    </div>
    <div class="col-md-6">
            <label for="name">Data de término:</label>
            <input type="date" id="end_date" name="end_date" value="{{ $visit->end_date}}" required class="form-control"> 
    </div>     
    <div class="rows="4" cols="50">
            <label for="name">Descrição:</label>
            <input type="text" id="description" name="descripton" value="{{ $visit->description}}" required class="form-control"> 
    </div>     
    <div class="col-md-6">
            <label for="name">Protocolo:</label>
            <select name="protocol_id" required class="form-control">
                @foreach ($protocols as $protocol)
                        <option {{ $protocol->id == $visit->protocol_id ? 'selected' : '' }}  value="{{ $protocol->id}}" >{{ $protocol->name}}</option>
                @endforeach
            </select>
    </div>     
  
</div> 
<div class="form-group row">
    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </div>
</div>
