<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li class="active"><a href="">Dashboard</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Nav Dash -->
    <ul class="nav-dash">
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                <i class="fa fa-user"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Comments" class="animation-fadeIn">
                <i class="fa fa-comments"></i> <span class="badge badge-success">3</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Calendar" class="animation-fadeIn">
                <i class="fa fa-calendar"></i> <span class="badge badge-inverse">5</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Photos" class="animation-fadeIn">
                <i class="fa fa-camera-retro"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Projects" class="animation-fadeIn">
                <i class="fa fa-paperclip"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Tasks" class="animation-fadeIn">
                <i class="fa fa-tasks"></i> <span class="badge badge-warning">1</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Reader" class="animation-fadeIn">
                <i class="fa fa-book"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Settings" class="animation-fadeIn">
                <i class="fa fa-cogs"></i>
            </a>
        </li>
    </ul>
    <!-- END Nav Dash -->

    <!-- Tiles -->
    <!-- Row 1 -->
    <div class="dash-tiles row">
        <!-- Column 1 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Users Tile -->
            <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage Users"><i class="fa fa-cog"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Total Users
                </div>
                <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
                <div class="dash-tile-text">265k</div>
            </div>
            <!-- END Total Users Tile -->

            <!-- Total Profit Tile -->
            <div class="dash-tile dash-tile-leaf clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <span class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="$500 (230 Sales)" title="Today's profit"><i class="fa fa-credit-card"></i></a>
                    </span>
                    Total Profit
                </div>
                <div class="dash-tile-icon"><i class="fa fa-money"></i></div>
                <div class="dash-tile-text">$5M</div>
            </div>
            <!-- END Total Profit Tile -->
        </div>
        <!-- END Column 1 of Row 1 -->

        <!-- Column 2 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Sales Tile -->
            <div class="dash-tile dash-tile-flower clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="View new orders"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Total Sales
                </div>
                <div class="dash-tile-icon"><i class="fa fa-tags"></i></div>
                <div class="dash-tile-text">300k</div>
            </div>
            <!-- END Total Sales Tile -->

            <!-- Total Downloads Tile -->
            <div class="dash-tile dash-tile-fruit clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="View popular downloads"><i class="fa fa-asterisk"></i></a>
                    </div>
                    Total Downloads
                </div>
                <div class="dash-tile-icon"><i class="fa fa-cloud-download"></i></div>
                <div class="dash-tile-text">360k</div>
            </div>
            <!-- END Total Downloads Tile -->
        </div>
        <!-- END Column 2 of Row 1 -->

        <!-- Column 3 of Row 1 -->
        <div class="col-sm-3">
            <!-- Popularity Tile -->
            <div class="dash-tile dash-tile-oil clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="What's changed?"><i class="fa fa-fire"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Share"><i class="fa fa-share-square-o"></i></a>
                        </div>
                    </div>
                    Popularity
                </div>
                <div class="dash-tile-icon"><i class="fa fa-globe"></i></div>
                <div class="dash-tile-text">+90%</div>
            </div>
            <!-- END Popularity Tile -->

            <!-- Server Downtime Tile -->
            <div class="dash-tile dash-tile-dark clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Monthly report"><i class="fa fa-bar-chart-o"></i></a>
                    </div>
                    Server Downtime
                </div>
                <div class="dash-tile-icon"><i class="fa fa-hdd-o"></i></div>
                <div class="dash-tile-text">0.1%</div>
            </div>
            <!-- END Server Downtime Tile -->
        </div>
        <!-- END Column 3 of Row 1 -->

        <!-- Column 4 of Row 1 -->
        <div class="col-sm-3">
            <!-- RSS Subscribers Tile -->
            <div class="dash-tile dash-tile-balloon clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage subscribers"><i class="fa fa-cog"></i></a>
                    </div>
                    RSS Subscribers
                </div>
                <div class="dash-tile-icon"><i class="fa fa-rss"></i></div>
                <div class="dash-tile-text">160k</div>
            </div>
            <!-- END RSS Subscribers Tile -->

            <!-- Total Tickets Tile -->
            <div class="dash-tile dash-tile-doll clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Open tickets"><i class="fa fa-file-o"></i></a>
                    </div>
                    Total Tickets
                </div>
                <div class="dash-tile-icon"><i class="fa fa-wrench"></i></div>
                <div class="dash-tile-text">1.5k</div>
            </div>
            <!-- END Total Tickets Tile -->
        </div>
        <!-- END Column 4 of Row 1 -->
    </div>
    <!-- END Row 1 -->

    <!-- Row 2 -->
    <div class="row">
        <!-- Column 1 of Row 2 -->
        <div class="col-sm-6">
            <!-- Statistics Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div id="example-advanced-daterangepicker" class="btn btn-default">
                            <i class="fa fa-calendar"></i>
                            <span></span>
                            <b class="caret"></b>
                        </div>
                    </div>
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="dash-tile-content">
                    <div id="dash-example-stats" class="dash-tile-content-inner"></div>
                </div>
            </div>
            <!-- END Statistics Tile -->
        </div>
        <!-- END Column 1 of Row 2 -->

        <!-- Column 2 of Row 2 -->
        <div class="col-sm-3">
            <!-- Projects Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage projects"><i class="fa fa-cog"></i></a>
                    </div>
                    Projects
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner scrollable-tile-2x">
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#1 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 100%"><i class="fa fa-check"></i> Done!</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#2 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 75%">75%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#3 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 50%">50%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#4 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 20%">20%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#5 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 85%">85%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#6 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 95%">95%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#7 - Project</a></h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 60%">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Projects Tile -->
        </div>
        <!-- END Column 2 of Row 2 -->

        <!-- Column 3 of Row 2 -->
        <div class="col-sm-3">
            <!-- Alerts Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                            <a href="javascript:void(0)" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:void(0)" class="btn btn-success"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">System</a></li>
                                <li><a href="javascript:void(0)">Projects</a></li>
                                <li><a href="javascript:void(0)">Users</a></li>
                            </ul>
                        </div>
                    </div>
                    Alerts
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner scrollable-tile-2x">
                        <h5 class="page-header-sub">Today</h5>
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <i class="fa fa-barcode"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <div class="alert alert-success">
                            <i class="fa fa-unlock"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <i class="fa fa-bell-o"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <div class="alert alert-info">
                            <i class="fa fa-signal"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <h5 class="page-header-sub">Yesterday</h5>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <i class="fa fa-barcode"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <div class="alert alert-warning">
                            <i class="fa fa-barcode"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <i class="fa fa-facebook"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                        <div class="alert alert-danger">
                            <i class="fa fa-align-justify"></i> <strong>Check out!</strong> This is a notification!
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Alerts Tile -->
        </div>
        <!-- END Column 3 of Row 2 -->
    </div>
    <!-- END Row 2 -->

    <!-- Row 3 -->
    <div class="row">
        <!-- Column 1 of Row 3 -->
        <div class="col-sm-6">
            <!-- Datatables Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage Orders"><i class="fa fa-cogs"></i></a>
                    </div>
                    <i class="fa fa-shopping-cart"></i> New Orders
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner-fluid">
                        <table id="dash-example-orders" class="table table-striped table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th class="cell-small"></th>
                                    <th class="hidden-xs hidden-sm hidden-md">#</th>
                                    <th><i class="fa fa-shopping-cart"></i> Order</th>
                                    <th class="hidden-xs hidden-sm hidden-md"><i class="fa fa-user"></i> User</th>
                                    <th><i class="fa fa-bolt"></i> Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $labels['0']['class'] = "label-default";
                                $labels['0']['text'] = "Inactive";
                                $labels['1']['class'] = "label-success";
                                $labels['1']['text'] = "Sent!";
                                $labels['2']['class'] = "label-danger";
                                $labels['2']['text'] = "Canceled!";
                                $labels['3']['class'] = "label-warning";
                                $labels['3']['text'] = "Pending..";
                                $labels['4']['class'] = "label-info";
                                $labels['4']['text'] = "Manual process..";
                                $labels['5']['class'] = "label-inverse";
                                $labels['5']['text'] = "On hold..";
                                ?>
                                <?php for($i=1; $i<13; $i++) { ?>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md"><?php echo $i; ?></td>
                                    <td><a href="javascript:void(0)">Order#<?php echo $i; ?></a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User<?php echo $i; ?></a></td>
                                    <?php $rand = rand(0, 5); ?>
                                    <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Datatables Tile -->
        </div>
        <!-- END Column 1 of Row 3 -->

        <!-- Column 2 of Row 3 -->
        <div class="col-sm-6">
            <!-- Users Tile -->
            <div class="dash-tile dash-tile-2x remove-margin">
                <div class="dash-tile-header">
                    <i class="fa fa-user"></i> Users
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner-fluid">
                        <!-- Users tabs links -->
                        <ul id="dash-example-tabs" class="nav nav-tabs" data-toggle="tabs">
                            <li class="active"><a href="#dash-example-tabs-admin">Admins</a></li>
                            <li><a href="#dash-example-tabs-mods">Mods</a></li>
                            <li><a href="#dash-example-tabs-newusers">New Users</a></li>
                        </ul>
                        <!-- END Users tabs links -->

                        <!-- User tabs content -->
                        <div class="tab-content">
                            <!-- Admins Tab -->
                            <div class="tab-pane active" id="dash-example-tabs-admin">
                                <ul class="thumbnails clearfix remove-margin" data-toggle="gallery-options">
                                    <?php for($i=1;$i<9;$i++) { ?>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin<?php echo $i; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- END Admins Tab -->

                            <!-- Mods Tab -->
                            <div class="tab-pane" id="dash-example-tabs-mods">
                                <ul class="thumbnails clearfix remove-margin" data-toggle="gallery-options">
                                    <?php for($i=1;$i<9;$i++) { ?>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod<?php echo $i; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- END Mods Tab -->

                            <!-- New Users Tab -->
                            <div class="tab-pane" id="dash-example-tabs-newusers">
                                <ul class="thumbnails clearfix remove-margin" data-toggle="gallery-options">
                                    <?php for($i=1;$i<9;$i++) { ?>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User<?php echo $i; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- END New Users Tab -->
                        </div>
                        <!-- END User tabs content -->
                    </div>
                </div>
            </div>
            <!-- END Users Tile -->
        </div>
        <!-- END Column 2 of Row 3 -->
    </div>
    <!-- END Row 3 -->
    <!-- END Tiles -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        // Initialize dash Datatables
        $('#dash-example-orders').dataTable({
            columnDefs: [ { orderable: false, targets: [ 0 ] } ],
            pageLength: 6,
            lengthMenu: [[6, 10, 30, -1], [6, 10, 30, "All"]]
        });
        $('.dataTables_filter input').attr('placeholder', 'Search');

        // Dash example stats
        var dashChart = $('#dash-example-stats');

        var dashChartData1 = [
            [0, 200],
            [1, 250],
            [2, 360],
            [3, 584],
            [4, 1250],
            [5, 1100],
            [6, 1500],
            [7, 1521],
            [8, 1600],
            [9, 1658],
            [10, 1623],
            [11, 1900],
            [12, 2100],
            [13, 1700],
            [14, 1620],
            [15, 1820],
            [16, 1950],
            [17, 2220],
            [18, 1951],
            [19, 2152],
            [20, 2300],
            [21, 2325],
            [22, 2200],
            [23, 2156],
            [24, 2350],
            [25, 2420],
            [26, 2480],
            [27, 2320],
            [28, 2380],
            [29, 2520],
            [30, 2590]
        ];
        var dashChartData2 = [
            [0, 50],
            [1, 180],
            [2, 200],
            [3, 350],
            [4, 700],
            [5, 650],
            [6, 700],
            [7, 780],
            [8, 820],
            [9, 880],
            [10, 1200],
            [11, 1250],
            [12, 1500],
            [13, 1195],
            [14, 1300],
            [15, 1350],
            [16, 1460],
            [17, 1680],
            [18, 1368],
            [19, 1589],
            [20, 1780],
            [21, 2100],
            [22, 1962],
            [23, 1952],
            [24, 2110],
            [25, 2260],
            [26, 2298],
            [27, 1985],
            [28, 2252],
            [29, 2300],
            [30, 2450]
        ];

        // Initialize Chart
        $.plot(dashChart, [
            { data: dashChartData1, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.05 }, { opacity: 0.05 }] } }, points: { show: true }, label: 'All Visits' },
            { data: dashChartData2, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.05 }, { opacity: 0.05 }] } }, points: { show: true }, label: 'Unique Visits' } ],
            {
                legend: {
                    position: 'nw',
                    backgroundColor: '#f6f6f6',
                    backgroundOpacity: 0.8
                },
                colors: ['#555555', '#db4a39'],
                grid: {
                    borderColor: '#cccccc',
                    color: '#999999',
                    labelMargin: 5,
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    ticks: 5
                },
                xaxis: {
                    tickSize: 2
                }
            }
        );

        // Create and bind tooltip
        var previousPoint = null;
        dashChart.bind("plothover", function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0],
                        y = item.datapoint[1];

                    $('<div id="tooltip" class="chart-tooltip"><strong>' + y +'</strong> visits</div>')
                        .css( { top: item.pageY - 30, left: item.pageX + 5 })
                        .appendTo("body")
                        .show();
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>