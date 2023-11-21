<div class="col-md-6">
    <label for="nome" class="form-label">Nome Passeio</label>
    <input type="name" class="form-control" id="nome" name="nome" value="" required>
</div>

<div class="col-md-3">
    <label for="duracao" class="form-label">Duração do Passeio (min)</label>
    <input type="number" class="form-control" id="duracao" name="duracao" value="" required>
</div>

<div class="col-md-3">
    <label for="cidade" class="form-label">Cidade do Passeio</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value="" required>
</div>

<div class="col-md-6">
    <label for="descricao" class="form-label">Descrição Do Passeio</label>
    <textarea class="form-control" id="descricao" name="descricao" value="" cols="30" required></textarea>
</div>

<div class="col-md-2">
    <label for="valor_adulto" class="form-label">Valor Adulto</label>
    <input type="text" class="form-control" id="valor_adulto" name="valor_adulto" value="" required>
</div>

<div class="col-md-2">
    <label for="valor_crianca" class="form-label">Valor Criança</label>
    <input type="text" class="form-control" id="valor_crianca" name="valor_crianca" value="" required>
</div>

<div class="col-md-2">
    <label for="valor_bebe" class="form-label">Valor Bebe</label>
    <input type="text" class="form-control" id="valor_bebe" name="valor_bebe" value="" required>
</div>

<div class="col-md-6">
    <label for="img" class="form-label">Imagem do Passeio</label>
    <input type="file" class="form-control" id="img" name="img">
</div>

    <div class="col-md-6">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select" required>
            <option value="">--</option>
            <option value="on" >on</option>
            <option value="off" >off</option>
        </select>
    </div>