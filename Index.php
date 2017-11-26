<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/main.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<style>
	input[type=range][orient=vertical]
	{
	    writing-mode: bt-lr; /* IE */
	    -webkit-appearance: slider-vertical; /* WebKit */
	    width: 3px;
	    height: 100px;
	    padding: 0 5px;
	}
	
</style>
<body>
<?php
	require_once 'connection.php'; // подключаем скрипт
?>
	<form action="range_save.php" method="post" id="range_save">
		<table class="quest">
<!-- Начало 360 первого вопрсоа -->			
			<tr>
				<td class="num1">1</td>
				<td class="num2">ВОПРОС 1</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">A</td>
				<td class="answ2">Ответ 1</td>
				<td class="answ3" rowspan="2">
						<div style="width: 50px; display: inline-block;">
							<div style="float: right;">
								<input type="range" id="r1_N" oninput="fun1_N()" orient = "vertical" />
							</div>
							<div class="number__center">
								<div id="out1_1N">50</div> 
								<div id="out1_2N">50</div>
							</div>								
								<script type="text/javascript">
									
									//window.oninput = function fun1_N() {
									function fun1_N() {
									    var rng= document.getElementById('r1_N'); //rng - это Input
									    var p1= document.getElementById('out1_1N'); // p - абзац
										var p2= document.getElementById('out1_2N'); // p - абзац
										p1.innerHTML = rng.value;
									    p2.innerHTML = 100 - rng.value;
									  	
									  	$("input[class=NA_1]").val(p1.innerHTML);
									  	$("input[class=NC_1]").val(p2.innerHTML);
									}

									
								</script>
								<?php
								    echo "<script type='text/javascript'>";		    
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NA_1\' name=\'NA_1\' value = \'50' + '\'</span>');";
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NC_1\' name=\'NC_1\' value = \'50' + '\'</span>');";
								    echo "</script>";
								?>
									
						</div>

				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r1_F" oninput="fun1_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out1_1F">50</div> 
						<div id="out1_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun1_F() {
								    var rng=document.getElementById('r1_F'); //rng - это Input
								    var p1= document.getElementById('out1_1F'); // p - абзац
									var p2= document.getElementById('out1_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FA_1]").val(p1.innerHTML);
								  	$("input[class=FC_1]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FA_1\' name=\'FA_1\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FC_1\' name=\'FC_1\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>

				</td>
			</tr>
			<tr>
				<td class="answ1">C</td>
				<td class="answ2">Ответ 2</td>
			</tr>
			<tr>
				<td class="num1">2</td>
				<td class="num2">ВОПРОС 2</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">B</td>
				<td class="answ2">Ответ 3</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r2_N" oninput="fun2_N()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out2_1N">50</div> 
						<div id="out2_2N">50</div>
					</div>
						<script type="text/javascript">
							
							//window.oninput = function fun1_N() {
							function fun2_N() {
							    var rng=document.getElementById('r2_N'); //rng - это Input
							    var p1= document.getElementById('out2_1N'); // p - абзац
								var p2= document.getElementById('out2_2N'); // p - абзац
								p1.innerHTML = rng.value;
							    p2.innerHTML = 100 - rng.value;
		   
				  			  	$("input[class=NB_1]").val(p1.innerHTML);
							  	$("input[class=ND_1]").val(p2.innerHTML);
							}

							
						</script>
						<?php
						    echo "<script type='text/javascript'>";		    
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'NB_1\' name=\'NB_1\' value = \'50' + '\'</span>');";
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'ND_1\' name=\'ND_1\' value = \'50' + '\'</span>');";
						    echo "</script>";
						?>
				</div>
				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r2_F" oninput="fun2_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out2_1F">50</div> 
						<div id="out2_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun2_F() {
								    var rng=document.getElementById('r2_F'); //rng - это Input
								    var p1= document.getElementById('out2_1F'); // p - абзац
									var p2= document.getElementById('out2_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FB_1]").val(p1.innerHTML);
								  	$("input[class=FD_1]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FB_1\' name=\'FB_1\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FD_1\' name=\'FD_1\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>
				</td>
			</tr>
			<tr>
				<td class="answ1">D</td>
				<td class="answ2">Ответ 4</td>
			</tr>
<!-- Конец 360 первого вопрсоа -->
<!-- Начало 360 второго вопрсоа -->			
			<tr>
				<td class="num1">3</td>
				<td class="num2">ВОПРОС 3</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">A</td>
				<td class="answ2">Ответ 1</td>
				<td class="answ3" rowspan="2">
						<div style="width: 50px; display: inline-block;">
							<div style="float: right;">
								<input type="range" id="r3_N" oninput="fun3_N()" orient = "vertical" />
							</div>
							<div class="number__center">
								<div id="out3_1N">50</div> 
								<div id="out3_2N">50</div>
							</div>								
								<script type="text/javascript">
									
									//window.oninput = function fun1_N() {
									function fun3_N() {
									    var rng= document.getElementById('r3_N'); //rng - это Input
									    var p1= document.getElementById('out3_1N'); // p - абзац
										var p2= document.getElementById('out3_2N'); // p - абзац
										p1.innerHTML = rng.value;
									    p2.innerHTML = 100 - rng.value;
									  	
									  	$("input[class=NA_2]").val(p1.innerHTML);
									  	$("input[class=NC_2]").val(p2.innerHTML);
									}

									
								</script>
								<?php
								    echo "<script type='text/javascript'>";		    
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NA_2\' name=\'NA_2\' value = \'50' + '\'</span>');";
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NC_2\' name=\'NC_2\' value = \'50' + '\'</span>');";
								    echo "</script>";
								?>
									
						</div>

				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r3_F" oninput="fun3_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out3_1F">50</div> 
						<div id="out3_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun3_F() {
								    var rng=document.getElementById('r3_F'); //rng - это Input
								    var p1= document.getElementById('out3_1F'); // p - абзац
									var p2= document.getElementById('out3_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FA_2]").val(p1.innerHTML);
								  	$("input[class=FC_2]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FA_2\' name=\'FA_2\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FC_2\' name=\'FC_2\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>

				</td>
			</tr>
			<tr>
				<td class="answ1">C</td>
				<td class="answ2">Ответ 2</td>
			</tr>
			<tr>
				<td class="num1">4</td>
				<td class="num2">ВОПРОС 4</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">B</td>
				<td class="answ2">Ответ 3</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r4_N" oninput="fun4_N()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out4_1N">50</div> 
						<div id="out4_2N">50</div>
					</div>
						<script type="text/javascript">
							
							//window.oninput = function fun1_N() {
							function fun4_N() {
							    var rng=document.getElementById('r4_N'); //rng - это Input
							    var p1= document.getElementById('out4_1N'); // p - абзац
								var p2= document.getElementById('out4_2N'); // p - абзац
								p1.innerHTML = rng.value;
							    p2.innerHTML = 100 - rng.value;
		   
				  			  	$("input[class=NB_2]").val(p1.innerHTML);
							  	$("input[class=ND_2]").val(p2.innerHTML);
							}

							
						</script>
						<?php
						    echo "<script type='text/javascript'>";		    
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'NB_2\' name=\'NB_2\' value = \'50' + '\'</span>');";
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'ND_2\' name=\'ND_2\' value = \'50' + '\'</span>');";
						    echo "</script>";
						?>
				</div>
				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r4_F" oninput="fun4_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out4_1F">50</div> 
						<div id="out4_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun4_F() {
								    var rng=document.getElementById('r4_F'); //rng - это Input
								    var p1= document.getElementById('out4_1F'); // p - абзац
									var p2= document.getElementById('out4_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FB_2]").val(p1.innerHTML);
								  	$("input[class=FD_2]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FB_2\' name=\'FB_2\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FD_2\' name=\'FD_2\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>
				</td>
			</tr>
			<tr>
				<td class="answ1">D</td>
				<td class="answ2">Ответ 4</td>
			</tr>
<!-- Конец 360 второго вопрсоа -->
<!-- Начало 360 третьего вопрсоа -->			
			<tr>
				<td class="num1">5</td>
				<td class="num2">ВОПРОС 5</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">A</td>
				<td class="answ2">Ответ 1</td>
				<td class="answ3" rowspan="2">
						<div style="width: 50px; display: inline-block;">
							<div style="float: right;">
								<input type="range" id="r5_N" oninput="fun5_N()" orient = "vertical" />
							</div>
							<div class="number__center">
								<div id="out5_1N">50</div> 
								<div id="out5_2N">50</div>
							</div>								
								<script type="text/javascript">
									
									//window.oninput = function fun1_N() {
									function fun5_N() {
									    var rng= document.getElementById('r5_N'); //rng - это Input
									    var p1= document.getElementById('out5_1N'); // p - абзац
										var p2= document.getElementById('out5_2N'); // p - абзац
										p1.innerHTML = rng.value;
									    p2.innerHTML = 100 - rng.value;
									  	
									  	$("input[class=NA_3]").val(p1.innerHTML);
									  	$("input[class=NC_3]").val(p2.innerHTML);
									}

									
								</script>
								<?php
								    echo "<script type='text/javascript'>";		    
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NA_3\' name=\'NA_3\' value = \'50' + '\'</span>');";
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NC_3\' name=\'NC_3\' value = \'50' + '\'</span>');";
								    echo "</script>";
								?>
									
						</div>

				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r5_F" oninput="fun5_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out5_1F">50</div> 
						<div id="out5_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun5_F() {
								    var rng=document.getElementById('r5_F'); //rng - это Input
								    var p1= document.getElementById('out5_1F'); // p - абзац
									var p2= document.getElementById('out5_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FA_3]").val(p1.innerHTML);
								  	$("input[class=FC_3]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FA_3\' name=\'FA_3\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FC_3\' name=\'FC_3\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>

				</td>
			</tr>
			<tr>
				<td class="answ1">C</td>
				<td class="answ2">Ответ 2</td>
			</tr>
			<tr>
				<td class="num1">6</td>
				<td class="num2">ВОПРОС 6</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">B</td>
				<td class="answ2">Ответ 3</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r6_N" oninput="fun6_N()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out6_1N">50</div> 
						<div id="out6_2N">50</div>
					</div>
						<script type="text/javascript">
							
							//window.oninput = function fun1_N() {
							function fun6_N() {
							    var rng=document.getElementById('r6_N'); //rng - это Input
							    var p1= document.getElementById('out6_1N'); // p - абзац
								var p2= document.getElementById('out6_2N'); // p - абзац
								p1.innerHTML = rng.value;
							    p2.innerHTML = 100 - rng.value;
		   
				  			  	$("input[class=NB_3]").val(p1.innerHTML);
							  	$("input[class=ND_3]").val(p2.innerHTML);
							}

							
						</script>
						<?php
						    echo "<script type='text/javascript'>";		    
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'NB_3\' name=\'NB_3\' value = \'50' + '\'</span>');";
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'ND_3\' name=\'ND_3\' value = \'50' + '\'</span>');";
						    echo "</script>";
						?>
				</div>
				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r6_F" oninput="fun6_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out6_1F">50</div> 
						<div id="out6_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun6_F() {
								    var rng=document.getElementById('r6_F'); //rng - это Input
								    var p1= document.getElementById('out6_1F'); // p - абзац
									var p2= document.getElementById('out6_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FB_3]").val(p1.innerHTML);
								  	$("input[class=FD_3]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FB_3\' name=\'FB_3\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FD_3\' name=\'FD_3\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>
				</td>
			</tr>
			<tr>
				<td class="answ1">D</td>
				<td class="answ2">Ответ 4</td>
			</tr>
<!-- Конец 360 третьего вопрсоа -->
<!-- Начало 360 четвертого вопрсоа -->			
			<tr>
				<td class="num1">7</td>
				<td class="num2">ВОПРОС 7</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">A</td>
				<td class="answ2">Ответ 1</td>
				<td class="answ3" rowspan="2">
						<div style="width: 50px; display: inline-block;">
							<div style="float: right;">
								<input type="range" id="r7_N" oninput="fun7_N()" orient = "vertical" />
							</div>
							<div class="number__center">
								<div id="out7_1N">50</div> 
								<div id="out7_2N">50</div>
							</div>								
								<script type="text/javascript">
									
									//window.oninput = function fun1_N() {
									function fun7_N() {
									    var rng= document.getElementById('r7_N'); //rng - это Input
									    var p1= document.getElementById('out7_1N'); // p - абзац
										var p2= document.getElementById('out7_2N'); // p - абзац
										p1.innerHTML = rng.value;
									    p2.innerHTML = 100 - rng.value;
									  	
									  	$("input[class=NA_4]").val(p1.innerHTML);
									  	$("input[class=NC_4]").val(p2.innerHTML);
									}

									
								</script>
								<?php
								    echo "<script type='text/javascript'>";		    
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NA_4\' name=\'NA_4\' value = \'50' + '\'</span>');";
								    echo "document.write('<span>');";
								    echo "document.write('<input type=\'hidden\' class=\'NC_4\' name=\'NC_4\' value = \'50' + '\'</span>');";
								    echo "</script>";
								?>
									
						</div>

				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r7_F" oninput="fun7_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out7_1F">50</div> 
						<div id="out7_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun7_F() {
								    var rng=document.getElementById('r7_F'); //rng - это Input
								    var p1= document.getElementById('out7_1F'); // p - абзац
									var p2= document.getElementById('out7_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FA_4]").val(p1.innerHTML);
								  	$("input[class=FC_4]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FA_4\' name=\'FA_4\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FC_4\' name=\'FC_4\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>

				</td>
			</tr>
			<tr>
				<td class="answ1">C</td>
				<td class="answ2">Ответ 2</td>
			</tr>
			<tr>
				<td class="num1">8</td>
				<td class="num2">ВОПРОС 8</td>
				<td class="num3">Зараз</td>
				<td class="num3">Бажано</td>
			</tr>
			<tr>
				<td class="answ1">B</td>
				<td class="answ2">Ответ 3</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r8_N" oninput="fun8_N()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out8_1N">50</div> 
						<div id="out8_2N">50</div>
					</div>
						<script type="text/javascript">
							
							//window.oninput = function fun1_N() {
							function fun8_N() {
							    var rng=document.getElementById('r8_N'); //rng - это Input
							    var p1= document.getElementById('out8_1N'); // p - абзац
								var p2= document.getElementById('out8_2N'); // p - абзац
								p1.innerHTML = rng.value;
							    p2.innerHTML = 100 - rng.value;
		   
				  			  	$("input[class=NB_4]").val(p1.innerHTML);
							  	$("input[class=ND_4]").val(p2.innerHTML);
							}

							
						</script>
						<?php
						    echo "<script type='text/javascript'>";		    
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'NB_4\' name=\'NB_4\' value = \'50' + '\'</span>');";
						    echo "document.write('<span>');";
						    echo "document.write('<input type=\'hidden\' class=\'ND_4\' name=\'ND_4\' value = \'50' + '\'</span>');";
						    echo "</script>";
						?>
				</div>
				</td>
				<td class="answ3" rowspan="2">
					<div style="width: 50px; display: inline-block;">
					<div style="float: right;">
						<input type="range" id="r8_F" oninput="fun8_F()" orient = "vertical" />
					</div>
					<div class="number__center">
						<div id="out8_1F">50</div> 
						<div id="out8_2F">50</div>
					</div>
						<script type="text/javascript">
								
								//window.oninput = function fun1_N() {
								function fun8_F() {
								    var rng=document.getElementById('r8_F'); //rng - это Input
								    var p1= document.getElementById('out8_1F'); // p - абзац
									var p2= document.getElementById('out8_2F'); // p - абзац
									p1.innerHTML = rng.value;
								    p2.innerHTML = 100 - rng.value;
								  	$("input[class=FB_4]").val(p1.innerHTML);
								  	$("input[class=FD_4]").val(p2.innerHTML);
								}

								
							</script>
							<?php
							    echo "<script type='text/javascript'>";		    
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FB_4\' name=\'FB_4\' value = \'50' + '\'</span>');";
							    echo "document.write('<span>');";
							    echo "document.write('<input type=\'hidden\' class=\'FD_4\' name=\'FD_4\' value = \'50' + '\'</span>');";
							    echo "</script>";
							?>
				</div>
				</td>
			</tr>
			<tr>
				<td class="answ1">D</td>
				<td class="answ2">Ответ 4</td>
			</tr>
<!-- Конец 360 четвертого вопрсоа -->





			<tr>
				<td class="quest__submit" colspan="4"><input type="submit" name="range_submit" /></td>
			</tr>
		</table>

		
		

	</form>




</body>
</html>