@extends('layout.app', ['current' => 'produtos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Departamento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <a href="#dlgProdutos" data-toggle="modal"><button class="btn btn-sm btn-primary" role="button">Nova Produto</button></a>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formProduto" class="form-horizontal">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo Produto</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeProduto" class="controle-label">Nome do produto</label>
                            <div class="input-group">
                                <input type="text" name="nomeProduto" class="formControl" id="nomeProduto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="precoProduto" class="controle-label">Preco do produto</label>
                            <div class="input-group">
                                <input type="number" name="precoProduto" class="formControl" id="precoProduto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantidadeProduto" class="controle-label">Quantidade do produto</label>
                            <div class="input-group">
                                <input type="number" name="quantidadeProduto" class="formControl" id="quantidadeProduto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="departamentoProduto" class="controle-label">Departamrnto do produto</label>
                            <div class="input-group">
                                <select name="departamentoProduto" id=""></select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection