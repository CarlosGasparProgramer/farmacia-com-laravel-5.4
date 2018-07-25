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
                        <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span> Formas de Medicamentos</h3>
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
                            <form class="form-inline" method="post" action="{{ route('forma.search') }}">
                                {{ csrf_field() }}
                                <input type="text" name="nome" placeholder="Nome da forma" class="form-control">
                                <button type="submit" class="btn btn-primary form-control"><i class="ico-search22"></i> Pesquisar</button>
                            </form>
                        </div>
                        <div class="panel-toolbar text-right">                            

                            <a href="{{ route('forma.create') }}" class="btn btn-sm btn-success"><i class="ico-upload22"></i> Nova Forma</a>
                        </div>
                    </div>
                    <!--/ panel toolbar wrapper -->

                    <!-- panel body with collapse capabale -->
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table table-bordered table-hover" id="table1">
                            <thead>
                                <tr>                                    
                                    <th><center>#Código</center> </th>
                            <th><center>Nome da Forma</center></th>
                            <th><center>Unidade de Medida</center></th>
                            <th><center>Opções</center></th>                                    
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($formas as $forma)
                                <tr>

                                    <td><center>{{ $forma->id }}</center></td>
                            <td><center>{{ $forma->nome }}</center></td>
                            <td><center>{{ $forma->medida }}</center></td>
                            <td>
                            <center>
                                <div class="btn-group">
                                    <a href="{{ route('forma.show', $forma->id) }}" class="btn btn-sm btn-default"><i class="ico-eye-open"></i> Visualizar</a>
                                    <a href="{{ route('forma.edit', $forma->id) }}" class="btn btn-sm btn-primary"><i class="ico-edit"></i> Editar</a>
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

    </div>
    <!--/ END Template Container -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<!--/ END Template Main -->
@endsection

