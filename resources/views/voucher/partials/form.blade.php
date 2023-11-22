<div class="col-md-6">
    <label for="nome" class="form-label">Passeio</label>
    <p class="form-control">{{ $passeio->nome }}</p>
</div>

<div class="col-md-3">
    <label for="data_passeio" class="form-label">Data do Passeio</label>
    <input type="date" class="form-control" id="data_passeio" name="data_passeio" value="" required>
</div>

<div class="col-md-3">
    <label for="data_passeio" class="form-label">Hora do Embarque</label>
    <p class="form-control">{{ $passeio->hora_inicio }}</p>
</div>

<div class="col-md-6">
    <label for="observacao" class="form-contrl">Observação</label>
    <textarea class="form-control" name="observacao" id="observacao" cols="30"></textarea>
</div>

<div class="col-md-2">
    <label for="qtd_adulto">Adultos (qtd)</label>
    <input placeholder="Valor R${{ $passeio->valor_adulto }}" type="text" class="form-control calculavel" id="qtd_adulto" name="qtd_adulto" value="" required>
</div>

<div class="col-md-2">
    <label for="qtd_crianca">Crianças (qtd)</label>
    <input placeholder="Valor R${{ $passeio->valor_crianca }}" type="text" class="form-control calculavel" id="qtd_crianca" name="qtd_crianca" value="" required>
</div>

<div class="col-md-2">
    <label for="qtd_bebe">Bebês (qtd)</label>
    <input placeholder="Valor R${{ $passeio->valor_bebe }}" type="text" class="form-control calculavel" id="qtd_bebe" name="qtd_bebe" value="" required>
</div>

<div class="col-md-6">
    <label for="valor_passeio">Valor do Passeio</label>
    <p id="valor_passeio" class="form-control">R$ 0</p>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.calculavel').on('input', function () {
            // Atualizar o valor total quando houver uma alteração em qualquer input
            atualizarValorTotal();
        });
    });

    function atualizarValorTotal() {
        // Obter os valores dos inputs e somá-los
        var qtdAdulto = parseFloat($('#qtd_adulto').val()) || 0;
        var qtdCrianca = parseFloat($('#qtd_crianca').val()) || 0;
        var qtdBebe = parseFloat($('#qtd_bebe').val()) || 0;

        var total = (qtdAdulto * {{ $passeio->valor_adulto }}) + (qtdCrianca * {{ $passeio->valor_crianca }}) + (qtdBebe * {{ $passeio->valor_bebe }});

        // Atualizar o conteúdo da tag <p>
        $('#valor_passeio').text('R$ ' + total.toFixed(2));
    }
</script>



