<!DOCTYPE html>
<html>
<head>
	<title>도형 면적 계산기</title>
</head>
<body>
	<h2>도형 면적 계산기</h2>
	<?php
		if(isset($_POST['shape']) && isset($_POST['width']) && isset($_POST['height'])) {
			$shape = $_POST['shape'];
			$width = $_POST['width'];
			$height = $_POST['height'];

			if($shape == 'rectangle') {
				$area = $width * $height;
				echo "<p>직사각형의 면적은 ".$area."입니다.</p>";
			}
			elseif($shape == 'triangle') {
				$area = $width * $height / 2;
				echo "<p>삼각형의 면적은 ".$area."입니다.</p>";
			}
		}
		if(isset($_POST['shape']) && isset($_POST['radius'])) {
			$shape = $_POST['shape'];
			$radius = $_POST['radius'];
		
			if($shape == 'circle') {
				$area = pi() * pow($radius, 2);
				echo "<p>원의 면적은 ".$area."입니다.</p>";
			}
		}
		if(isset($_POST['shape']) && isset($_POST['length']) && isset($_POST['width']) && isset($_POST['height'])) {
			$shape = $_POST['shape'];
			$length = $_POST['length'];
			$width = $_POST['width'];
			$height = $_POST['height'];
		
			if($shape == 'rectangular_prism') {
				$volume = $length * $width * $height;
				echo "<p>직육면체의 체적은 ".$volume."입니다.</p>";
			}
		}
		if(isset($_POST['shape']) && isset($_POST['radius']) && isset($_POST['height'])) {
			$shape = $_POST['shape'];
			$radius = $_POST['radius'];
			$height = $_POST['height'];
		
			if($shape == 'cylinder') {
				$volume = pi() * pow($radius, 2) * $height;
				echo "<p>원통의 체적은 ".$volume."입니다.</p>";
			}
		}
		if(isset($_POST['shape']) && isset($_POST['radius'])) {
			$shape = $_POST['shape'];
			$radius = $_POST['radius'];
		
			if($shape == 'sphere') {
				$volume = 4/3 * pi() * pow($radius, 3);
				echo "<p>구의 체적은 ".$volume."입니다.</p>";
			}
		}
	?>
	<p><a href="index.html">다시 계산하기</a></p>
</body>
</html>

