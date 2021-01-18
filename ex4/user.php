<?php 

echo 'Bonjour, votre nom est '.htmlspecialchars($_POST['name']).'. Et vous avez ' . (int)$_POST['age'] . ' ans.';

?>