<div class="col-md-6">
    <label for="name" class="form-label">Nome</label>
    <input type="name" class="form-control" id="name" name="name" value="{{ $cliente->name }}" required>
</div>

<div class="col-md-6">
    <label for="data_nasci" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_nasci" name="data_nasci" value="{{ $cliente->data_nasci }}"
        required>
</div>

<div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
</div>

<div class="col-md-6">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="password" name="password" value="{{ $cliente->password ?? '' }}"
        required>
</div>

<div class="col-md-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}" required>
</div>

<div class="col-md-3">
    <label for="rg" class="form-label">RG</label>
    <input type="text" class="form-control" id="rg" name="rg" value="{{ $cliente->rg }}" required>
</div>

<div class="col-md-4">
    <label for="cidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cliente->cidade }}" required>
</div>

<div class="col-md-2">
    <label for="estado" class="form-label">UF</label>
    <input type="text" class="form-control" id="estado" name="estado" value="{{ $cliente->estado }}" maxlength="2" required>
</div>

<div class="col-md-6">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
</div>

<div class="col-md-6">
    <label for="nacionalidade_id" class="form-label">Nacionalidade</label>
    <select name="nacionalidade_id" id="nacionalidade_id" class="form-select" required>
        <option value=""></option>
        @foreach ($nacionalidades as $nacionalidade)
            <option value="{{ $nacionalidade->id }}"
                @if (isset($cliente->nacionalidade_id)) @selected($cliente->nacionalidade_id == $nacionalidade->id) @endif>
                {{ $nacionalidade->nacionalidade }}</option>
        @endforeach
    </select>
</div>
