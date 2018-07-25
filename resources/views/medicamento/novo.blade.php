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
                @if(isset($med))
                <form class="panel panel-default" method="post" action="{{ route('medicamento.update', $med->id) }}" data-parsley-validate>
                    {!! method_field('PUT') !!}
                    @else
                    <form class="panel panel-default" method="post" action="{{ route('medicamento.store') }}" data-parsley-validate>
                        @endif
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="ico-dashboard2 mr5"></i> {{ $header or "Novo Medicamento" }}</h3>
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
                                            <input name="nome" type="text" value="{{ $med->nome or old('nome')}}"  class="form-control" required>
                                            @if ($errors->has('nome'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                      

                                    </div>
                                    <div class="col-sm-12"><br>
                                        <label class="control-label">Forma de Medicamento <span class="text-danger">*</span></label>
                                        <select name="forma_id" class="form-control" required>
                                            <option value="">Selecione uma forma</option>
                                            @foreach($formas as $forma)
                                            <option value="{{ $forma->id }}"
                                                    @if(isset($med->forma_id) && $forma->id == $med->forma_id))
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
                                            <textarea name="descricao" class="form-control" required rows="4" placeholder="Descrição do medicamento e indicações médicas para o seu uso.">  {{ $med->descricao or old('descricao')}}</textarea>
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
                                            <textarea name="publico" class="form-control" required rows="2" placeholder="Modo de conservação do medicamento">  {{ $med->publico or old('publico')}}</textarea>
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
                                            <textarea name="conservacao" class="form-control" required rows="2" placeholder="Modo de conservação do medicamento">  {{ $med->conservacao or old('conservacao')}}</textarea>
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
                            <button type="submit" class="btn btn-primary">Enviar Dados</button>
                            <button type="reset" class="btn btn-inverse">Cancelar</button>
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