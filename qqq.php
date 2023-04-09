<?php
$n = 30;
$sum = 0;
$prod = 1;
echo "문제 1:<br>";
for($i=1; $i <=$n; $i++){
    echo $i;
}
for($i=1;$i<=$n;$i++)

	{
        $sum+=$i;
	}
for($i=1;$i<=$n;$i++)
{
    $prod *=$i;
}
    echo "<br>1 부터 n 까지의 합은 $sum"."입니다.<br>";
    echo "1부터 n 까지의 곱은 $prod"."입니다<br>";
    echo "\n\n<br /><br />\n\n\n";
    echo "문제2:<br>";
       
    
    $dada = array();
    for ($i = 0; $i < $n; $i++) {
      $dada[] = rand(10, 100);
    }
    
    echo "생성된 결과: " . implode(", ", $dada) . "<br>";
    
    sort($dada);
    
    echo "소팅된 결과: " . implode(", ", $dada) . "<br>";
   
   echo "<br>문제3:<br>";
    $n = 10;

    $num1 = 0;
    $num2 = 1;
    $fibonacci = array();
    
    for ($i = 1; $i <= $n; $i++) {
      $num3 = $num1 + $num2;
      $fibonacci[] = $num3;
    
      if ($i > 1) {
        $ratio = $num2 / $num1;
        echo "항 {$num2}과 항 {$num1}의 비례: {$ratio}<br>";
      }

      $num1 = $num2;
      $num2 = $num3;
    }
    
    echo "피보나치 수열: " . implode(", ", $fibonacci);
    echo "<br>";
    echo "문제4: <br>";
    


    
        








    
