@extends('layouts.system')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">

        <!-- START row -->
        <div class="row">
            <div class="col-md-12">
                <!-- START panel -->
                <div class="panel panel-primary">
                    <!-- panel heading/header -->
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span> Entradas de Medicamentos</h3>
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
                    <!-- panel toolbar wrapper -->
                    <div class="panel-toolbar-wrapper pl0 pt5 pb5">
                        <div class="panel-toolbar pl10">
                            <form class="form-inline" method="post" action="">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-md-8">
                                        <input class="form-control col-md-8" type="text" name="nome" placeholder="Nome do Medicamento">          
                                    </div>
                                    <div class="col-md-4">
                                       <button class="form-control btn btn-primary"><i class="ico-search22"></i> Pesquisar</button> 
                                    </div>                                                        
                                    
                                </div>

                            </form>
                        </div>

                    </div>
                    <!--/ panel toolbar wrapper -->

                    <!-- panel body with collapse capabale -->
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table table-bordered table-hover" id="table1">
                            <thead>
                                <tr>
                                    <th><center>Nome do Medicamento</center></th>
                            <th><center>Forma</center></th>
                            <th><center>Data de Entrada</center></th>
                            <th><center>Quantidade</center></th>
                            <th><center>Data de Expiração</center></th>
                            <th><center>Opções</center></th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><center></center></td>
                            <td><center></center></td>
                            <td><center></center></td>
                            <td><center></center></td>
                            <td><center></center></td>

                            <td class="text-center">
                            <center>
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-default"><i class="ico-eye-open"></i> Visualizar</a>
                                    <a href="" class="btn btn-sm btn-primary"><i class="ico-edit"></i> Editar</a>
                                </div>
                            </center>
                            </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--/ panel body with collapse capabale -->
                </div>
                @if(isset($dataForm))
                {!! $entradas->appends($dataForm)->links() !!}
                @endif
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



