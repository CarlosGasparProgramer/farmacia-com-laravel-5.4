@extends('layouts.system')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">


        <!-- START row -->
        <div class="row">
            <br>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="form-group"> 
                    <div class="col-sm-12">
                        @if(session('success-forma'))
                        <div class="alert alert-{{ session('success-forma')['type'] }}">
                            <center><p>{{ session('success-forma')['messages'] }}</p></center>
                        </div>
                        @endif
                    </div>
                </div>
                <form class="panel panel-default" method="post" action="{{ route('stock.pesquisar') }}">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pesquisar Medicamento</h3>
                    </div>               
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">
                                {{ csrf_field() }}
                                <div class="col-sm-6">
                                    <label class="control-label" for="myBrowser">Nome do Medicamento</label>
                                    <input class="form-control" type="text" required list="browsers" id="myBrowser" name="nome" />
                                    <datalist id="browsers">
                                        @foreach($medicamentos as $medicamento)
                                        <option value="{{ $medicamento->nome }}">
                                            @endforeach
                                    </datalist>                                    
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Forma do Medicamento</label>
                                    <select name="forma_id" class="form-control">
                                        @foreach($formas as $forma)
                                        <option value="{{ $forma->id }}">{{ $forma->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary"><i class="ico-search22"></i> Pesquisar</button>
                    </div>
                </form>
            </div>


        </div>
        <!--/ END row -->
 @if(isset($resultados))
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- START panel -->
                <div class="panel panel-primary">
                    <!-- panel heading/header -->
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span> Resultado da Pesquisa</h3>
                        <!-- panel toolbar -->
                        <div class="panel-toolbar text-right">
                            <!-- option -->
                            <div class="option">
                                <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                            </div>
                            <!--/ option -->
                        </div>
                        <!--/ panel toolbar -->
                    </div>
                    <!--/ panel heading/header -->
                   
                    <!-- panel body with collapse capabale -->
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table table-bordered table-hover" id="table1">
                            <thead>
                                <tr>                                    
                                    <th><center>Nome do Medicamento</center> </th>
                            <th><center>Nome da Forma</center></th>
                            <th><center>Preço de Venda</center></th>
                            <th><center>Stock</center></th>
                            <th><center>Data de Expiração</center></th>
                            <th><center>Opções</center></th>                                    
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($resultados as $resultado)
                                <tr>


                                    <td><center>{{ $resultado->nome }}</center></td>
                            <td><center>{{ $resultado->nome_forma }}</center></td>
                            <td><center>{{ number_format($resultado->preco_venda) }}</center></td>
                            <td><center>{{ $resultado->quant }}</center></td>
                            <td><center>{{ $resultado->data_expiracao }}</center></td>
                            <td>
                            <center>
                                <div class="btn-group">
                                    <a href="{{ route('medicamento.show', $resultado->id) }}" class="btn btn-sm btn-default"><i class="ico-eye-open"></i> Visualizar</a>
                                    <a href="{{ route('forma.edit', $resultado->id) }}" class="btn btn-sm btn-primary"><i class="ico-cart6"></i> Adicionar ao Carrinho</a>
                                </div>
                            </center>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                  
                    <!--/ panel body with collapse capabale -->
                </div>
            </div>
        </div>
        <!--/ END row -->
          @endif
    </div>
    <!--/ END Template Container -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<!--/ END Template Main -->
@endsection
