<?php

 

// conjuntos de caracteres

$charset[1] = 'utf-8';

$charset[2] = 'ISO-8859-1';

 

$n = 2; // troque para o valor 1 e veja como a página se comporta.

?>

<html>

<?php

echo '<meta http-equiv="Content-Type" content="text/html; charset='

. $charset[$n] . '" />';

?>

<body>

Água <!-- Água, em formato HTML Entities -->

<br />

Água <!-- Água, em formato ISO-8859-1 -->

</body>

</html>