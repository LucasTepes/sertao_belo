<div class="col-md-6" hidden>
    <label for="nome" class="form-label">Passeio</label>
    <input type="text" class="form-control" id="passeio_id" name="passeio_id" value="{{ $voucher->passeio->id }}"
        readonly>
</div>

<div class="col-md-6">
    <label for="nome" class="form-label">Passeio</label>
    <input type="text" class="form-control" id="passeio_id" name="passeio_id" value="{{ $voucher->passeio->nome }}"
        readonly disabled>
</div>

<div class="col-md-3">
    <label for="data_passeio" class="form-label">Data do Passeio</label>
    <input type="date" class="form-control" id="data_passeio" name="data_passeio"
        value="{{ $voucher->data_passeio }}" required>
    <p id="error-message" class="error-message"></p>
</div>

<script>
    document.getElementById('data_passeio').addEventListener('change', function() {
        var selectedDate = new Date(this.value);
        var currentDate = new Date();

        if (selectedDate < currentDate) {
            document.getElementById('error-message').innerText = 'A data não pode ser anterior ao dia atual.';
            this.setCustomValidity('A data não pode ser anterior ao dia atual.');
        } else {
            document.getElementById('error-message').innerText = '';
            this.setCustomValidity('');
        }
    });
</script>

<div class="col-md-3">
    <label for="data_passeio" class="form-label">Hora do Embarque</label>
    <p class="form-control">{{ $voucher->passeio->hora_inicio }}</p>
</div>

<div class="col-md-6">
    <label for="observacao" class="form-contrl">Observação</label>
    <textarea class="form-control" name="observacao" id="observacao" cols="30" value="{{ $voucher->observacao }}">{{ $voucher->observacao ?? '' }}</textarea>
</div>

<div class="col-md-2">
    <label for="qtd_adulto">Adultos</label>
    <input placeholder="Quantidade" type="number" class="form-control calculavel" id="qtd_adulto" name="qtd_adulto"
        value="{{ $voucher->qtd_adulto }}" required>
</div>

<div class="col-md-2">
    <label for="qtd_crianca">Crianças</label>
    <input placeholder="Quantidade" type="number" class="form-control calculavel" id="qtd_crianca" name="qtd_crianca"
        value="{{ $voucher->qtd_crinca }}" required>
</div>

<div class="col-md-2">
    <label for="qtd_bebe">Bebês</label>
    <input placeholder="Quantidade" type="number" class="form-control calculavel" id="qtd_bebe" name="qtd_bebe"
        value="{{ $voucher->qtd_bebe }}" required>
</div>

<div class="col-md-6">
    <label for="valor_passeio">Valor do Passeio (R$)</label>
    <input type="number" id="valor_passeio" name="valor_passeio" class="form-control" value="" readonly>
</div>

<div class="col-md-6">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Adulto</th>
                <th scope="col">Criança</th>
                <th scope="col">Bebe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>R${{ $voucher->passeio->valor_adulto }}</td>
                <td>R${{ $voucher->passeio->valor_crianca }}</td>
                <td>R${{ $voucher->passeio->valor_crianca }}</td>
            </tr>
        </tbody>
    </table>
</div>

@can('type-user')
<div class="col-md-3">
    <label for="status">Status</label>
    <select class="form-select" name="status" id="status">
        <option value="aberto" @if (isset($voucher->status)) @selected($voucher->status == 'aberto') @endif>Aberto</option>
        <option value="rejeitado" @if (isset($voucher->status)) @selected($voucher->status == 'rejeitado') @endif>Rejeitado</option>
        <option value="aprovado" @if (isset($voucher->status)) @selected($voucher->status == 'aprovado') @endif>Aprovado</option>
        <option value="observacao" @if (isset($voucher->status)) @selected($voucher->status == 'observacao') @endif>Obervação</option>
    </select>
</div>
@endcan

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.calculavel').on('input', function() {
            // Atualizar o valor total quando houver uma alteração em qualquer input
            atualizarValorTotal();
        });
    });

    function atualizarValorTotal() {
        // Obter os valores dos inputs e somá-los
        var qtdAdulto = parseFloat($('#qtd_adulto').val()) || 0;
        var qtdCrianca = parseFloat($('#qtd_crinca').val()) || 0;
        var qtdBebe = parseFloat($('#qtd_bebe').val()) || 0;

        var total = (qtdAdulto * {{ $voucher->passeio->valor_adulto }}) + (qtdCrianca *
            {{ $voucher->passeio->valor_crianca }}) + (
            qtdBebe * {{ $voucher->passeio->valor_bebe }});

        // Atualizar o atributo value da tag <input>
        $('#valor_passeio').val(total.toFixed(2));
    }
</script>
