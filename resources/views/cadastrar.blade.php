@extends("layout")
@section("scriptjs")
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
        $("#cpf").mask("000.000.000-00")
        $("#cep").mask("00000-000")
    }
    )
</script>
@endsection
@section("conteudo")

    <div class="col-12 mb-3">
        <h2>Cadastrar Cliente</h2>
    </div>
    
    <form action="{{route ('cadastrar_cliente')}}" method="post">
        @csrf
            <div class="row">
                <div class="col-6"> 
                    <div class="form-group">
                        Nome: <input type="text" name="nome" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        E-mail: <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        CPF: <input id="cpf" type="text" name="cpf" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Senha: <input type="password" name="passaword" class="form-control">
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        Endereço: <input type="text" name="endereco" class="form-control">
                    </div>                
                </div>
                <div class="col-1">
                    <div class="form-group">
                        Numero: <input type="text" name="numero" class="form-control">
                    </div>                
                </div>
                <div class="col-3">
                    <div class="form-group">
                        Complemento: <input type="text" name="complemento" class="form-control">
                    </div>                
                </div>
                <div class="col-4">
                    <div class="form-group">
                        Cidade: <input type="text" name="cidade" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        Cep: <input id="cep" type="text" name="cep" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        Estado: <input type="text" name="estado" class="form-control">
                    </div>
                </div>
            </div>
                <input type="submit" value="cadastrar" class="btn btn-success btn-sm">
        </div>

    </form>
@endsection