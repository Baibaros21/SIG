<?php
if(isset($_POST['question'])){
exec("python pyscript.py ".$_POST['question'],$return);

echo (json_encode($return));
  
}
?>