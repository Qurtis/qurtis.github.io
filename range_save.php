<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.detailed__buttom').click(function(event) {
				$('.detailed__chart').toggleClass('active');
		});
	});
		
	</script>
</head>
<body>
<div> TEST #5
</div>
<br>
<?php 
/*
	$connection = mysqli_connect("localhost", "mydb_user", "admin123");
	$bd = mysqli_select_db("test_range_save");
	mysqli_query(" SET NAMES 'utf8' ");

	if(!$connection || !$bd)
	{
		exit(mysqli_error());
	}



	if(isset($_POST['range_submit'])){

		$range_number = $_POST['range_number'];
		$range_id = $_POST['range_id'];
		$range_value = $_POST['range_value'];

		
		mysqli_query(" 
				INSERT INTO 'range_range' ('range_number', 'range_id', 'range_value')
				VALUES ('$range_number', '$range_id', '$range_value')
		");
		mysqli_close();
		echo "ВСЕ РАБОТАЕТ";
	}
	*/



?>
<?php/*
require_once 'connection.php'; // подключаем скрипт
if(isset($_POST['range_submit'])){

	// подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	    or die("Ошибка " . mysqli_error($link));
	 
	// выполняем операции с базой данных
	// $query ="SELECT * FROM test_range_save";
	    //INSERT INTO `range_range` (`range_number`, `range_id`, `range_value`) VALUES ('3', '3', '3');
	    $range_number = $_POST['range_number'];
		$range_id = $_POST['range_id'];
		$range_value = $_POST['range_value'];

	   $query = " INSERT INTO `range_range` (`range_number`, `range_id`, `range_value`) VALUES ('$range_number', '$range_id', '$range_value') ";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
	    echo "Выполнение запроса прошло успешно";
	}
	 
	// закрываем подключение
	mysqli_close($link);
}*/
?>

<?php
require_once 'connection.php'; // подключаем скрипт


	// подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	    or die("Ошибка " . mysqli_error($link));
	 
	// выполняем операции с базой данных
	   
	    $data = date('Y-m-d');
	    $NA_1 =  $_POST['NA_1'];
		$FA_1 =  $_POST['FA_1'];
		$NC_1 =  $_POST['NC_1'];
		$FC_1 =  $_POST['FC_1'];
		$NB_1 =  $_POST['NB_1'];
		$FB_1 =  $_POST['FB_1'];
		$ND_1 =  $_POST['ND_1'];
		$FD_1 =  $_POST['FD_1'];
		$NA_2 =  $_POST['NA_2'];
		$FA_2 =  $_POST['FA_2'];
		$NC_2 =  $_POST['NC_2'];
		$FC_2 =  $_POST['FC_2'];
		$NB_2 =  $_POST['NB_2'];
		$FB_2 =  $_POST['FB_2'];
		$ND_2 =  $_POST['ND_2'];
		$FD_2 =  $_POST['FD_2'];
		$NA_3 =  $_POST['NA_3'];
		$FA_3 =  $_POST['FA_3'];
		$NC_3 =  $_POST['NC_3'];
		$FC_3 =  $_POST['FC_3'];
		$NB_3 =  $_POST['NB_3'];
		$FB_3 =  $_POST['FB_3'];
		$ND_3 =  $_POST['ND_3'];
		$FD_3 =  $_POST['FD_3'];
		$NA_4 =  $_POST['NA_4'];
		$FA_4 =  $_POST['FA_4'];
		$NC_4 =  $_POST['NC_4'];
		$FC_4 =  $_POST['FC_4'];
		$NB_4 =  $_POST['NB_4'];
		$FB_4 =  $_POST['FB_4'];
		$ND_4 =  $_POST['ND_4'];
		$FD_4 =  $_POST['FD_4'];


		// ---------------------
	// charts_NOW
		$NA_ =  ($_POST['NA_1'] + $_POST['NA_2'] + $_POST['NA_3'] + $_POST['NA_4'])/4;
		$NB_ =  ($_POST['NB_1'] + $_POST['NB_2'] + $_POST['NB_3'] + $_POST['NB_4'])/4;
		$NC_ =  ($_POST['NC_1'] + $_POST['NC_2'] + $_POST['NC_3'] + $_POST['NC_4'])/4;
		$ND_ =  ($_POST['ND_1'] + $_POST['ND_2'] + $_POST['ND_3'] + $_POST['ND_4'])/4;
	// charts_future
		$FA_ =  ($_POST['FA_1'] + $_POST['FA_2'] + $_POST['FA_3'] + $_POST['FA_4'])/4;
		$FB_ =  ($_POST['FB_1'] + $_POST['FB_2'] + $_POST['FB_3'] + $_POST['FB_4'])/4;
		$FC_ =  ($_POST['FC_1'] + $_POST['FC_2'] + $_POST['FC_3'] + $_POST['FC_4'])/4;
		$FD_ =  ($_POST['FD_1'] + $_POST['FD_2'] + $_POST['FD_3'] + $_POST['FD_4'])/4;



		$A =  $NA_ + $FA_;
		$B =  $NB_ + $FB_;
		$C =  $NC_ + $FC_;
		$D =  $ND_ + $FD_;

		//----------------------

	   $query = " INSERT INTO `answer` (`data`,`user`,`NA_1`, `FA_1`, `NC_1`, `FC_1`, `NB_1`, `FB_1`, `ND_1`, `FD_1`,
	    								`NA_2`, `FA_2`, `NC_2`, `FC_2`, `NB_2`, `FB_2`, `ND_2`, `FD_2`, 
	    								`NA_3`, `FA_3`, `NC_3`, `FC_3`, `NB_3`, `FB_3`, `ND_3`, `FD_3`, 
	    								`NA_4`, `FA_4`, `NC_4`, `FC_4`, `NB_4`, `FB_4`, `ND_4`, `FD_4` ) 
	   VALUES  ('$data','$user','$NA_1', '$FA_1', '$NC_1', '$FC_1', '$NB_1', '$FB_1', '$ND_1', '$FD_1',
	   			'$NA_2', '$FA_2', '$NC_2', '$FC_2', '$NB_2', '$FB_2', '$ND_2', '$FD_2',
	   			'$NA_3', '$FA_3', '$NC_3', '$FC_3', '$NB_3', '$FB_3', '$ND_3', '$FD_3',
	   			'$NA_4', '$FA_4', '$NC_4', '$FC_4', '$NB_4', '$FB_4', '$ND_4', '$FD_4')  ";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
	    echo "Выполнение запроса прошло успешно";?><br><br>
	    <div class="left chart__main">
		<svg height="210px" width="200px">
			<polygon points="0,0 200,0 200,200 0,200" style="fill:#c9c9c9;stroke:purple;fill-opacity:0.5;stroke-opacity:0.5;stroke-width:1" />
			<polygon points="0,0 200,200 200,0 0,200" style="fill:white;stroke:black;fill-opacity:0;stroke-opacity:0.5;stroke-width:1" />
			
			<polygon points=
							" <?php echo $NC_; ?>, <?php echo $NC_; ?>
					  		<?php echo ($NB_ + 100); ?>, <?php echo $ND_; ?>
					  		<?php echo ($NC_ + 100); ?>, <?php echo ($NC_ + 100); ?>
					  		<?php echo $NB_; ?>, <?php echo ($ND_ + 100); ?> "
					style="fill:red;stroke:red;fill-opacity:0.5;stroke-opacity:0.5;stroke-width:2" />
			<polygon points=
							" <?php echo $FC_; ?>, <?php echo $FC_; ?>
					  		<?php echo ($FB_ + 100); ?>, <?php echo $FD_; ?>
					  		<?php echo ($FC_ + 100); ?>, <?php echo ($FC_ + 100); ?>
					  		<?php echo $FB_; ?>, <?php echo ($FD_ + 100); ?> " 
					style="fill:green;stroke:green;fill-opacity:0.5;stroke-opacity:0.5;stroke-width:2" />
			<polygon points=" 100,0 100,100 200,100 100,100 100,200 100,100 0,100 100,100" 
					style="fill:lime;stroke:black;stroke-width:1" />
		</svg>
		<div class="detailed__buttom">
			<div class="divide">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</div>
		</div>
		</div>
	<div class="detailed__chart">
		<table class="test_result_table">
	    	<tr>
	    		<td class="test_result_table_b">
	    			<div class="red__range"><?php echo $NA_;?></div><br />
					<div class="green__range"><?php echo $FA_;?></div>
				</td>
				<td class="test_result_table_lb">
					<div class="red__range"><?php echo $NB_;?></div><br />
					<div class="green__range"><?php echo $FB_;?></div>
				</td>
				<td>
					<div class="red__range">RED - NOW</div> 
					<div class="green__range">GREEN - FUTURE</div>
				</td>
			</tr>
	 		<tr>
	    		<td>
	    			<div class="red__range"><?php echo $ND_;?></div><br />
	    				<div class="green__range"><?php echo $FD_;?></div>
	    		</td>
	    		<td class="test_result_table_l">
	    			<div class="red__range"><?php echo $NC_;?></div><br />
	    			<div class="green__range"><?php echo $FC_;?></div>
	    		</td>
	    	</tr>
		</table>
	</div>

<?php








//outline
	    	    
	}
	 
	// закрываем подключение
	mysqli_close($link);

?>









</body>
</html>