<?php 

include('include/header.php');

if(!isset($_SESSION['email'])){
    header('location:signin.php');
}
if(isset($_SESSION['email'])){
     $email = $_SESSION['email'];
    }

?>
  <div class="container-fluid mt-2">
      <div class="row">
       <!---sidenavbar Column-->
        <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
        </div>
        <!---Main Column -->
        <div class="col-md-9 col-lg-9">
             <!-- Icon Cards-->
                <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fad fa-shopping-cart fa-2x" ></i>
                </div>
                <?php  
                   $query = "SELECT * FROM customer_order WHERE order_status='pending'";
                   $run   = mysqli_query($con,$query);
                   $num_new_orders = mysqli_num_rows($run);
                 ?>
                <div class="mr-5">  <span style="font-size:24px;"><?php echo $num_new_orders;?></span> <br/> Pending Samples</div>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="pending_furniture_pro.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fad fa-truck fa-2x"></i>
                </div>
                <div class="mr-5">
                <?php  
                   $query = "SELECT * FROM customer_order WHERE order_status='delivered'";
                   $run   = mysqli_query($con,$query);
                   $num_delivered_orders = mysqli_num_rows($run);
                 ?> 
                  <span style="font-size:24px;"><?php echo $num_delivered_orders;?> </span> <br/> Pending Orders</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="delivered_furniture_pro.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fad fa-info-circle fa-2x"></i>
                </div>
                <div class="mr-5">
                <?php  
                   $query = "SELECT * FROM customer";
                   $run   = mysqli_query($con,$query);
                   $num_customer = mysqli_num_rows($run);
                 ?>
                   <span style="font-size:24px;"><?php echo $num_customer;?></span> Documents Pending
                  </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="customers.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fad fa-sack fa-2x"></i>
                </div>
                <div class="mr-5">
                <?php  
                   $query = "SELECT SUm(product_amount) as 'earn' FROM customer_order";
                   $run   = mysqli_query($con,$query);
                   $row=mysqli_fetch_array($run);
                   $earning = $row['earn'];
                     
                 ?>
                  <span style="font-size:24px;"> <span style=""> $ </span> <?php echo $earning; ?></span></br> Total Earned 
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
		  
		  
		  
        </div>
		
		<div class="container-fluid mt-2">
			<div class="row">
			   <!---Meeting Schedule Start-->
				<div class="col-md-6 col-lg-6 mt-4" style="margin-bottom: 10px;">
					  <div class="card card-fluid" style="">
                        <div class="card-header" style="border-bottom: 1px solid #f1f1f1;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">Meeting Schedule</h5>
                                </div>
                            </div>
                        </div>
                        <div class="list-group overflow-auto list-group-flush dashboard-box">
                                                            <div class="col-md-12 text-center">
                                    <h6 class="m-3">Meeting schedule not found</h6>
                                </div>
                                                    </div>

					
                    </div>
					
					
						<div class="card card-fluid mt-5" style="">
                        <div class="card-header" style="border-bottom: 1px solid #f1f1f1;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">Top Due Task</h5>
                                </div>
                            </div>
                        </div>
                        <div class="list-group overflow-auto list-group-flush dashboard-box">
                                                            <div class="col-md-12 text-center">
                                    <h6 class="m-3">Task record not found</h6>
                                </div>
                                                    </div>

					
                    </div>
					
					
				</div>
				<!---Task-Schedule-End-->
				<!-- Calender shedule start-->
					<div class="col-md-6 col-lg-6" style="margin-bottom: 10px;">
					  <div class="card card-fluid" style="">
                         <div class="calendar">
        <div class="header">
            <button id="prev">&lt;</button>
            <h1 id="month-year"></h1>
            <button id="next">&gt;</button>
        </div>
        <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="days"></div>
  </div>
                    </div>
				</div>

				<!--Calender-End -->

				
				
			</div>
		</div>	
		
		
		<!--Monthly Report Start-->
		<div class="container-fluid mt-2">
			<div class="row">
				<div class="col-12">
					  <div class="card">

						<div class="filter">
						  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
						  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
							<li class="dropdown-header text-start">
							  <h6>Filter</h6>
							</li>

							<li><a class="dropdown-item" href="#">Today</a></li>
							<li><a class="dropdown-item" href="#">This Month</a></li>
							<li><a class="dropdown-item" href="#">This Year</a></li>
						  </ul>
						</div>

						<div class="card-body">
						  <h5 class="card-title">Reports <span>/ Monthly</span></h5>

						  <!-- Line Chart -->
						  <div id="reportsChart" style="min-height: 365px;"><div id="apexcharts73jecpokg" class="apexcharts-canvas apexcharts73jecpokg apexcharts-theme-light" style="width: 611px; height: 350px;"><svg id="SvgjsSvg1945" width="611" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="611" height="350"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="1" seriesname="Sales" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="1" i="0" data:default-text="Sales" data:collapsed="false">Sales</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="2" seriesname="Revenue" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="2" i="1" data:default-text="Revenue" data:collapsed="false">Revenue</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="3" seriesname="Customers" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="3" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="3" i="2" data:default-text="Customers" data:collapsed="false">Customers</span></div></div><style type="text/css">
			  .apexcharts-legend {
				display: flex;
				overflow: auto;
				padding: 0 10px;
			  }
			  .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
				flex-wrap: wrap
			  }
			  .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
				flex-direction: column;
				bottom: 0;
			  }
			  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
				justify-content: flex-start;
			  }
			  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
				justify-content: center;
			  }
			  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
				justify-content: flex-end;
			  }
			  .apexcharts-legend-series {
				cursor: pointer;
				line-height: normal;
			  }
			  .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
				display: flex;
				align-items: center;
			  }
			  .apexcharts-legend-text {
				position: relative;
				font-size: 14px;
			  }
			  .apexcharts-legend-text *, .apexcharts-legend-marker * {
				pointer-events: none;
			  }
			  .apexcharts-legend-marker {
				position: relative;
				display: inline-block;
				cursor: pointer;
				margin-right: 3px;
				border-style: solid;
			  }

			  .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
				display: inline-block;
			  }
			  .apexcharts-legend-series.apexcharts-no-click {
				cursor: auto;
			  }
			  .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
				display: none !important;
			  }
			  .apexcharts-inactive-legend {
				opacity: 0.45;
			  }</style></foreignObject><rect id="SvgjsRect1953" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2076" class="apexcharts-yaxis" rel="0" transform="translate(17, 0)"><g id="SvgjsG2077" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2079" font-family="Helvetica, Arial, sans-serif" x="20" y="31.9" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2080">90</tspan><title>90</title></text><text id="SvgjsText2082" font-family="Helvetica, Arial, sans-serif" x="20" y="61.81111111111111" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2083">80</tspan><title>80</title></text><text id="SvgjsText2085" font-family="Helvetica, Arial, sans-serif" x="20" y="91.72222222222223" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2086">70</tspan><title>70</title></text><text id="SvgjsText2088" font-family="Helvetica, Arial, sans-serif" x="20" y="121.63333333333334" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2089">60</tspan><title>60</title></text><text id="SvgjsText2091" font-family="Helvetica, Arial, sans-serif" x="20" y="151.54444444444445" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2092">50</tspan><title>50</title></text><text id="SvgjsText2094" font-family="Helvetica, Arial, sans-serif" x="20" y="181.45555555555555" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2095">40</tspan><title>40</title></text><text id="SvgjsText2097" font-family="Helvetica, Arial, sans-serif" x="20" y="211.36666666666665" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2098">30</tspan><title>30</title></text><text id="SvgjsText2100" font-family="Helvetica, Arial, sans-serif" x="20" y="241.27777777777774" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2101">20</tspan><title>20</title></text><text id="SvgjsText2103" font-family="Helvetica, Arial, sans-serif" x="20" y="271.1888888888888" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2104">10</tspan><title>10</title></text><text id="SvgjsText2106" font-family="Helvetica, Arial, sans-serif" x="20" y="301.0999999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2107">0</tspan><title>0</title></text></g></g><g id="SvgjsG1947" class="apexcharts-inner apexcharts-graphical" transform="translate(47, 30)"><defs id="SvgjsDefs1946"><clipPath id="gridRectMask73jecpokg"><rect id="SvgjsRect1958" width="560" height="275.2" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask73jecpokg"></clipPath><clipPath id="nonForecastMask73jecpokg"></clipPath><clipPath id="gridRectMarkerMask73jecpokg"><rect id="SvgjsRect1959" width="602" height="317.2" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1977" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1978" stop-opacity="0.3" stop-color="rgba(65,84,241,0.3)" offset="0"></stop><stop id="SvgjsStop1979" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1980" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1999" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2000" stop-opacity="0.3" stop-color="rgba(46,202,106,0.3)" offset="0"></stop><stop id="SvgjsStop2001" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop2002" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2021" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2022" stop-opacity="0.3" stop-color="rgba(255,119,29,0.3)" offset="0"></stop><stop id="SvgjsStop2023" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop2024" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1954" x1="297.8076923076923" y1="0" x2="297.8076923076923" y2="269.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="297.8076923076923" y="0" width="1" height="209.02666015625" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine2031" x1="0" y1="270.2" x2="0" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2032" x1="85.23076923076924" y1="270.2" x2="85.23076923076924" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2033" x1="170.46153846153848" y1="270.2" x2="170.46153846153848" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2034" x1="255.69230769230774" y1="270.2" x2="255.69230769230774" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2035" x1="340.92307692307696" y1="270.2" x2="340.92307692307696" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2036" x1="426.1538461538462" y1="270.2" x2="426.1538461538462" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2037" x1="511.3846153846154" y1="270.2" x2="511.3846153846154" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG2027" class="apexcharts-grid"><g id="SvgjsG2028" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2039" x1="0" y1="29.91111111111111" x2="554" y2="29.91111111111111" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2040" x1="0" y1="59.82222222222222" x2="554" y2="59.82222222222222" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2041" x1="0" y1="89.73333333333333" x2="554" y2="89.73333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2042" x1="0" y1="119.64444444444445" x2="554" y2="119.64444444444445" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2043" x1="0" y1="149.55555555555554" x2="554" y2="149.55555555555554" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2044" x1="0" y1="179.46666666666664" x2="554" y2="179.46666666666664" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2045" x1="0" y1="209.37777777777774" x2="554" y2="209.37777777777774" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2046" x1="0" y1="239.28888888888883" x2="554" y2="239.28888888888883" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2047" x1="0" y1="269.19999999999993" x2="554" y2="269.19999999999993" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2029" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2049" x1="0" y1="269.2" x2="554" y2="269.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2048" x1="0" y1="1" x2="0" y2="269.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2030" class="apexcharts-grid-borders"><line id="SvgjsLine2038" x1="0" y1="0" x2="554" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2075" x1="0" y1="270.2" x2="554" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1960" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1961" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1981" d="M 0 176.47555555555556C 44.74615384615384 176.47555555555556 83.1 149.55555555555554 127.84615384615384 149.55555555555554C 157.67692307692306 149.55555555555554 183.24615384615385 185.4488888888889 213.07692307692307 185.4488888888889C 242.90769230769232 185.4488888888889 268.4769230769231 116.65333333333334 298.3076923076923 116.65333333333334C 328.13846153846157 116.65333333333334 353.7076923076923 143.57333333333332 383.53846153846155 143.57333333333332C 413.3692307692308 143.57333333333332 438.9384615384615 23.928888888888906 468.7692307692308 23.928888888888906C 498.6 23.928888888888906 524.1692307692308 101.69777777777779 554 101.69777777777779C 554 101.69777777777779 554 101.69777777777779 554 269.2 L 0 269.2z" fill="url(#SvgjsLinearGradient1977)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask73jecpokg)" pathTo="M 0 176.47555555555556C 44.74615384615384 176.47555555555556 83.1 149.55555555555554 127.84615384615384 149.55555555555554C 157.67692307692306 149.55555555555554 183.24615384615385 185.4488888888889 213.07692307692307 185.4488888888889C 242.90769230769232 185.4488888888889 268.4769230769231 116.65333333333334 298.3076923076923 116.65333333333334C 328.13846153846157 116.65333333333334 353.7076923076923 143.57333333333332 383.53846153846155 143.57333333333332C 413.3692307692308 143.57333333333332 438.9384615384615 23.928888888888906 468.7692307692308 23.928888888888906C 498.6 23.928888888888906 524.1692307692308 101.69777777777779 554 101.69777777777779C 554 101.69777777777779 554 101.69777777777779 554 269.2 L 0 269.2z" pathFrom="M -1 269.2 L -1 269.2 L 127.84615384615384 269.2 L 213.07692307692307 269.2 L 298.3076923076923 269.2 L 383.53846153846155 269.2 L 468.7692307692308 269.2 L 554 269.2"></path><path id="SvgjsPath1982" d="M 0 176.47555555555556C 44.74615384615384 176.47555555555556 83.1 149.55555555555554 127.84615384615384 149.55555555555554C 157.67692307692306 149.55555555555554 183.24615384615385 185.4488888888889 213.07692307692307 185.4488888888889C 242.90769230769232 185.4488888888889 268.4769230769231 116.65333333333334 298.3076923076923 116.65333333333334C 328.13846153846157 116.65333333333334 353.7076923076923 143.57333333333332 383.53846153846155 143.57333333333332C 413.3692307692308 143.57333333333332 438.9384615384615 23.928888888888906 468.7692307692308 23.928888888888906C 498.6 23.928888888888906 524.1692307692308 101.69777777777779 554 101.69777777777779M 554 101.69777777777779" fill="none" fill-opacity="1" stroke="#4154f1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask73jecpokg)" pathTo="M 0 176.47555555555556C 44.74615384615384 176.47555555555556 83.1 149.55555555555554 127.84615384615384 149.55555555555554C 157.67692307692306 149.55555555555554 183.24615384615385 185.4488888888889 213.07692307692307 185.4488888888889C 242.90769230769232 185.4488888888889 268.4769230769231 116.65333333333334 298.3076923076923 116.65333333333334C 328.13846153846157 116.65333333333334 353.7076923076923 143.57333333333332 383.53846153846155 143.57333333333332C 413.3692307692308 143.57333333333332 438.9384615384615 23.928888888888906 468.7692307692308 23.928888888888906C 498.6 23.928888888888906 524.1692307692308 101.69777777777779 554 101.69777777777779M 554 101.69777777777779" pathFrom="M -1 269.2 L -1 269.2 L 127.84615384615384 269.2 L 213.07692307692307 269.2 L 298.3076923076923 269.2 L 383.53846153846155 269.2 L 468.7692307692308 269.2 L 554 269.2" fill-rule="evenodd"></path><g id="SvgjsG1962" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g id="SvgjsG1964" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1965" r="4" cx="0" cy="176.47555555555556" class="apexcharts-marker no-pointer-events wfnhg4qk3" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle><circle id="SvgjsCircle1966" r="4" cx="127.84615384615384" cy="149.55555555555554" class="apexcharts-marker no-pointer-events w8mmw9jvqi" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1967" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1968" r="4" cx="213.07692307692307" cy="185.4488888888889" class="apexcharts-marker no-pointer-events wr0350z37" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1969" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1970" r="4" cx="298.3076923076923" cy="116.65333333333334" class="apexcharts-marker no-pointer-events wwwua6xqmk" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1971" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1972" r="4" cx="383.53846153846155" cy="143.57333333333332" class="apexcharts-marker no-pointer-events wabvroz3nh" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1973" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1974" r="4" cx="468.7692307692308" cy="23.928888888888906" class="apexcharts-marker no-pointer-events wn8kmzqwx" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1975" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1976" r="4" cx="554" cy="101.69777777777779" class="apexcharts-marker no-pointer-events wj7hewogyh" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1983" class="apexcharts-series" zIndex="1" seriesName="Revenue" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2003" d="M 0 236.29777777777775C 44.74615384615384 236.29777777777775 83.1 173.48444444444445 127.84615384615384 173.48444444444445C 157.67692307692306 173.48444444444445 183.24615384615385 134.6 213.07692307692307 134.6C 242.90769230769232 134.6 268.4769230769231 173.48444444444445 298.3076923076923 173.48444444444445C 328.13846153846157 173.48444444444445 353.7076923076923 167.5022222222222 383.53846153846155 167.5022222222222C 413.3692307692308 167.5022222222222 438.9384615384615 113.66222222222223 468.7692307692308 113.66222222222223C 498.6 113.66222222222223 524.1692307692308 146.56444444444446 554 146.56444444444446C 554 146.56444444444446 554 146.56444444444446 554 269.2 L 0 269.2z" fill="url(#SvgjsLinearGradient1999)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask73jecpokg)" pathTo="M 0 236.29777777777775C 44.74615384615384 236.29777777777775 83.1 173.48444444444445 127.84615384615384 173.48444444444445C 157.67692307692306 173.48444444444445 183.24615384615385 134.6 213.07692307692307 134.6C 242.90769230769232 134.6 268.4769230769231 173.48444444444445 298.3076923076923 173.48444444444445C 328.13846153846157 173.48444444444445 353.7076923076923 167.5022222222222 383.53846153846155 167.5022222222222C 413.3692307692308 167.5022222222222 438.9384615384615 113.66222222222223 468.7692307692308 113.66222222222223C 498.6 113.66222222222223 524.1692307692308 146.56444444444446 554 146.56444444444446C 554 146.56444444444446 554 146.56444444444446 554 269.2 L 0 269.2z" pathFrom="M -1 269.2 L -1 269.2 L 127.84615384615384 269.2 L 213.07692307692307 269.2 L 298.3076923076923 269.2 L 383.53846153846155 269.2 L 468.7692307692308 269.2 L 554 269.2"></path><path id="SvgjsPath2004" d="M 0 236.29777777777775C 44.74615384615384 236.29777777777775 83.1 173.48444444444445 127.84615384615384 173.48444444444445C 157.67692307692306 173.48444444444445 183.24615384615385 134.6 213.07692307692307 134.6C 242.90769230769232 134.6 268.4769230769231 173.48444444444445 298.3076923076923 173.48444444444445C 328.13846153846157 173.48444444444445 353.7076923076923 167.5022222222222 383.53846153846155 167.5022222222222C 413.3692307692308 167.5022222222222 438.9384615384615 113.66222222222223 468.7692307692308 113.66222222222223C 498.6 113.66222222222223 524.1692307692308 146.56444444444446 554 146.56444444444446M 554 146.56444444444446" fill="none" fill-opacity="1" stroke="#2eca6a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask73jecpokg)" pathTo="M 0 236.29777777777775C 44.74615384615384 236.29777777777775 83.1 173.48444444444445 127.84615384615384 173.48444444444445C 157.67692307692306 173.48444444444445 183.24615384615385 134.6 213.07692307692307 134.6C 242.90769230769232 134.6 268.4769230769231 173.48444444444445 298.3076923076923 173.48444444444445C 328.13846153846157 173.48444444444445 353.7076923076923 167.5022222222222 383.53846153846155 167.5022222222222C 413.3692307692308 167.5022222222222 438.9384615384615 113.66222222222223 468.7692307692308 113.66222222222223C 498.6 113.66222222222223 524.1692307692308 146.56444444444446 554 146.56444444444446M 554 146.56444444444446" pathFrom="M -1 269.2 L -1 269.2 L 127.84615384615384 269.2 L 213.07692307692307 269.2 L 298.3076923076923 269.2 L 383.53846153846155 269.2 L 468.7692307692308 269.2 L 554 269.2" fill-rule="evenodd"></path><g id="SvgjsG1984" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g id="SvgjsG1986" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1987" r="4" cx="0" cy="236.29777777777775" class="apexcharts-marker no-pointer-events w4spkpubq" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1988" r="4" cx="127.84615384615384" cy="173.48444444444445" class="apexcharts-marker no-pointer-events wxzz06qo3" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1989" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1990" r="4" cx="213.07692307692307" cy="134.6" class="apexcharts-marker no-pointer-events wi8f9r3q6i" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1991" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1992" r="4" cx="298.3076923076923" cy="173.48444444444445" class="apexcharts-marker no-pointer-events wynec2mif" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1993" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1994" r="4" cx="383.53846153846155" cy="167.5022222222222" class="apexcharts-marker no-pointer-events wjtsfffqv" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1995" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1996" r="4" cx="468.7692307692308" cy="113.66222222222223" class="apexcharts-marker no-pointer-events wdgxuiluul" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1997" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle1998" r="4" cx="554" cy="146.56444444444446" class="apexcharts-marker no-pointer-events wm4uosw7vf" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g></g></g><g id="SvgjsG2005" class="apexcharts-series" zIndex="2" seriesName="Customers" data:longestSeries="true" rel="3" data:realIndex="2"><path id="SvgjsPath2025" d="M 0 224.33333333333331C 44.74615384615384 224.33333333333331 83.1 236.29777777777775 127.84615384615384 236.29777777777775C 157.67692307692306 236.29777777777775 183.24615384615385 173.48444444444445 213.07692307692307 173.48444444444445C 242.90769230769232 173.48444444444445 268.4769230769231 215.35999999999999 298.3076923076923 215.35999999999999C 328.13846153846157 215.35999999999999 353.7076923076923 242.28 383.53846153846155 242.28C 413.3692307692308 242.28 438.9384615384615 197.41333333333333 468.7692307692308 197.41333333333333C 498.6 197.41333333333333 524.1692307692308 236.29777777777775 554 236.29777777777775C 554 236.29777777777775 554 236.29777777777775 554 269.2 L 0 269.2z" fill="url(#SvgjsLinearGradient2021)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMask73jecpokg)" pathTo="M 0 224.33333333333331C 44.74615384615384 224.33333333333331 83.1 236.29777777777775 127.84615384615384 236.29777777777775C 157.67692307692306 236.29777777777775 183.24615384615385 173.48444444444445 213.07692307692307 173.48444444444445C 242.90769230769232 173.48444444444445 268.4769230769231 215.35999999999999 298.3076923076923 215.35999999999999C 328.13846153846157 215.35999999999999 353.7076923076923 242.28 383.53846153846155 242.28C 413.3692307692308 242.28 438.9384615384615 197.41333333333333 468.7692307692308 197.41333333333333C 498.6 197.41333333333333 524.1692307692308 236.29777777777775 554 236.29777777777775C 554 236.29777777777775 554 236.29777777777775 554 269.2 L 0 269.2z" pathFrom="M -1 269.2 L -1 269.2 L 127.84615384615384 269.2 L 213.07692307692307 269.2 L 298.3076923076923 269.2 L 383.53846153846155 269.2 L 468.7692307692308 269.2 L 554 269.2"></path><path id="SvgjsPath2026" d="M 0 224.33333333333331C 44.74615384615384 224.33333333333331 83.1 236.29777777777775 127.84615384615384 236.29777777777775C 157.67692307692306 236.29777777777775 183.24615384615385 173.48444444444445 213.07692307692307 173.48444444444445C 242.90769230769232 173.48444444444445 268.4769230769231 215.35999999999999 298.3076923076923 215.35999999999999C 328.13846153846157 215.35999999999999 353.7076923076923 242.28 383.53846153846155 242.28C 413.3692307692308 242.28 438.9384615384615 197.41333333333333 468.7692307692308 197.41333333333333C 498.6 197.41333333333333 524.1692307692308 236.29777777777775 554 236.29777777777775M 554 236.29777777777775" fill="none" fill-opacity="1" stroke="#ff771d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMask73jecpokg)" pathTo="M 0 224.33333333333331C 44.74615384615384 224.33333333333331 83.1 236.29777777777775 127.84615384615384 236.29777777777775C 157.67692307692306 236.29777777777775 183.24615384615385 173.48444444444445 213.07692307692307 173.48444444444445C 242.90769230769232 173.48444444444445 268.4769230769231 215.35999999999999 298.3076923076923 215.35999999999999C 328.13846153846157 215.35999999999999 353.7076923076923 242.28 383.53846153846155 242.28C 413.3692307692308 242.28 438.9384615384615 197.41333333333333 468.7692307692308 197.41333333333333C 498.6 197.41333333333333 524.1692307692308 236.29777777777775 554 236.29777777777775M 554 236.29777777777775" pathFrom="M -1 269.2 L -1 269.2 L 127.84615384615384 269.2 L 213.07692307692307 269.2 L 298.3076923076923 269.2 L 383.53846153846155 269.2 L 468.7692307692308 269.2 L 554 269.2" fill-rule="evenodd"></path><g id="SvgjsG2006" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="2"><g id="SvgjsG2008" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle2009" r="4" cx="0" cy="224.33333333333331" class="apexcharts-marker no-pointer-events wsgyf13beh" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="4"></circle><circle id="SvgjsCircle2010" r="4" cx="127.84615384615384" cy="236.29777777777775" class="apexcharts-marker no-pointer-events wl0844sx3" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="4"></circle></g><g id="SvgjsG2011" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle2012" r="4" cx="213.07692307692307" cy="173.48444444444445" class="apexcharts-marker no-pointer-events wkzuwgg4q" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="4"></circle></g><g id="SvgjsG2013" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle2014" r="4" cx="298.3076923076923" cy="215.35999999999999" class="apexcharts-marker no-pointer-events w2skzx799" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="4"></circle></g><g id="SvgjsG2015" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle2016" r="4" cx="383.53846153846155" cy="242.28" class="apexcharts-marker no-pointer-events w4x1s812q" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="4"></circle></g><g id="SvgjsG2017" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle2018" r="4" cx="468.7692307692308" cy="197.41333333333333" class="apexcharts-marker no-pointer-events wxfz3fyt1" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="4"></circle></g><g id="SvgjsG2019" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask73jecpokg)"><circle id="SvgjsCircle2020" r="4" cx="554" cy="236.29777777777775" class="apexcharts-marker no-pointer-events wfbva1dq7" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="2" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1963" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1985" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG2007" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine2050" x1="0" y1="0" x2="554" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2051" x1="0" y1="0" x2="554" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2052" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2053" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2055" font-family="Helvetica, Arial, sans-serif" x="0" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2056">00:00</tspan><title>00:00</title></text><text id="SvgjsText2058" font-family="Helvetica, Arial, sans-serif" x="85.23076923076924" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2059">01:00</tspan><title>01:00</title></text><text id="SvgjsText2061" font-family="Helvetica, Arial, sans-serif" x="170.46153846153848" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2062">02:00</tspan><title>02:00</title></text><text id="SvgjsText2064" font-family="Helvetica, Arial, sans-serif" x="255.69230769230774" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2065">03:00</tspan><title>03:00</title></text><text id="SvgjsText2067" font-family="Helvetica, Arial, sans-serif" x="340.92307692307696" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2068">04:00</tspan><title>04:00</title></text><text id="SvgjsText2070" font-family="Helvetica, Arial, sans-serif" x="426.1538461538462" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2071">05:00</tspan><title>05:00</title></text><text id="SvgjsText2073" font-family="Helvetica, Arial, sans-serif" x="511.3846153846154" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2074">06:00</tspan><title>06:00</title></text></g></g><g id="SvgjsG2108" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2109" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2110" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2111" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2112" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 209.308px; top: 163.2px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/09/18 03:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 84, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Sales: </span><span class="apexcharts-tooltip-text-y-value">51</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 202, 106);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">32</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 119, 29);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Customers: </span><span class="apexcharts-tooltip-text-y-value">18</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 292.808px; top: 301.2px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 78px;">19/09/18 03:30</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>

						  <script>
							document.addEventListener("DOMContentLoaded", () => {
							  new ApexCharts(document.querySelector("#reportsChart"), {
								series: [{
								  name: 'Sales',
								  data: [31, 40, 28, 51, 42, 82, 56],
								}, {
								  name: 'Revenue',
								  data: [11, 32, 45, 32, 34, 52, 41]
								}, {
								  name: 'Customers',
								  data: [15, 11, 32, 18, 9, 24, 11]
								}],
								chart: {
								  height: 350,
								  type: 'area',
								  toolbar: {
									show: false
								  },
								},
								markers: {
								  size: 4
								},
								colors: ['#4154f1', '#2eca6a', '#ff771d'],
								fill: {
								  type: "gradient",
								  gradient: {
									shadeIntensity: 1,
									opacityFrom: 0.3,
									opacityTo: 0.4,
									stops: [0, 90, 100]
								  }
								},
								dataLabels: {
								  enabled: false
								},
								stroke: {
								  curve: 'smooth',
								  width: 2
								},
								xaxis: {
								  type: 'datetime',
								  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
								},
								tooltip: {
								  x: {
									format: 'dd/MM/yy HH:mm'
								  },
								}
							  }).render();
							});
						  </script>
						  <!-- End Line Chart -->

						</div>

					  </div>
					</div>
			</div>	
				</div>
			<!--Monthly Report End-->
				
			
				
     
                <!-- DataTables Example -->
                <h3 class="mt-5">New Orders</h3>
            <table class="table table-responsive table-hover mt-3">
                      <thead class="thead-light">
                          <tr>
                              <th>#Invoice No.</th>
                              <th>Order ID</th>
                              <th>Product_id</th>
                              <th>Product Image</th>
                              <th>Product Category</th>
                              <th>Customer Id</th>
                              <th>Customer Email</th>
                              <th>Price (Pkr)</th>
                              <th>Quantity</th>
                              <th>Order Date</th>
                              <th>Verify Order</th>
                             
                              
                          </tr>
                      </thead>
                       <tbody class="text-center">
                          <?php
                          
                                    $order_query = "SELECT * FROM customer_order WHERE order_status='pending' ORDER BY order_id LIMIT 5";
                                    $run = mysqli_query($con,$order_query);
                        
                                    if(mysqli_num_rows($run) > 0){
                                        while($order_row = mysqli_fetch_array($run)){
                                            $order_invoice = $order_row['invoice_no'];
                                            $order_id      = $order_row['order_id'];
                                            $cust_id       = $order_row['customer_id'];
                                            $cust_email    = $order_row['customer_email'];
                                            $order_pro_id  = $order_row['product_id'];
                                            $order_qty     = $order_row['products_qty'];
                                            $order_amount  = $order_row['product_amount'];
                                            $order_date    = $order_row['order_date'];
                                            $order_status  = $order_row['order_status'];

                                            $pr_query = "SELECT * FROM furniture_product fp INNER JOIN categories cat ON fp.category = cat.id WHERE pid = $order_pro_id ";
                                            $pr_run   = mysqli_query($con,$pr_query);
                                            
                                            if(mysqli_num_rows($pr_run) > 0){
                                                while($pr_row = mysqli_fetch_array($pr_run)){
                                                $pid   = $pr_row['pid'];
                                                $image = $pr_row['image'];
                                                $category = $pr_row['category'];
                                              
                            ?> 
                             <tr>
                                 <td>
                                 <?php echo $order_invoice;?>
                                 </td>
                                 <td>
                                 <?php echo $order_id;?>
                                 </td>
                                 <td>
                                     <?php echo $order_pro_id;?>
                                 </td>
                                 <td width="120px">
                                     <img src="img/<?php echo $image;?>" width="100%">
                                 </td>
                                 <td>
                                     <?php echo $category;?>
                                 </td>
                                 <td>
                                    <?php echo $cust_id;?>
                                 </td>
                                 <td>
                                    <?php echo $cust_email;?>
                                 </td>
                                 <td>
                                    <?php echo $order_amount;?>
                                 </td>

                                 <td><?php echo $order_qty;?></td>

                                <td><?php echo $order_date;?></td>
                                <td><a href="pending_furniture_pro.php"><button class="btn btn-primary btn-sm">Verify order</button></td>
                             </tr>   
                           <?php 
                                  }
                                }
                              }

                            }else {
                              echo "<tr><td colspan='12'><h2 class='text-center text-secondary'>You have not any pending order</h2></td></tr>";
                            }
                        
                     
                    
                    ?>
                              
                          
                      </tbody>
                  </table>

                  <h3 class="mt-5">Customers Account</h3>
                  <table class="table table-responsive table-hover mt-3">
                      <thead class="thead-light">
                          <tr>
                              <th>#Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>City</th>
                              <th>Postal code</th>
                              <th>View Complete</th>
                              
                          </tr>
                      </thead>
                        <tbody>
                          <?php     
                            $query = "SELECT * FROM customer ORDER BY cust_id DESC LIMIT 5";
                            $run   = mysqli_query($con,$query);
                                        
                            if(mysqli_num_rows($run) > 0){
                              while($row = mysqli_fetch_array($run)){
                                $cust_id         = $row['cust_id'];
                                $cust_name       = $row['cust_name'];
                                $cust_email      = $row['cust_email'];    
                                $cust_city       = $row['cust_city'];
                                $cust_postalcode = $row['cust_postalcode'];
                                                
                            ?> 
                             <tr>
                                 <td >
                                     <?php echo $cust_id;?>
                                 </td>

                                 <td width="150px">
                                    <?php echo $cust_name;?>
                                 </td>

                                 <td>
                                    <?php echo $cust_email;?>
                                 </td>

                                 <td> 
                                 <?php echo $cust_city ?>  
                                 </td>
                                 <td><?php echo $cust_postalcode;?></td>
                                 <td><a href="customers.php"><button class="btn btn-primary btn-sm">View Detail</button></td>
                            
                             </tr>   
                           <?php 
                               }

                            }else {
                              echo "<tr><td colspan='12'><h2 class='text-center text-secondary'>No Registered Customer Yet</h2></td></tr>";
                            }
                    ?>
      
                      </tbody> 
                  </table>   
          
        </div>
        </div>
  </div>

   

<!--Java-Scripts-for-calender-Start-->     
<script>
$(document).ready(function() {
    const monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"];
    
    let today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    function renderCalendar(month, year) {
        $('#month-year').text(monthNames[month] + " " + year);
        
        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        $('.days').empty();
        
        for (let i = 0; i < firstDay; i++) {
            $('.days').append('<div></div>');
        }
        
        for (let day = 1; day <= daysInMonth; day++) {
            $('.days').append('<div>' + day + '</div>');
        }
    }

    $('#prev').click(function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });

    $('#next').click(function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });

    renderCalendar(currentMonth, currentYear);
});
$(document).ready(function() {
    const monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"];
    
    let today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    let currentDay = today.getDate();

    function renderCalendar(month, year) {
        $('#month-year').text(monthNames[month] + " " + year);
        
        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        $('.days').empty();
        
        for (let i = 0; i < firstDay; i++) {
            $('.days').append('<div></div>');
        }
        
        for (let day = 1; day <= daysInMonth; day++) {
            if (day === currentDay && month === today.getMonth() && year === today.getFullYear()) {
                $('.days').append('<div class="today">' + day + '</div>');
            } else {
                $('.days').append('<div>' + day + '</div>');
            }
        }
    }

    $('#prev').click(function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });

    $('#next').click(function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });

    renderCalendar(currentMonth, currentYear);
});
</script>

<!--Java-Scripts-for-calender-End-->           
      <!-- /.container-fluid -->
<?php include('include/footer.php');?>