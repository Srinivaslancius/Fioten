<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>

            <main class="mn-inner">

                <div>
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    
                                </div>
                                <span class="card-title">Orders</span>
                                <span class="stats-counter">$<span class="counter">48190</span><small>This week</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Orders</span>
                                <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Orders</span>
                                <span class="stats-counter"><span class="counter">83710</span><small>This Year</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Orders</span>
                                <span class="stats-counter"><span class="counter">83710</span><small>Total</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Admin Users</span>
                                <span class="stats-counter"><span class="counter">83710</span></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">                                
                                <span class="card-title">Customers</span>
                                <span class="stats-counter">$<span class="counter">48190</span><small>This week</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Products</span>
                                <span class="stats-counter"><span class="counter">83710</span></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                
                   
                </div>
                    
                </div>
               
                <div class="row">                    
                    <div class="col s12 m6 l6">                        
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Chart For Orders</span>
                                <div id="flot3"></div>
                            </div>
                        </div>
                    </div>                 
                </div>
                
            </main>
        

        <?php
            $sql= "SELECT * FROM orders";
            $result = $conn->query($sql);
            //$row = $result->fetch_assoc();
            //echo "<pre>"; print_r($row);     die;
        ?>
        <?php include_once 'footer.php'; ?>

        <script type="text/javascript">
            $(document).ready(function() {
                
                var flot3 = function () {
                    var data = [{
                        label: "Completed Orders",
                        data: 42,
                        color: "#3366CC",
                    }, {
                        label: "Pending Orders",
                        data: 23,
                        color: "#ff9800",
                    }, {
                        label: "In Progress Orders",
                        data: 35,
                        color: "#82b1ff",
                    }];
                    var options = {
                        series: {
                            pie: {
                                show: true
                            }
                        },
                        legend: {
                            labelFormatter: function(label, series){
                                return '<span class="pie-chart-legend">'+label+'</span>';
                            }
                        },
                        grid: {
                            hoverable: true
                        },
                        tooltip: true,
                        tooltipOpts: {
                            content: "%p.0%, %s",
                            shifts: {
                                x: 20,
                                y: 0
                            },
                            defaultTheme: false
                        }
                    };
                    $.plot($("#flot3"), data, options);
                };

                flot3();
               
            });
        </script>
        
        <!-- Javascripts -->        
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>             
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>      
        
  