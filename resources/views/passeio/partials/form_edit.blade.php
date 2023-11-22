<div class="col-md-6">
    <label for="nome" class="form-label">Nome Passeio</label>
    <input type="name" class="form-control" id="nome" name="nome" value="{{ $passeio->nome ?? '' }}" required>
</div>

<div class="col-md-4">
    <label for="cidade" class="form-label">Cidade do Passeio</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $passeio->cidade ?? '' }}"
        required>
</div>

<div class="col-md-6">
    <label for="descricao" class="form-label">Descrição Do Passeio</label>
    <textarea class="form-control" id="descricao" name="descricao" value="{{ $passeio->descricao }}" cols="30"
        required>{{ $passeio->descricao ?? '' }}</textarea>
</div>

<div class="col-md-2">
    <label for="valor_adulto" class="form-label">Valor Adulto</label>
    <input type="text" class="form-control" id="valor_adulto" name="valor_adulto"
        value="{{ $passeio->valor_adulto ?? '' }}" required>
</div>

<div class="col-md-2">
    <label for="valor_crianca" class="form-label">Valor Criança</label>
    <input type="text" class="form-control" id="valor_crianca" name="valor_crianca"
        value="{{ $passeio->valor_crianca ?? '' }}" required>
</div>

<div class="col-md-2">
    <label for="valor_bebe" class="form-label">Valor Bebe</label>
    <input type="text" class="form-control" id="valor_bebe" name="valor_bebe"
        value="{{ $passeio->valor_bebe ?? '' }}" required>
</div>

<div class="col-md-6">
    <label for="img" class="form-label">Imagem do Passeio</label>
    <input type="file" class="form-control" id="img" name="img">
</div>

<div class="col-md-2">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-select" required>
        <option value="">--</option>
        <option value="on" @if (isset($passeio->status)) @selected($passeio->status == 'on') @endif>on</option>
        <option value="off" @if (isset($passeio->status)) @selected($passeio->status == 'off') @endif>off</option>
    </select>
</div>

<div class="col-md-2">
    <label for="hora_inicio" class="form-label">Hora Inicio</label>
    <input type="text" class="form-control" id="hora_inicio" name="hora_inicio" value="{{ $passeio->hora_inicio ?? '' }}" required>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#hora_inicio').inputmask('99:99');
    });
</script>

<div class="col-md-2">
    <label for="hora_fim" class="form-label">Hora Fim</label>
    <input type="text" class="form-control" id="hora_fim" name="hora_fim" value="{{ $passeio->hora_fim ?? '' }}" required>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#hora_fim').inputmask('99:99');
    });
</script>
