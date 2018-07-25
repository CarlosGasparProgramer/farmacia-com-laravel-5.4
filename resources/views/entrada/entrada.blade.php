@extends('layouts.system')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">


        <!-- START row -->
        <div class="row">
            <br><br>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if(isset($entradas))
                <form class="panel panel-default" method="post" action="{{ route('entrada.destroy', $entradas->id) }}" data-parsley-validate>
                    {!! method_field('DELETE') !!}
                    @else
                <form class="panel panel-default" method="post" action="{{ route('entrada.store') }}" data-parsley-validate>
                 @endif
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="ico-dashboard2 mr5"></i> {{ $header }}</h3>
                    </div>               
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group"> 
                                    <div class="col-sm-12">
                                        @if(session('success-entrada'))
                                        <div class="alert alert-{{ session('success-entrada')['type'] }}">
                                            <center><p>{{ session('success-entrada')['messages'] }}</p></center>
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label class="control-label">Medicamento e Forma <span class="text-danger">*</span></label>
                                        <select readonly name="medicamento_id" class="form-control">
                                            @foreach($medicamentos as $medicamento)
                                            <option value="{{$medicamento->id}}"
                                                    @if(isset($entradas->medicamento_id) && $medicamento->id == $entradas->medicamento_id))
                                                    selected
                                                    @endif>
                                                {{$medicamento->nome}} - {{$medicamento->nome_forma}} - {{$medicamento->medida}}
                                            </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                        @endif
                                    </div>                                       

                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Tamanho <span class="text-danger">*</span></label>
                                    <input readonly name="tamanho" type="number" value="{{$entradas->tamanho or old('tamanho')}}" class="form-control" required>
                                    @if ($errors->has('tamanho'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tamanho') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Data de Expiração <span class="text-danger">*</span></label>
                                    <input readonly name="data_expiracao" type="date" value="{{$entradas->data_expiracao or old('data_expiracao')}}" class="form-control" required>
                                    @if ($errors->has('data_expiracao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_expiracao') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Data da Entrada <span class="text-danger">*</span></label>
                                    <input readonly name="data_entrada" type="date" value="{{$entradas->data_entrada or old('medida')}}" class="form-control" required>
                                    @if ($errors->has('medida'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medida') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Quantidade <span class="text-danger">*</span></label>
                                    <input readonly name="quant" type="number" value="{{$entradas->quant or old('quant')}}" class="form-control" required>
                                    @if ($errors->has('quant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quant') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Preço Unitário de Compra <span class="text-danger">*</span></label>
                                    <input readonly name="preco_compra" type="number" value="{{$entradas->preco_compra or old('preco_compra')}}" class="form-control" required>
                                    @if ($errors->has('preco_compra'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('preco_compra') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Preço Unitário de Venda <span class="text-danger">*</span></label>
                                    <input readonly name="preco_venda" type="number" value="{{$entradas->preco_venda or old('preco_venda')}}" class="form-control" required>
                                    @if ($errors->has('preco_venda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('preco_venda') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('entrada.edit', $entradas->id) }}" class="btn btn-primary"><i class="ico-edit"></i> Editar</a>
                        <button type="submit" class="btn btn-danger"><i class="ico-trash"></i> Eliminar</button>
                    </div>
                </form>
            </div>


        </div>
        <!--/ END row -->
    </div>
    <!--/ END Template Container -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<!--/ END Template Main -->
@endsection