<?php
	include_once'Person.php';
?>
<!DOCTYPE>
<html>
	<head>
		<title>Конструктивний сайт</title>
		<link rel="stylesheet" type="text/css" href="css/graphice.css">
		<link rel="stylesheet" type="text/css" href="html/footer.css">
		<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
		<script src="js/jquery.js"></script>
		<script src="js/code.js"></script>
	</head>
	<body style="position:relative;background-image:url(img/plans2.png);background-attachment:fixed;margin:0px 0px 0px 0px;" class="bdc">
		<?php
			include_once'html/header.html';
			$zs=array('Денис','Артем','Юля');
			$ms=array();
			$ms[0]=new Person('Неслав Антон',"23.6.1998",22,true,'Програмування',$zs,'Реп','Про котів','java.jpg');
			$zs=array('Антон','Артем','Юля');
			$ms[1]=new Person('Ситник Денис',"13.4.1998",23,true,'Програмування',$zs,'Рок','Приколи','python.jpg');
			$zs=array('Антон','Денис','Юля');
			$ms[2]=new Person('Мовчко Артем',"26.11.1998",22,true,'біологія',$zs,'Грайм','Скубіду','gress.jpg');
			$zs=array('Антон','Денис','Артем');
			$ms[3]=new Person('Ситник Юлія',"13.4.1998",23,false,'Право знавство',$zs,'Джаз','Про косметику','teres.jpg');
			echo getPersonOfDiv($ms[0]).'<br>';
			echo getPersonOfDiv($ms[1]).'<br>';
			echo getPersonOfDiv($ms[2]).'<br>';
			echo getPersonOfDiv($ms[3]).'<br>';
			include_once'html/footer.html';
		?>
	</body>
</html>