@extends('layouts.milo-cabinet')
@section('content')
<br><br>
<br>
            <p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
                <span style="font-size: 14px;">
				<img style="float: left; margin: 10px 10px 10px 0px;" src="../images/history/DSA1.JPG" width="160px" alt="">
				DIRECT SELLING ASSOCIATION (DSA) - Ассоциация прямых продаж. Основанная в 1910 году международная организация, созданная для контроля и учета
				статистики развития Индустрии прямых продаж. В первую очередь DSA следит за законностью деятельности состоящих в ней компаний и качеством предлагаемых
				ими товаров и услуг. Таким образом членами Ассоциации могут стать только компании, в первую очередь, работающие официально и легально в тех или иных странах
				Мира, и для любой уважающей себя компании стать членам Ассоциации уже является большим достижением, а также признаком открытости и честности.
				Кроме этого, DSA ведет рейтинг компаний по объемам их товарооборота, присуждает награды за те или иные достижения компаний и их руководства.
				Ежегодно составляются два престижных рейтинга DSA - это "ТОП-500" компаний и "ТОП-100".<br>
				</span></p>
				<div class="elements-section" id="accordion">
						<div class="panel-group" id="accordion-1">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1" aria-expanded="false" class="collapsed">прямые продажи и DSA</a>
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<div class="videoWrapper">
													<iframe frameborder="0" src="//www.youtube.com/embed/sz8RiC03juU?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
												</div>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
								</div><!-- accordion 1 -->
				</div><!-- elements-section -->
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
                <span style="font-size: 14px;">
				Компания JeunesseGlobal, открывшись осенью 2009 года, уже в 2010 году получает членство в DSA, а в 2011 году сразу врывается в рейтинг ста лучших компаний
				Мира ТОП-100, заняв 82 место. Всего за 5 с небольшим лет, компания вышла на товарооборот БОЛЕЕ 1 МИЛЛИАРДА ДОЛЛАРОВ, чего за всю историю не делала 
				ни одна компания работающая в прямых продажах.</span>
			    </p>
				<br>
				<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">для сравнения</font>
				</h5>
				<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
                <span style="font-size: 16px;">
                    <font><b>
                    ПУТЬ К ПЕРВОМУ МИЛЛИАРДУ $</b><br/> 
					</font>
                </span>
            </p>
				
			<div class="row">
				<div class="col-sm-6">
					<img src="../images/history/billion1.jpg" width="100%" alt="" />
				</div>
				<div class="col-sm-6">
					<img src="../images/history/billion2.jpg" width="100%" alt="" />
				</div>
			</div>
			<br>
	<br>
    <h3 align="center"><font color="#11388B">Динамика продаж (млн. долларов США)</font></h3>
	<br>
    <canvas id="liberty-line-chart0"></canvas>
    <hr/>
	<br><br>
    <h3 align="center"><font color="#11388B">Прирост товарооборота (млн. долларов США)</font></h3>
	<br>
    <canvas id="liberty-line-chart1"></canvas>
    <hr/>
    <div class="elements-section" id="tabs">
	<br><br>
        <div class="headline style-1">
            <h2 align="center"><font color="#11388B">Рейтинг ТОП 100 DSA</font></h2>
        </div><!-- headline -->                                                                            
                          
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-1" data-toggle="tab" aria-expanded="true">{{ $dataTable[4][0]->year }}</a></li>
            <li class=""><a href="#tab-2" data-toggle="tab" aria-expanded="false">{{ $dataTable[3][0]->year }}</a></li>
            <li class=""><a href="#tab-3" data-toggle="tab" aria-expanded="false">{{ $dataTable[2][0]->year }}</a></li>
            <li class=""><a href="#tab-4" data-toggle="tab" aria-expanded="false">{{ $dataTable[1][0]->year }}</a></li>
            <li class=""><a href="#tab-5" data-toggle="tab" aria-expanded="false">{{ $dataTable[0][0]->year }}</a></li>
        </ul>                                            
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tab-1">
                <table width="100%" border="0">
                <tr>
                    <td><b>Позиция</b></td>
                    <td><b>Брэнд</b></td>
                    <td><b>Объем продаж, $ США</b></td>
                </tr>    
                @foreach($dataTable[4] as $row)
                <tr>
                    <td>{{ $row->position }}</td>
                    <td>{{ $row->brand }}</td>
                    <td>${{ number_format($row->sales*1000, 0) }}</td>
                </tr>
                @endforeach
                </table>
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="tab-2">
                <table width="100%" border="0">
                <tr>
                    <td><b>Позиция</b></td>
                    <td><b>Брэнд</b></td>
                    <td><b>Объем продаж, $ США</b></td>
                </tr>    
                @foreach($dataTable[3] as $row)
                <tr>
                    <td>{{ $row->position }}</td>
                    <td>{{ $row->brand }}</td>
                    <td>${{ number_format($row->sales*1000, 0) }}</td>
                </tr>
                @endforeach
                </table>
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="tab-3">
                <table width="100%" border="0">
                <tr>
                    <td><b>Позиция</b></td>
                    <td><b>Брэнд</b></td>
                    <td><b>Объем продаж, $ США</b></td>
                </tr>    
                @foreach($dataTable[2] as $row)
                <tr>
                    <td>{{ $row->position }}</td>
                    <td>{{ $row->brand }}</td>
                    <td>${{ number_format($row->sales*1000, 0) }}</td>
                </tr>
                @endforeach
                </table>
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="tab-4">
                <table width="100%" border="0">
                <tr>
                    <td><b>Позиция</b></td>
                    <td><b>Брэнд</b></td>
                    <td><b>Объем продаж, $ США</b></td>
                </tr>    
                @foreach($dataTable[1] as $row)
                <tr>
                    <td>{{ $row->position }}</td>
                    <td>{{ $row->brand }}</td>
                    <td>${{ number_format($row->sales*1000, 0) }}</td>
                </tr>
                @endforeach
                </table>
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="tab-5">
                <table width="100%" border="0">
                <tr>
                    <td><b>Позиция</b></td>
                    <td><b>Брэнд</b></td>
                    <td><b>Объем продаж, $ США</b></td>
                </tr>    
                @foreach($dataTable[0] as $row)
                <tr>
                    <td>{{ $row->position }}</td>
                    <td>{{ $row->brand }}</td>
                    <td>${{ number_format($row->sales*1000, 0) }}</td>
                </tr>
                @endforeach
                </table>
            </div><!-- tab-pane -->
        </div><!-- tab-content -->
                                                        
    </div>
	<div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/6HvLnhOONKE?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
    </div>
@endsection

@section('script1')
<script src="../js/jquery.scrollTo-min.js"></script>
<script src="../js/chart.min.js"></script>
<script>
     $(document).ready(function() {
        var ctx0 = $("#liberty-line-chart0");
        
        var labels = [];
        var sales = [];
        
        <?php foreach($DSARating  as $Rate){ ?>
            labels.push(<?php echo $Rate->year; ?>);
            sales.push(<?php echo $Rate->sales; ?>);
        <?php } ?>
            
        var data = {
        labels: labels,
        datasets: [
        {
            label: "Jeunesse Global",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: sales,
            spanGaps: false,
            }
        ]
    };
    var options = {
        responsive: true
    };
    var chartInstance = new Chart(ctx0, {
        type: 'bar',
        data: data,
        options: options
    });
        showProcents();
    });
     
     function showProcents(){
        var ctx1 = $("#liberty-line-chart1");
        var deltalabels = [];
        var deltasales = [];
        
         <?php foreach($deltaData  as $key => $data){ ?>
            deltasales.push(<?php echo $data+$data[$key-1]; ?>);
        <?php } ?>
            
         <?php foreach($deltaLabels as $data){ ?>
            deltalabels.push("<?php echo $data; ?>");
        <?php } ?>
        
        var data = {
        labels: deltalabels,
        datasets: [
        {
            label: "Jeunesse Global",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: deltasales,
            spanGaps: false,
            }
        ]
    };
    var options = {
        responsive: true
    };
    var chartInstance = new Chart(ctx1, {
        type: 'bar',
        data: data,
        options: options
    });
     }

</script>
	
@endsection