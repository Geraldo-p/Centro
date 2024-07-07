<form>
    <div class="row profile-row">
        <div class="col-md-8 col-lg-12">
            <h2>Nova Categoria</h2>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group mb-3"><label class="form-label" for="nome">Descrição da
                            Categoria</label><input class="form-control" type="text" name="nome"></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group mb-3"><label class="form-label" for="familia">Família</label><select
                            class="form-select" name="familia">
                            <optgroup label="Selecione a Familia da Categoria">
                                <option value="Curso">Curso</option>
                                <option value="Eletrônicos">Eletrônicos</option>
                                <option value="Livros, Papelaria e Escritório">Livros, Papelaria e Escritório
                                </option>
                                <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="form-group mb-3"><label class="form-label" for="descricao">Observações</label><textarea
                    class="form-control" name="descricao"></textarea></div>
            <hr>
            <div class="row">
                <div class="col-md-12 content-right"><button class="btn btn-primary form-btn"
                        type="submit">Guardar</button><a class="btn btn-danger form-btn" role="button"
                        href="#">Cancelar</a></div>
            </div>
        </div>
    </div>
</form>
