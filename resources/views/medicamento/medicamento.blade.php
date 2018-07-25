@extends('layouts.system')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">


        <!-- START row -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if(isset($medicamento))
                <form class="panel panel-default" method="post" action="{{ route('medicamento.destroy', $medicamento->id) }}" data-parsley-validate>
                    {!! method_field('DELETE') !!}
                    @else
                    <form class="panel panel-default" method="post" action="{{ route('medicamento.store') }}" data-parsley-validate>
                        @endif
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="ico-aid mr5"></i> Medicamento: {{ $medicamento->nome }}</h3>
                        </div>               
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group"> 
                                        <div class="col-sm-12">
                                            @if(session('success-medicamento'))
                                            <div class="alert alert-{{ session('success-medicamento')['type'] }}">
                                                <center><p>{{ session('success-medicamento')['messages'] }}</p></center>
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Nome do Medicamento <span class="text-danger">*</span></label>
                                            <input readonly name="nome" type="text" value="{{ $medicamento->nome}}"  class="form-control" required>
                                            @if ($errors->has('nome'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                      

                                    </div>
                                    <div class="col-sm-12"><br>
                                        <label class="control-label">Forma de Medicamento <span class="text-danger">*</span></label>
                                        <select readonly name="forma_id" class="form-control" required>
                                            <option value="">Selecione uma forma</option>
                                            @foreach($formas as $forma)
                                            <option value="{{ $forma->id }}"
                                                    @if(isset($medicamento) && $forma->id == $medicamento->forma_id))
                                                    selected
                                                    @endif
                                                    >{{ $forma->nome }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('forma'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('forma') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12"><br>
                                            <label class="control-label">Descrição do Medicamento <span class="text-danger">*</span></label>
                                            <textarea readonly name="descricao" class="form-control" required rows="4" placeholder="Descrição do medicamento e indicações médicas para o seu uso.">  {{ $medicamento->descricao}}</textarea>
                                            @if ($errors->has('descricao'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descricao') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12"><br>
                                            <label class="control-label">Público Alvo <span class="text-danger">*</span></label>
                                            <textarea readonly name="publico" class="form-control" required rows="2" placeholder="Modo de conservação do medicamento">  {{ $medicamento->publico or old('publico')}}</textarea>
                                            @if ($errors->has('publico'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('publico') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12"><br>
                                            <label class="control-label">Modo de Conservação <span class="text-danger">*</span></label>
                                            <textarea readonly name="conservacao" class="form-control" required rows="2" placeholder="Modo de conservação do medicamento">  {{ $medicamento->conservacao or old('conservacao')}}</textarea>
                                            @if ($errors->has('conservacao'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('conservacao') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                    
                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="panel-footer">
                            <a href="{{ route('medicamento.edit', $medicamento->id) }}" class="btn btn-primary"><i class="ico-edit"></i> Editar</a>
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