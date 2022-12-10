@if(isset($lista))
        @foreach($lista as $prod)
            <div class="col-3 mb-3 d-flex aling-items-stetch">
                <div class="card"> 
                        <img src="{{ asset($prod->foto)}}" alt="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">{{ $prod->nome }} - R$ {{ $prod->valor }} </h6>
                            <a href="{{ route ('adicionar_carrinho', ['idproduto' => $prod->id])}}" class="bnt btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                </div>
            </div>
    @endforeach
@endif 