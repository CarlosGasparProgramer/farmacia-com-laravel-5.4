@extends('layouts.system')

@section('content')
<!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Dashboard</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar clearfix">
                            <div class="col-xs-8">
                                <select class="form-control text-left" id="selectize-customselect">
                                    <option value="0">Display metrics...</option>
                                    <option value="1">Last 6 month</option>
                                    <option value="2">Last 3 month</option>
                                    <option value="3">Last month</option>
                                </select>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-primary pull-right"><i class="ico-loop4 mr5"></i>Actualizar</button>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <div class="row">
                    <!-- START Left Side -->
                    <div class="col-md-9">
                        <!-- Top Stats -->
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- START Statistic Widget -->
                                <div class="table-layout animation delay animating fadeInDown">
                                    <div class="col-xs-4 panel bgcolor-info text-center">
                                        <div class="ico-users3 fsize24"></div>
                                    </div>
                                    <div class="col-xs-8 panel">
                                        <div class="panel-body text-center">
                                            <h4 class="semibold nm">1845</h4>
                                            <p class="semibold text-muted mb0 mt5 ellipsis">REGISTERED USERS</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ END Statistic Widget -->
                            </div>
                            <div class="col-sm-4">
                                <!-- START Statistic Widget -->
                                <div class="table-layout animation delay animating fadeInUp">
                                    <div class="col-xs-4 panel bgcolor-teal text-center">
                                        <div class="ico-crown fsize24"></div>
                                    </div>
                                    <div class="col-xs-8 panel">
                                        <div class="panel-body text-center">
                                            <h4 class="semibold nm">187</h4>
                                            <p class="semibold text-muted mb0 mt5 ellipsis">PENDING ACTION</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ END Statistic Widget -->
                            </div>
                            <div class="col-sm-4">
                                <!-- START Statistic Widget -->
                                <div class="table-layout animation delay animating fadeInDown">
                                    <div class="col-xs-4 panel bgcolor-primary text-center">
                                        <div class="ico-box-add fsize24"></div>
                                    </div>
                                    <div class="col-xs-8 panel">
                                        <div class="panel-body text-center">
                                            <h4 class="semibold nm">10</h4>
                                            <p class="semibold text-muted mb0 mt5 ellipsis">UPDATE AVAILABLE</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ END Statistic Widget -->
                            </div>
                        </div>
                        <!--/ Top Stats -->

                     
                        <!-- Browser Breakpoint -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- START panel -->
                                <div class="panel panel-default">
                                    <!-- panel heading/header -->
                                    <div class="panel-heading">
                                        <h3 class="panel-title ellipsis"><i class="ico-chrome mr5"></i>Browser Breakpoint</h3>
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Browser Name</th>
                                                    <th>Rendering Engine</th>
                                                    <th>Platform</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="semibold text-accent">Google Chrome</span></td>
                                                    <td>Webkit</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,4,1,5,3</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">50.65%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Safari</span></td>
                                                    <td>Webkit</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">5,2,1,3,4</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">20.31%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Mozilla Firefox</span></td>
                                                    <td>Webkit</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,1,5,3,4</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">61.22%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Internet Explorer</span></td>
                                                    <td>Trident</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">3,1,4,5,2</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">0.65%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Opera</span></td>
                                                    <td>Presto</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">1,2,3,4,5</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">10.87%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--/ panel body with collapse capabale -->
                                </div>
                                <!--/ END panel -->
                            </div>
                        </div>
                        <!-- Browser Breakpoint -->
                    </div>
                    <!--/ END Left Side -->

                    <!-- START Right Side -->
                    <div class="col-md-3">
                        <div class="panel panel-minimal">
                            <div class="panel-heading"><h5 class="panel-title"><i class="ico-health mr5"></i>Latest Activity</h5></div>
                        
                            <!-- Media list feed -->
                            <ul class="media-list media-list-feed nm">
                                <li class="media">
                                    <div class="media-object pull-left">
                                        <i class="ico-pencil bgcolor-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">EDIT EXISTING PAGE</p>
                                        <p class="media-text"><span class="text-primary semibold">Service Page</span> has been edited by Tamara Moon.</p>
                                        <p class="media-meta">Just Now</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-object pull-left">
                                        <i class="ico-file-plus bgcolor-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">CREATE A NEW PAGE</p>
                                        <p class="media-text"><span class="text-primary semibold">Service Page</span> has been created by Tamara Moon.</p>
                                        <p class="media-meta">2 Hour Ago</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-object pull-left">
                                        <i class="ico-upload22 bgcolor-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">UPLOAD CONTENT</p>
                                        <p class="media-text">Tamara Moon has uploaded 8 new item to the directory</p>
                                        <p class="media-meta">3 Hour Ago</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-object pull-left">
                                        <img src="../image/avatar/avatar6.jpg" class="media-object img-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">NEW MESSAGE</p>
                                        <p class="media-text">Arthur Abbott send you a message</p>
                                        <p class="media-meta">3 Hour Ago</p>
                                    </div>
                                </li>
                               
                            </ul>
                            <!--/ Media list feed -->
                        </div>
                    </div>
                    <!--/ END Right Side -->
                </div>
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->
@endsection