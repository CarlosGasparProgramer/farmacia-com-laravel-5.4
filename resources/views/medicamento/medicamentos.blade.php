@extends('layouts.system')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">

        <!-- START row -->
        <div class="row">
            <div class="col-sm-12">
                @if(session('success-forma'))
                <div class="alert alert-{{ session('success-medicamento')['type'] }}">
                    <center><p>{{ session('success-medicamento')['messages'] }}</p></center>
                </div>
                @endif
            </div>
            <div class="col-md-12">
                <!-- START panel -->
                <div class="panel panel-primary">
                    <!-- panel heading/header -->
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span>Medicamentos Registados</h3>
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
                            <div class="checkbox custom-checkbox pull-left">  
                                <form class="form-inline" method="post" action="{{ route('medicamento.search') }}">
                                    {{ csrf_field() }}
                                    <input type="text" name="id" class="form-control" placeholder="Código do Medicamento">                                    
                                    <input type="text" name="nome" class="form-control" placeholder="Nome do Medicamento">                                    
                                    <button type="submit" class="btn btn-primary"><i class="ico-search22"></i> Pesquisar</button>                                      
                                </form>
                            </div>
                        </div>
                        <div class="panel-toolbar text-right">
                            <div class="btn-group">
                                <a href="{{ route('medicamento.create') }}" class="btn btn-sm btn-success"><i class="ico-upload22"></i> Novo Medicamento</a>
                            </div>                             
                        </div>
                    </div>
                    <!--/ panel toolbar wrapper -->

                    <!-- panel body with collapse capabale -->
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table table-bordered table-hover" id="table1">
                            <thead>
                                <tr>
                                    <th><center>Código</center></th>
                            <th><center>Nome de Medicamento</center></th>
                            <th><center>Forma do Medicamento</center></th>                                    
                            <th><center>Opções</center></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($medicamentos as $medicamento)
                                <tr>

                                    <td><center>{{ $medicamento->id }}</center></td>
                            <td><center>{{ $medicamento->nome }}</center></td>
                            <td><center>{{ $medicamento->nome_forma }}</center></td>

                            <td class="text-center">
                                <!-- button toolbar -->
                                <div class="panel-toolbar text-right">
                                    <center>
                                        <div class="btn-group">                                                                                                                               
                                            <a href="{{ route('medicamento.show',$medicamento->id) }}" class="btn btn-sm btn-default"><i class="ico-eye-open"></i> Visualizar</a>
                                            <a href="{{ route('medicamento.edit',$medicamento->id) }}" class="btn btn-sm btn-primary"><i class="ico-edit"></i> Editar</a> 
                                            <!-- <form action="{{ route('medicamento.destroy', $medicamento->id)}}" method="post">
                                               {{ method_field('DELETE') }}
                                               {{ csrf_field() }} 
                                               <button type="submit" class="btn btn-sm btn-danger"><i class="ico-remove3"></i> Eliminar</button>
                                           </form> -->

                                        </div>
                                    </center>                                           
                                </div>
                                <!--/ button toolbar -->
                            </td>
                            </tr> 
                            @endforeach

                            </tbody>
                        </table>                       
                    </div>

                    <!--/ panel body with collapse capabale -->
                </div>
                @if(isset($dataForm))
                    {{ $medicamentos->appends($dataForm)->links() }}
                @else
                    {{ $medicamentos->links() }}
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

