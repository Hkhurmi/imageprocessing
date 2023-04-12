<?php

$command = "python -c 'import classification; model = classification.train_linear_regression([[1,2,3], [4,5,6]], [7,8,9]); print(model.coef_)'";
$output = exec($command);

echo $output; // This will output the coefficients of the trained model

?>