<div class="panel {{$pessoa->sexo == 'M' ? 'panel-info' : 'panel-danger'}}">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == 'M')
             <i class="fa fa-male"></i>
            @else
             <i class="fa fa-female"></i>
            @endif
            {{$pessoa->apelido}}
            <span class="pull-right">
                <a href="{{route('pessoa.edit',['id' => $pessoa->id])}}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="{{route('pessoa.delete',['id' => $pessoa->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar">
                    <i class="fa fa-minus-circle"></i>
                </a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h3>
            {{$pessoa->nome}}
        </h3>
        @include('partials.telefones', ['telefones' => $pessoa->telefones])
    </div>
</div>