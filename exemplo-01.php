<?php

for ($i = 0;$i <= 1000; $i+=5){//incrementa de 5 em 5.
	if ($i >= 200 && $i <= 800) continue;//ignora os números de 200 a 800.
	if ($i === 900) break;
	echo $i ."<br>";
}

?>