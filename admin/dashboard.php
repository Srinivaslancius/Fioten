<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>

            <main class="mn-inner">
                <div class="row">                    
                   
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Line Chart<small>Chart.js</small></span>
                                <div>
                                    <canvas id="chart1" width="400" height="270"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Radar Chart<small>Chart.js</small></span>
                                <div>
                                    <canvas id="chart3" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Bar Chart<small>Chart.js</small></span>
                                <div>
                                    <canvas id="chart2" width="400" height="270"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Pie Chart<small>Chart.js</small></span>
                                <div>
                                    <canvas id="chart4" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card card-transparent">
                            <div class="card-content">
                                <span class="card-title black-text">NVD3</span>
                                <p>This project is an attempt to build re-usable charts and chart components for d3.js without taking away the power that d3.js gives you. This is a very young collection of components, with the goal of keeping these components very customizeable, staying away from your standard cookie cutter solutions.</p>
                                <br>
                                <a href="http://nvd3.org/index.html" target="blank" class="secondary-link">View the official documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Line Chart<small>NVD3</small></span>
                                <div id="nvd1"><svg></svg></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Group / Stacked Bar Chart<small>NVD3</small></span>
                                <div id="nvd3"><svg></svg></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Cumulative Line Chart<small>NVD3</small></span>
                                <div id="nvd2"><svg></svg></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Stacked Area Chart<small>NVD3</small></span>
                                <div id="nvd4"><svg></svg></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card card-transparent">
                            <div class="card-content">
                                <span class="card-title black-text">Flot</span>
                                <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>
                                <br>
                                <a href="http://www.flotcharts.org/" target="blank" class="secondary-link">View the official documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Bar Chart<small>Flot</small></span>
                                <div id="flot1"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Pie Chart<small>Flot</small></span>
                                <div id="flot3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Line Chart<small>Flot</small></span>
                                <div id="flot2"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Live Chart<small>Flot</small></span>
                                <div id="flot4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card card-transparent">
                            <div class="card-content">
                                <span class="card-title black-text">Sparkline</span>
                                <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.</p>
                                <br>
                                <a href="http://omnipotent.net/jquery.sparkline/#s-docs" target="blank" class="secondary-link">View the official documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Line Chart<small>Flot</small></span>
                                <div id="sparkline1"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Custom Line Chart<small>Flot</small></span>
                                <div id="sparkline4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Bar Chart<small>Flot</small></span>
                                <div id="sparkline2"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Mouse Speed Chart Example<small>Flot</small></span>
                                <div id="sparkline5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Pie Chart<small>Flot</small></span>
                                <div id="sparkline3"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Composite bar Chart<small>Flot</small></span>
                                <div id="sparkline6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
           
        </div>
        <div id="chartjs-tooltip"></div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/plugins/d3/d3.min.js"></script>
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/charts.js"></script>
        
    </body>

<!-- Mirrored from steelcoders.com/alpha/v1.2/charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2017 06:56:27 GMT -->
</html>