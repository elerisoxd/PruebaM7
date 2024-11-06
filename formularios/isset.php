<?php
$numero=23;
if(is_null($numero)){
    echo "es null";
}else{
    echo "no es null";
};
echo '<br>';
unset($numero);
if(is_null($numero)){
    echo "es null";
}else{
    echo "no es null";
};
echo '<br>';
if(isset($numero)){
    echo 'existe';
}else{
    echo 'no existe';
};
echo '<br>';
if (empty($nuemro)){
    echo 'nuemro vacio';
}
?>