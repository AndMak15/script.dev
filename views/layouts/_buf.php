<?php
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 09.01.2016
 * Time: 0:10
 */

?>
<nav role="navigation" class="navbar topnavbar ng-scope"><!-- START navbar header-->
    <div class="navbar-header"><a href="#/" class="navbar-brand">
            <div class="brand-logo"><img src="app/img/logo.png" alt="App Logo" class="img-responsive"></div>
            <div class="brand-logo-collapsed"><img src="app/img/logo-single.png" alt="App Logo"
                                                   class="img-responsive"></div>
        </a></div><!-- END navbar header--><!-- START Nav wrapper-->
    <div class="nav-wrapper"><!-- START Left navbar-->
        <ul class="nav navbar-nav">
            <li><!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                <a href="" trigger-resize="" ng-click="app.layout.isCollapsed = !app.layout.isCollapsed" class="hidden-xs">
                    <em class="fa fa-navicon"></em>
                </a>
                <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                <a href="" ng-click="app.asideToggled = !app.asideToggled" class="visible-xs sidebar-toggle">
                    <em class="fa fa-navicon"></em>
                </a>
            </li><!-- START User avatar toggle-->
            <li><!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                <a href="" ng-click="toggleUserBlock()"><em class="icon-user"></em></a>
            </li><!-- END User avatar toggle--><!-- START lock screen-->
            <li>
                <a ui-sref="page.lock" title="Lock screen" href="#/page/lock"><em class="icon-lock"></em></a>
            </li><!-- END lock screen-->
        </ul><!-- END Left navbar-->
        <!-- START Right Navbar-->
        <ul class="nav navbar-nav navbar-right">
            <!-- Search icon-->
            <li><a href="" search-open="search-open"><em class="icon-magnifier"></em></a></li>
            <!-- Fullscreen (only desktops)-->
            <li class="visible-lg">
                <a href="" toggle-fullscreen="toggle-fullscreen"><em class="fa fa-expand"></em></a>
            </li>
            <!-- START Alert menu-->
            <li uib-dropdown="" class="dropdown dropdown-list">
                <a uib-dropdown-toggle="" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                    <em class="icon-bell"></em>
                    <div class="label label-danger">11</div>
                </a><!-- START Dropdown menu-->
                <ul class="dropdown-menu animated flipInX">
                    <li>
                        <!-- START list group-->
                        <div class="list-group">
                            <!-- list item-->
                            <a href="" class="list-group-item">
                                <div class="media-box">
                                    <div class="pull-left"><em class="fa fa-twitter fa-2x text-info"></em></div>
                                    <div class="media-box-body clearfix"><p class="m0">New followers</p>
                                        <p class="m0 text-muted">
                                            <small>1 new follower</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- list item-->
                            <a href="" class="list-group-item">
                                <div class="media-box">
                                    <div class="pull-left"><em class="fa fa-envelope fa-2x text-warning"></em></div>
                                    <div class="media-box-body clearfix"><p class="m0">New e-mails</p>
                                        <p class="m0 text-muted">
                                            <small>You have 10 new emails</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- list item-->
                            <a href="" class="list-group-item">
                                <div class="media-box">
                                    <div class="pull-left"><em class="fa fa-tasks fa-2x text-success"></em></div>
                                    <div class="media-box-body clearfix"><p class="m0">Pending Tasks</p>
                                        <p class="m0 text-muted">
                                            <small>11 pending task</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- last list item -->
                            <a href="" class="list-group-item">
                                <small translate="topbar.notification.MORE" class="ng-scope">
                                    <span class="ng-scope">More notifications</span>
                                </small>
                                <span class="label label-danger pull-right">14</span></a>
                        </div><!-- END list group-->
                    </li>
                </ul><!-- END Dropdown menu-->
            </li><!-- END Alert menu-->
            <!-- START Offsidebar button-->
            <li>
                <a href="" ng-click="app.offsidebarOpen = !app.offsidebarOpen"><em class="icon-notebook"></em></a>
            </li><!-- END Offsidebar menu-->
        </ul><!-- END Right Navbar-->
    </div><!-- END Nav wrapper-->
    <!-- START Search form-->
    <form role="search" action="search.html" class="navbar-form ng-pristine ng-valid">
        <div class="form-group has-feedback">
            <input type="text" placeholder="Type and hit enter.." class="form-control">
            <div search-dismiss="search-dismiss" class="fa fa-times form-control-feedback"></div>
        </div>
        <button type="submit" class="hidden btn btn-default">Submit</button>
    </form>
    <!-- END Search form-->
</nav>

<!-- Main section-->
<div ui-view="" autoscroll="false" ng-class="app.viewAnimation" class="content-wrapper ng-scope ng-fadeInUp" style="">
    <h3 class="ng-scope"> <!-- START Language list-->
        <div class="pull-right">
            <div uib-dropdown="" is-open="language.listIsOpen" class="btn-group dropdown">
                <button type="button" uib-dropdown-toggle="" class="btn btn-default ng-binding dropdown-toggle"
                        aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                    <!-- ngRepeat: (localeId, langName) in language.available -->
                    <li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a
                            ng-click="language.set(localeId, $event)" href="#" class="ng-binding">English</a></li>
                    <!-- end ngRepeat: (localeId, langName) in language.available -->
                    <li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a
                            ng-click="language.set(localeId, $event)" href="#" class="ng-binding">Español</a></li>
                    <!-- end ngRepeat: (localeId, langName) in language.available --></ul>
            </div>
        </div><!-- END Language list    -->
        Dashboard
        <small class="ng-binding">Welcome to Angle !</small>
    </h3><!-- START widgets box-->
    <div class="row ng-scope"></div><!-- END widgets box-->
    <div class="row ng-scope"><!-- START dashboard main content-->
        <div class="col-lg-9"><!-- START chart-->
            <div class="row">
                <div class="col-lg-12"><!-- START widget-->
                    <div id="panelChart9" ng-controller="DashboardController as dash"
                         class="panel panel-default ng-scope">
                        <div class="panel-heading">
                            <paneltool tool-collapse="tool-collapse" tool-refresh="traditional" class="pull-right"><a
                                    href="#" panel-collapse="" uib-tooltip="Collapse Panel"
                                    ng-click="panelChart9 = !panelChart9" class="ng-scope"> <em ng-show="panelChart9"
                                                                                                class="fa fa-plus ng-no-animation ng-hide"></em>
                                    <em ng-show="!panelChart9" class="fa fa-minus ng-no-animation"></em> </a><a href="#"
                                                                                                                panel-refresh=""
                                                                                                                data-spinner="traditional"
                                                                                                                uib-tooltip="Refresh Panel"
                                                                                                                class="ng-scope">
                                    <em class="fa fa-refresh"></em> </a></paneltool>
                            <div class="panel-title">Inbound visitor statistics</div>
                        </div>
                        <div uib-collapse="panelChart9" class="panel-wrapper in collapse" aria-expanded="true"
                             aria-hidden="false" style="height: auto;">
                            <div class="panel-body">
                                <flot dataset="dash.splineData" options="dash.splineOptions" height="250px"
                                      class="ng-isolate-scope">
                                    <div style="width: 100%; height: 250px; padding: 0px; position: relative;">
                                        <canvas class="flot-base" width="1013" height="250"
                                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1013px; height: 250px;"></canvas>
                                        <div class="flot-text"
                                             style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                            <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 14px; text-align: center;">
                                                    Mar
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 178px; text-align: center;">
                                                    Apr
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 340px; text-align: center;">
                                                    May
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 504px; text-align: center;">
                                                    Jun
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 669px; text-align: center;">
                                                    Jul
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 830px; text-align: center;">
                                                    Aug
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; max-width: 146px; top: 231px; left: 994px; text-align: center;">
                                                    Sep
                                                </div>
                                            </div>
                                            <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; top: 217px; left: 12px; text-align: right;">
                                                    0
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; top: 145px; left: 6px; text-align: right;">
                                                    50
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; top: 73px; left: 1px; text-align: right;">
                                                    100
                                                </div>
                                                <div class="flot-tick-label tickLabel"
                                                     style="position: absolute; top: 1px; left: 1px; text-align: right;">
                                                    150
                                                </div>
                                            </div>
                                        </div>
                                        <canvas class="flot-overlay" width="1013" height="250"
                                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1013px; height: 250px;"></canvas>
                                        <div class="legend">
                                            <div
                                                style="position: absolute; width: 75px; height: 45px; top: 15px; right: 15px; opacity: 0.85; background-color: rgb(252, 252, 252);"></div>
                                            <table
                                                style="position:absolute;top:15px;right:15px;;font-size:smaller;color:#545454">
                                                <tbody>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div
                                                                style="width:4px;height:0;border:5px solid #768294;overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">Uniques</td>
                                                </tr>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div
                                                                style="width:4px;height:0;border:5px solid #1f92fe;overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">Recurrent</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </flot>
                            </div>
                        </div>
                    </div><!-- END widget--></div>
            </div><!-- END chart-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel widget">
                        <div class="row row-table">
                            <div class="col-md-2 col-sm-3 col-xs-6 text-center bg-info pv-xl"><em
                                    class="wi wi-day-sunny fa-4x"></em></div>
                            <div class="col-md-2 col-sm-3 col-xs-6 pv br">
                                <div class="h1 m0 text-bold">32°</div>
                                <div class="text-uppercase">Clear</div>
                            </div>
                            <div class="col-md-2 col-sm-3 hidden-xs pv text-center br">
                                <div class="text-info text-sm">10 AM</div>
                                <div class="text-muted text-md"><em class="wi wi-day-cloudy"></em></div>
                                <div class="text-info"><em class="wi wi-sprinkles"> </em><span
                                        class="text-muted">20%</span></div>
                                <div class="text-muted">27°</div>
                            </div>
                            <div class="col-md-2 col-sm-3 hidden-xs pv text-center br">
                                <div class="text-info text-sm">11 AM</div>
                                <div class="text-muted text-md"><em class="wi wi-day-cloudy"></em></div>
                                <div class="text-info"><em class="wi wi-sprinkles"> </em><span
                                        class="text-muted">30%</span></div>
                                <div class="text-muted">28°</div>
                            </div>
                            <div class="col-md-2 hidden-sm hidden-xs pv text-center br">
                                <div class="text-info text-sm">12 PM</div>
                                <div class="text-muted text-md"><em class="wi wi-day-cloudy"></em></div>
                                <div class="text-info"><em class="wi wi-sprinkles"> </em><span
                                        class="text-muted">20%</span></div>
                                <div class="text-muted">30°</div>
                            </div>
                            <div class="col-md-2 hidden-sm hidden-xs pv text-center">
                                <div class="text-info text-sm">1 PM</div>
                                <div class="text-muted text-md"><em class="wi wi-day-sunny-overcast"></em></div>
                                <div class="text-info"><em class="wi wi-sprinkles"> </em><span
                                        class="text-muted">0%</span></div>
                                <div class="text-muted">30°</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END dashboard main content--><!-- START dashboard sidebar-->
        <aside class="col-lg-3"><!-- START loader widget-->
            <div class="panel panel-default">
                <div class="panel-body"><a href="#" class="text-muted pull-right"><em
                            class="fa fa-arrow-right"></em></a>
                    <div class="text-info">Average Monthly Uploads</div>
                    <canvas classyloader="" data-percentage="70" data-speed="20" data-font-size="40px"
                            data-diameter="70" data-line-color="#23b7e5"
                            data-remaining-line-color="rgba(200,200,200,0.4)" data-line-width="10"
                            data-rounded-line="true" class="center-block js-is-in-view" width="200"
                            height="200"></canvas>
                    <div sparkline="" data-bar-color="#23b7e5" data-height="30" data-bar-width="5" data-bar-spacing="2"
                         values="5,4,8,7,8,5,4,6,5,5,9,4,6,3,4,7,5,4,7" class="text-center ng-isolate-scope">
                        <canvas width="131" height="30"
                                style="display: inline-block; width: 131px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                </div>
                <div class="panel-footer"><p class="text-muted"><em
                            class="fa fa-upload fa-fw"></em><span>This Month</span><span
                            class="text-dark">1000 Gb</span></p></div>
            </div><!-- END loader widget--><!-- START messages and activity-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Latest activities</div>
                </div><!-- START list group-->
                <div class="list-group"><!-- START list group item-->
                    <div class="list-group-item">
                        <div class="media-box">
                            <div class="pull-left"><span class="fa-stack"><em
                                        class="fa fa-circle fa-stack-2x text-purple"></em><em
                                        class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em></span></div>
                            <div class="media-box-body clearfix">
                                <small class="text-muted pull-right ml">15m</small>
                                <div class="media-box-heading"><a href="#" class="text-purple m0">NEW FILE</a></div>
                                <p class="m0">
                                    <small><a href="#">Bootstrap.xls</a></small>
                                </p>
                            </div>
                        </div>
                    </div><!-- END list group item--><!-- START list group item-->
                    <div class="list-group-item">
                        <div class="media-box">
                            <div class="pull-left"><span class="fa-stack"><em
                                        class="fa fa-circle fa-stack-2x text-info"></em><em
                                        class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em></span></div>
                            <div class="media-box-body clearfix">
                                <small class="text-muted pull-right ml">2h</small>
                                <div class="media-box-heading"><a href="#" class="text-info m0">NEW DOCUMENT</a></div>
                                <p class="m0">
                                    <small><a href="#">Bootstrap.doc</a></small>
                                </p>
                            </div>
                        </div>
                    </div><!-- END list group item--><!-- START list group item-->
                    <div class="list-group-item">
                        <div class="media-box">
                            <div class="pull-left"><span class="fa-stack"><em
                                        class="fa fa-circle fa-stack-2x text-danger"></em><em
                                        class="fa fa-exclamation fa-stack-1x fa-inverse text-white"></em></span></div>
                            <div class="media-box-body clearfix">
                                <small class="text-muted pull-right ml">5h</small>
                                <div class="media-box-heading"><a href="#" class="text-danger m0">BROADCAST</a></div>
                                <p class="m0"><a href="#">Read</a></p></div>
                        </div>
                    </div><!-- END list group item--><!-- START list group item-->
                    <div class="list-group-item">
                        <div class="media-box">
                            <div class="pull-left"><span class="fa-stack"><em
                                        class="fa fa-circle fa-stack-2x text-success"></em><em
                                        class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em></span></div>
                            <div class="media-box-body clearfix">
                                <small class="text-muted pull-right ml">15h</small>
                                <div class="media-box-heading"><a href="#" class="text-success m0">NEW MEETING</a></div>
                                <p class="m0">
                                    <small>On <em>10/12/2015 09:00 am</em></small>
                                </p>
                            </div>
                        </div>
                    </div><!-- END list group item--><!-- START list group item-->
                    <div class="list-group-item">
                        <div class="media-box">
                            <div class="pull-left"><span class="fa-stack"><em
                                        class="fa fa-circle fa-stack-2x text-warning"></em><em
                                        class="fa fa-tasks fa-stack-1x fa-inverse text-white"></em></span></div>
                            <div class="media-box-body clearfix">
                                <small class="text-muted pull-right ml">1w</small>
                                <div class="media-box-heading"><a href="#" class="text-warning m0">TASKS COMPLETION</a>
                                </div>
                                <div class="progress-xs m0 progress ng-isolate-scope" value="22" type="warning">
                                    <div class="progress-bar progress-bar-warning"
                                         ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar"
                                         aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"
                                         ng-style="{width: (percent < 100 ? percent : 100) + '%'}" aria-valuetext="22%"
                                         aria-labelledby="progressbar" style="min-width: 0px; width: 22%;"
                                         ng-transclude=""><span class="ng-scope">22%</span></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END list group item--></div><!-- END list group--><!-- START panel footer-->
                <div class="panel-footer clearfix"><a href="#" class="pull-left">
                        <small>Load more</small>
                    </a></div><!-- END panel-footer--></div><!-- END messages and activity--></aside>
        <!-- END dashboard sidebar--></div>
</div>

<nav class="sidebar" ng-transclude="" sidebar="" sidebar-anyclick-close=""
     ng-class="{'show-scrollbar': app.layout.asideScrollbar}">
    <!-- START sidebar nav-->
    <ul class="nav ng-scope">
        <!-- START user info-->
        <li class="has-user-block">
            <div uib-collapse="userBlockVisible" ng-controller="UserBlockController" class="ng-scope collapse"
                 aria-expanded="false" aria-hidden="true" style="height: 0px;">
                <div class="item user-block">
                    <!-- User picture-->
                    <div class="user-block-picture">
                        <div class="user-block-status"><img ng-src="app/img/user/02.jpg" alt="Avatar"
                                                            class="img-thumbnail img-circle"
                                                            src="app/img/user/02.jpg">
                            <div class="circle circle-success circle-lg"></div>
                        </div>
                    </div>
                    <!-- Name and Job-->
                    <div class="user-block-info"><span
                            class="user-block-name ng-binding">Welcome John</span><span
                            class="user-block-role ng-binding">ng-developer</span></div>
                </div>
            </div>
        </li><!-- END user info-->
        <!-- Iterates over all sidebar items-->
        <!-- ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)"
            class="ng-scope nav-heading" style="">
            <!-- ngIf: item.heading -->
            <span ng-if="item.heading" class="ng-binding ng-scope">Main Navigation</span>
            <!-- end ngIf: item.heading -->
            <!-- ngIf: !item.heading -->
            <!-- ngIf: item.submenu -->
        </li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope active"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Dashboard"
                                                                               class="ng-scope">
                <!-- ngIf: item.alert -->
                <div ng-if="item.alert" ng-class="item.label || 'label label-success'"
                     class="pull-right ng-binding ng-scope label label-info">3
                </div><!-- end ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                               class="icon-speedometer"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Dashboard</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope in collapse" aria-expanded="true" aria-hidden="false"
                style="height: auto;">
                <li class="sidebar-subnav-header ng-binding">Dashboard</li>
                <!-- ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope  active"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/dashboard" title="Dashboard v1" class="ng-scope"
                        href="#/app/dashboard"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Dashboard v1</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/dashboard_v2" title="Dashboard v2" class="ng-scope"
                        href="#/app/dashboard_v2"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Dashboard v2</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/dashboard_v3" title="Dashboard v3" class="ng-scope"
                        href="#/app/dashboard_v3"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Dashboard v3</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu --></ul>
            <!-- end ngIf: item.submenu --></li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading"
                                                                               ng-href="#/app/widgets"
                                                                               title="Widgets" class="ng-scope"
                                                                               href="#/app/widgets">
                <!-- ngIf: item.alert -->
                <div ng-if="item.alert" ng-class="item.label || 'label label-success'"
                     class="pull-right ng-binding ng-scope label label-success">30
                </div><!-- end ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                               class="icon-grid"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Widgets</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Layouts" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-layers"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Layouts</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Layouts</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app-h/dashboard_v2" title="Horizontal Nav"
                        class="ng-scope" href="#/app-h/dashboard_v2"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Horizontal Nav</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)"
            class="ng-scope nav-heading" style=""><!-- ngIf: item.heading --><span ng-if="item.heading"
                                                                                   class="ng-binding ng-scope">Components</span>
            <!-- end ngIf: item.heading --><!-- ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Elements"
                                                                               class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                     class="icon-chemistry"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Elements</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Elements</li>
                <!-- ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/buttons" title="Buttons" class="ng-scope"
                        href="#/app/buttons"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Button</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/notifications" title="Notifications"
                        class="ng-scope" href="#/app/notifications"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Notification</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/ngdialog" title="ngDialog" class="ng-scope"
                        href="#/app/ngdialog"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">ngDialog</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/sweetalert" title="Sweet Alert" class="ng-scope"
                        href="#/app/sweetalert"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Sweet Alert</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/tour" title="Tour" class="ng-scope"
                        href="#/app/tour"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Tour</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/interaction" title="Interaction" class="ng-scope"
                        href="#/app/interaction"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Interaction</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/carousel" title="Carousel" class="ng-scope"
                        href="#/app/carousel"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Carousel</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/spinners" title="Spinners" class="ng-scope"
                        href="#/app/spinners"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Spinner</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/dropdown-animations" title="Dropdown"
                        class="ng-scope" href="#/app/dropdown-animations"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Dropdown</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/navtree" title="Nav Tree" class="ng-scope"
                        href="#/app/navtree"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Nav Tree</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/nestable" title="Nestable" class="ng-scope"
                        href="#/app/nestable"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Nestable</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/sortable" title="Sortable" class="ng-scope"
                        href="#/app/sortable"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Sortable</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/panels" title="Panels" class="ng-scope"
                        href="#/app/panels"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Panel</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/portlets" title="Portlets" class="ng-scope"
                        href="#/app/portlets"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Portlet</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/grid" title="Grid" class="ng-scope"
                        href="#/app/grid"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Grid</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/grid-masonry" title="Grid Masonry" class="ng-scope"
                        href="#/app/grid-masonry"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Grid Masonry</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/grid-masonry-deck" title="Grid Masonry Deck"
                        class="ng-scope" href="#/app/grid-masonry-deck"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Grid Masonry Deck</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/typo" title="Typography" class="ng-scope"
                        href="#/app/typo"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Typography</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/icons-font" title="Font Icons" class="ng-scope"
                        href="#/app/icons-font"><!-- ngIf: item.alert -->
                        <div ng-if="item.alert" ng-class="item.label || 'label label-success'"
                             class="pull-right ng-binding ng-scope label label-success">+400
                        </div><!-- end ngIf: item.alert --><!-- ngIf: item.icon --><span class="ng-binding">Font Icons</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/icons-weather" title="Weather Icons"
                        class="ng-scope" href="#/app/icons-weather"><!-- ngIf: item.alert -->
                        <div ng-if="item.alert" ng-class="item.label || 'label label-success'"
                             class="pull-right ng-binding ng-scope label label-success">+100
                        </div><!-- end ngIf: item.alert --><!-- ngIf: item.icon --><span class="ng-binding">Weather Icons</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/colors" title="Colors" class="ng-scope"
                        href="#/app/colors"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Colors</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/localization" title="Localization" class="ng-scope"
                        href="#/app/localization"><!-- ngIf: item.alert -->
                        <div ng-if="item.alert" ng-class="item.label || 'label label-success'"
                             class="pull-right ng-binding ng-scope label label-success">i18n
                        </div><!-- end ngIf: item.alert --><!-- ngIf: item.icon --><span class="ng-binding">Localization</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/infinite-scroll" title="Infinite scroll"
                        class="ng-scope" href="#/app/infinite-scroll"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Infinite scroll</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Forms" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-note"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Forms</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Forms</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-standard" title="Standard" class="ng-scope"
                        href="#/app/form-standard"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Standard</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-extended" title="Extended" class="ng-scope"
                        href="#/app/form-extended"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Extended</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-validation" title="Validation"
                        class="ng-scope" href="#/app/form-validation"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Validation</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-parsley" title="Parsley" class="ng-scope"
                        href="#/app/form-parsley"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Parsley</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-wizard" title="Wizard" class="ng-scope"
                        href="#/app/form-wizard"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Wizard</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-upload" title="Upload" class="ng-scope"
                        href="#/app/form-upload"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Upload</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-xeditable" title="xEditable" class="ng-scope"
                        href="#/app/form-xeditable"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">xEditable</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-imagecrop" title="Image Crop" class="ng-scope"
                        href="#/app/form-imagecrop"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Image Crop</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/form-uiselect" title="uiSelect" class="ng-scope"
                        href="#/app/form-uiselect"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">uiSelect</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu --></ul>
            <!-- end ngIf: item.submenu --></li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Charts" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-graph"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Charts</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Charts</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/chart-flot" title="Flot" class="ng-scope"
                        href="#/app/chart-flot"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Flot</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/chart-radial" title="Radial" class="ng-scope"
                        href="#/app/chart-radial"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Radial</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/chart-js" title="Chart JS" class="ng-scope"
                        href="#/app/chart-js"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Chart JS</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/chart-rickshaw" title="Rickshaw" class="ng-scope"
                        href="#/app/chart-rickshaw"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Rickshaw</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/chart-morris" title="MorrisJS" class="ng-scope"
                        href="#/app/chart-morris"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">MorrisJS</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/chart-chartist" title="Chartist" class="ng-scope"
                        href="#/app/chart-chartist"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Chartist</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu --></ul>
            <!-- end ngIf: item.submenu --></li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Tables" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-grid"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Table</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Table</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-standard" title="Standard" class="ng-scope"
                        href="#/app/table-standard"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Standard</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-extended" title="Extended" class="ng-scope"
                        href="#/app/table-extended"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Extended</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-datatable" title="DataTables"
                        class="ng-scope" href="#/app/table-datatable"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Datatable</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-ngtable" title="ngTables" class="ng-scope"
                        href="#/app/table-ngtable"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">ngTables</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-uigrid" title="uiGrid" class="ng-scope"
                        href="#/app/table-uigrid"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">uiGrid</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-xeditable" title="xEditable" class="ng-scope"
                        href="#/app/table-xeditable"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">xEditable</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/table-angulargrid" title="Angular Grid"
                        class="ng-scope" href="#/app/table-angulargrid"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Angular Grid</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Maps" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-map"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Maps</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Maps</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/maps-google" title="Google Maps" class="ng-scope"
                        href="#/app/maps-google"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Google Map</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/maps-vector" title="Vector Maps" class="ng-scope"
                        href="#/app/maps-vector"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Vector Map</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu --></ul>
            <!-- end ngIf: item.submenu --></li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)"
            class="ng-scope nav-heading" style=""><!-- ngIf: item.heading --><span ng-if="item.heading"
                                                                                   class="ng-binding ng-scope">More</span>
            <!-- end ngIf: item.heading --><!-- ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Pages" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-doc"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Pages</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Pages</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/page/login" title="Login" class="ng-scope"
                        href="#/page/login"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Login</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/page/register" title="Sign up" class="ng-scope"
                        href="#/page/register"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Register</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/page/recover" title="Recover Password" class="ng-scope"
                        href="#/page/recover"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Recover password</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/page/lock" title="Lock" class="ng-scope"
                        href="#/page/lock"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Lock</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/template" title="Starter Template" class="ng-scope"
                        href="#/app/template"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Starter Template</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/page/404" title="404" class="ng-scope"
                        href="#/page/404"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">404</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu --></ul>
            <!-- end ngIf: item.submenu --></li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href=""
                                                                               title="Extras" class="ng-scope">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-cup"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Extras</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Extras</li><!-- ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="" title="Blog" class="ng-scope"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><em ng-if="item.icon" class="fa fa-angle-right"></em>
                        <!-- end ngIf: item.icon --><span class="ng-binding">Blog</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
                    <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)"
                        ng-init="addCollapse(pIndex, item)" class="nav sidebar-subnav ng-scope collapse"
                        style="height: 0px;">
                        <li class="sidebar-subnav-header ng-binding">Blog</li>
                        <!-- ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/blog"
                                                           title="List" class="ng-scope" href="#/app/blog">
                                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                                    class="ng-binding">List</span></a><!-- end ngIf: !item.heading -->
                            <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                        <!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/post"
                                                           title="Post" class="ng-scope" href="#/app/post">
                                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                                    class="ng-binding">Post</span></a><!-- end ngIf: !item.heading -->
                            <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                        <!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/articles"
                                                           title="Articles" class="ng-scope"
                                                           href="#/app/articles"><!-- ngIf: item.alert -->
                                <!-- ngIf: item.icon --><span class="ng-binding">Articles</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                        <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/article/"
                                                           title="Article View" class="ng-scope"
                                                           href="#/app/article/"><!-- ngIf: item.alert -->
                                <!-- ngIf: item.icon --><span class="ng-binding">Article View</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                        <!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="" title="eCommerce" class="ng-scope">
                        <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                             class="fa fa-angle-right"></em>
                        <!-- end ngIf: item.icon --><span class="ng-binding">eCommerce</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
                    <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)"
                        ng-init="addCollapse(pIndex, item)" class="nav sidebar-subnav ng-scope collapse"
                        style="height: 0px;">
                        <li class="sidebar-subnav-header ng-binding">eCommerce</li>
                        <!-- ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/orders"
                                                           title="Orders" class="ng-scope" href="#/app/orders">
                                <!-- ngIf: item.alert -->
                                <div ng-if="item.alert" ng-class="item.label || 'label label-success'"
                                     class="pull-right ng-binding ng-scope label label-info">10
                                </div><!-- end ngIf: item.alert --><!-- ngIf: item.icon --><span
                                    class="ng-binding">Orders</span></a><!-- end ngIf: !item.heading -->
                            <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                        <!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/order-view"
                                                           title="Order View" class="ng-scope"
                                                           href="#/app/order-view"><!-- ngIf: item.alert -->
                                <!-- ngIf: item.icon --><span class="ng-binding">Order View</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                        <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/products"
                                                           title="Products" class="ng-scope"
                                                           href="#/app/products"><!-- ngIf: item.alert -->
                                <!-- ngIf: item.icon --><span class="ng-binding">Products</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                        <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading" ng-href="#/app/product/"
                                                           title="Product View" class="ng-scope"
                                                           href="#/app/product/"><!-- ngIf: item.alert -->
                                <!-- ngIf: item.icon --><span class="ng-binding">Product View</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                        <!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/forum" title="Forum" class="ng-scope"
                        href="#/app/forum"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Forum</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/mailbox/folder/inbox" title="Mailbox"
                        class="ng-scope" href="#/app/mailbox/folder/inbox"><!-- ngIf: item.alert -->
                        <!-- ngIf: item.icon --><span class="ng-binding">Mailbox</span></a>
                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/timeline" title="Timeline" class="ng-scope"
                        href="#/app/timeline"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Timeline</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/calendar" title="Calendar" class="ng-scope"
                        href="#/app/calendar"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Calendar</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/invoice" title="Invoice" class="ng-scope"
                        href="#/app/invoice"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Invoice</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/search" title="Search" class="ng-scope"
                        href="#/app/search"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Search</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/todo" title="Todo List" class="ng-scope"
                        href="#/app/todo"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Todo List</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/profile" title="Profile" class="ng-scope"
                        href="#/app/profile"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Profile</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu -->
                <!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/code-editor" title="Code Editor" class="ng-scope"
                        href="#/app/code-editor"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><span
                            class="ng-binding">Code Editor</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu --></li><!-- end ngRepeat: item in item.submenu --></ul>
            <!-- end ngIf: item.submenu --></li><!-- end ngRepeat: item in menuItems -->
        <!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading"
                                                                               ng-href="#/app/multilevel"
                                                                               title="Multilevel"
                                                                               class="ng-scope"
                                                                               href="#/app/multilevel">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                     class="fa fa-folder-open-o"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Multilevel</span></a>
            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)" ng-init="addCollapse(pIndex, item)"
                class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                <li class="sidebar-subnav-header ng-binding">Multilevel</li>
                <!-- ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                    ng-class="getMenuItemPropClasses(item)"
                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true" ng-click="toggleCollapse(pIndex)"
                    class="ng-scope"><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                        ng-if="!item.heading" ng-href="#/app/multilevel/level1" title="Level 1" class="ng-scope"
                        href="#/app/multilevel/level1"><!-- ngIf: item.alert --><!-- ngIf: item.icon --><em
                            ng-if="item.icon" class="icon-folder"></em><!-- end ngIf: item.icon --><span
                            class="ng-binding">Level 1</span></a><!-- end ngIf: !item.heading -->
                    <!-- ngIf: item.submenu -->
                    <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)"
                        ng-init="addCollapse(pIndex, item)" class="nav sidebar-subnav ng-scope collapse"
                        style="height: 0px;">
                        <li class="sidebar-subnav-header ng-binding">Level 1</li>
                        <!-- ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading"
                                                           ng-href="#/app/multilevel/level1/item"
                                                           title="Level1 Item" class="ng-scope"
                                                           href="#/app/multilevel/level1/item">
                                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                                     class="fa fa-file"></em>
                                <!-- end ngIf: item.icon --><span class="ng-binding">Level1 Item</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                        <!-- end ngRepeat: item in item.submenu --><!-- ngInclude: 'sidebar-renderer.html' -->
                        <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                            ng-class="getMenuItemPropClasses(item)"
                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                            ng-click="toggleCollapse(pIndex)" class="ng-scope"><!-- ngIf: item.heading -->
                            <!-- ngIf: !item.heading --><a ng-if="!item.heading"
                                                           ng-href="#/app/multilevel/level1/level2"
                                                           title="Level 2" class="ng-scope"
                                                           href="#/app/multilevel/level1/level2">
                                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                                     class="icon-folder"></em>
                                <!-- end ngIf: item.icon --><span class="ng-binding">Level 2</span></a>
                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
                            <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)"
                                ng-init="addCollapse(pIndex, item)" class="nav sidebar-subnav ng-scope collapse"
                                style="height: 0px;">
                                <li class="sidebar-subnav-header ng-binding">Level 2</li>
                                <!-- ngRepeat: item in item.submenu -->
                                <!-- ngInclude: 'sidebar-renderer.html' -->
                                <li ng-repeat="item in item.submenu" ng-include="'sidebar-renderer.html'"
                                    ng-class="getMenuItemPropClasses(item)"
                                    ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                                    ng-click="toggleCollapse(pIndex)" class="ng-scope">
                                    <!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                                        ng-if="!item.heading" ng-href="#/app/multilevel/level1/level2/level3"
                                        title="Level 3" class="ng-scope"
                                        href="#/app/multilevel/level1/level2/level3"><!-- ngIf: item.alert -->
                                        <!-- ngIf: item.icon --><em ng-if="item.icon" class="icon-folder"></em>
                                        <!-- end ngIf: item.icon --><span class="ng-binding">Level 3</span></a>
                                    <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu -->
                                    <ul ng-if="item.submenu" uib-collapse="isCollapse(pIndex)"
                                        ng-init="addCollapse(pIndex, item)"
                                        class="nav sidebar-subnav ng-scope collapse" style="height: 0px;">
                                        <li class="sidebar-subnav-header ng-binding">Level 3</li>
                                        <!-- ngRepeat: item in item.submenu -->
                                        <!-- ngInclude: 'sidebar-renderer.html' -->
                                        <li ng-repeat="item in item.submenu"
                                            ng-include="'sidebar-renderer.html'"
                                            ng-class="getMenuItemPropClasses(item)"
                                            ng-init="pIndex=(pIndex+'-'+$index); inSubmenu = true"
                                            ng-click="toggleCollapse(pIndex)" class="ng-scope">
                                            <!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a
                                                ng-if="!item.heading"
                                                ng-href="#/app/multilevel/level1/level2/level3/item"
                                                title="Level3 Item" class="ng-scope"
                                                href="#/app/multilevel/level1/level2/level3/item">
                                                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em
                                                    ng-if="item.icon" class="fa fa-file-o"></em>
                                                <!-- end ngIf: item.icon --><span
                                                    class="ng-binding">Level3 Item</span></a>
                                            <!-- end ngIf: !item.heading --><!-- ngIf: item.submenu --></li>
                                        <!-- end ngRepeat: item in item.submenu --></ul>
                                    <!-- end ngIf: item.submenu --></li>
                                <!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu -->
                        </li><!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu -->
                </li><!-- end ngRepeat: item in item.submenu --></ul><!-- end ngIf: item.submenu --></li>
        <!-- end ngRepeat: item in menuItems --><!-- ngInclude: 'sidebar-renderer.html' -->
        <li ng-class="getMenuItemPropClasses(item)" ng-repeat="item in menuItems" ng-init="pIndex = $index"
            ng-include="'sidebar-renderer.html'" ng-click="toggleCollapse(pIndex, true)" class="ng-scope"
            style=""><!-- ngIf: item.heading --><!-- ngIf: !item.heading --><a ng-if="!item.heading"
                                                                               ng-href="#/app/documentation"
                                                                               title="Documentation"
                                                                               class="ng-scope"
                                                                               href="#/app/documentation">
                <!-- ngIf: item.alert --><!-- ngIf: item.icon --><em ng-if="item.icon"
                                                                     class="icon-graduation"></em>
                <!-- end ngIf: item.icon --><span class="ng-binding">Documentation</span>
            </a><!-- end ngIf: !item.heading -->
            <!-- ngIf: item.submenu -->
        </li><!-- end ngRepeat: item in menuItems -->
    </ul><!-- END sidebar nav-->
</nav>

