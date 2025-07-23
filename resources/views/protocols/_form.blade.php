<div class="container">
    <form>
        <!-- Descrição -->
        <div class="mb-3">
            <label for="description" class="form-label">Descrição:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required placeholder="Descrição">{{ $protocol->description }}</textarea>
        </div>

        <!-- Solução -->
        <div class="mb-3">
            <label for="solution" class="form-label">Solução:</label>
            <input type="text" class="form-control" id="solution" name="solution" required placeholder="Solução" value="{{ $protocol->solution }}">
        </div>

        <!-- Data de Abertura -->
        <div class="mb-3">
            <label for="opening_date" class="form-label">Data de Abertura:</label>
            <input type="date" class="form-control" id="opening_date" name="opening_date" required value="{{ $protocol->opening_date }}">
        </div>

        <!-- Valor -->
        <div class="mb-3">
            <label for="value" class="form-label">Valor:</label>
            <input type="text" class="form-control" id="value" name="value" required placeholder="Valor" value="{{ $protocol->value }}">
        </div>

        <!-- Pago -->
        <div class="mb-3">
            <label for="paid" class="form-label">Pago:</label>
            <select class="form-select" id="paid" name="paid" required>
                <option value="" disabled {{ is_null($protocol->paid) ? 'selected' : '' }}>Selecione</option>
                <option value="1" {{ $protocol->paid == 1 ? 'selected' : '' }}>SIM</option>
                <option value="0" {{ $protocol->paid == 0 ? 'selected' : '' }}>NÃO</option>
            </select>
        </div>

        <!-- Usuário -->
        <div class="mb-3">
            <label for="user_id" class="form-label">Usuário:</label>
            <input type="text" class="form-control" id="user_id" name="user_id" required placeholder="Usuário" value="{{ $protocol->user_id }}">
        </div>

        <!-- Área -->
        <div class="mb-3">
            <label for="area_id" class="form-label">Área:</label>
            <select name="area_id" id="area_id" class="form-control" required>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}" {{ $area->id == $protocol->area_id ? 'selected' : '' }}>{{ $area->description }}</option>
                @endforeach
            </select>
        </div>
        <!-- Status -->
        <label for="status_id" class="form-label">Status:</label>
            <select name="status_id" id="status_id" class="form-control" required>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" {{ $status->id == $protocol->status_id ? 'selected' : '' }}>{{ $status->description }}</option>
                @endforeach
            </select>
        <!-- Tipo -->
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo:</label>
            <input type="text" class="form-control" id="type_id" name="type_id" required placeholder="Tipo" value="{{ $protocol->type_id }}">
        </div>

        <!-- Prioridade -->
        <div class="mb-4">
            <label for="priority" class="form-label">Prioridade:</label>
            <input type="text" class="form-control" id="priority" name="priority" required placeholder="Prioridade" value="{{ $protocol->priority }}">
        </div>

        <!-- Botão de envio -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
