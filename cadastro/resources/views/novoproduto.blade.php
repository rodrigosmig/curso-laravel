@extends('layout.app', ['current' => 'produtos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Nome do Produto">
                </div>

                <div class="form-group">
                    <label for="estoqueProduto">Estoque do Produto</label>
                    <input type="number" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Quantidade em Estoque">
                </div>

                <div class="form-group">
                    <label for="precoProduto">Preço do Produto</label>
                    <input type="number" class="form-control" name="precoProduto" id="precoProduto" placeholder="Preço do Produto">
                </div>

                <div class="form-group">
                    <label for="categoriaProduto">Categoria do Produto</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach                        
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection