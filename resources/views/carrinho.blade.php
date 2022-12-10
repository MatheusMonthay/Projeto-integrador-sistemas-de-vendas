@extends("layout")
@section("conteudo")
    <h3>Carrinho</h3>
    @if(isset($cart) && count($cart)>0)
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th></th>
                </tr>

            </thead>
            <tbody>
                @foreach($cart as $indice => $p)
                <tr>
                    <td>{{ $p->nome}}</td>
                    <td><img src="{{ asset($p->foto)}}" height="50"></td>
                    <td>{{ $p->valor}}</td>
                    <td>{{ $p->descricao}}</td>
                    <td>
                        <a href="{{route('carrinho_excluir', ['indice'=>$indice])}}" class="btn btn-danger btn-sm">Remover</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum item no carrinho</p>
    @endif
@endsection