<div class="col-md-6">
    <label for="name" class="form-label">Nome</label>
    <input type="name" class="form-control" id="name" name="name" value="" required>
</div>

<div class="col-md-6">
    <label for="data_nasci" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_nasci" name="data_nasci" value="" required>
</div>

<div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="" required>
</div>

<div class="col-md-6">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="password" name="password" value="" required>
</div>

<div class="col-md-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value="" required>
</div>

<div class="col-md-3">
    <label for="rg" class="form-label">RG</label>
    <input type="text" class="form-control" id="rg" name="rg" value="" required>
</div>

<div class="col-md-4">
    <label for="cidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value="" required>
</div>

<div class="col-md-2">
    <label for="estado" class="form-label">UF</label>
    <input type="text" class="form-control" id="estado" name="estado" value="" maxlength="2" required>
</div>

<div class="col-md-6">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="" required>
</div>

<div class="col-md-6">
    <label for="nacionalidade_id" class="form-label">Nacionalidade</label>
    <select name="nacionalidade_id" id="nacionalidade_id" class="form-select" required>
        <option value=""></option>
        @foreach ($nacionalidades as $nacionalidade)
            <option value="{{ $nacionalidade->id }}">{{ $nacionalidade->nacionalidade }}</option>
        @endforeach
    </select>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
    $(document).ready(function () {

        $('#cpf').mask('000.000.000-00', { reverse: false });
        $('#rg').mask('00.000.000-0', { reverse: false });
        $('#telefone').mask('(00) 00000-0000', { reverse: false });
    });
</script>
