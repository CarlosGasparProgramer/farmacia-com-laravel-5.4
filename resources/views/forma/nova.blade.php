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
                @if(isset($forma))
                <form class="panel panel-default" method="post" action="{{ route('forma.update', $forma->id) }}" data-parsley-validate>
                    {!! method_field('PUT') !!}
                    @else
                <form class="panel panel-default" method="post" action="{{ route('forma.store') }}" data-parsley-validate>
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
                                        @if(session('success-forma'))
                                        <div class="alert alert-{{ session('success-forma')['type'] }}">
                                            <center><p>{{ session('success-forma')['messages'] }}</p></center>
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label class="control-label">Nome da Forma <span class="text-danger">*</span></label>
                                        <input name="nome" type="text" value="{{ $forma->nome or old('nome')}}" class="form-control" required>
                                        @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                        @endif
                                    </div>                                       

                                </div>
                                <div class="col-sm-12"><br>
                                    <label class="control-label">Medida <span class="text-danger">*</span></label>
                                    <input name="medida" type="text" value="{{$forma->medida or old('medida')}}" class="form-control" required>
                                    @if ($errors->has('medida'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medida') }}</strong>
                                    </span>
                                    @endif
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