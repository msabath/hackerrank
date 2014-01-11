<?php
/* Head ends here */
function lonelyinteger( $a) {

      
      return array_search(1, array_count_values($a));
          
}
/* Tail starts here */
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_a_cnt);
$_a = fgets($__fp);
$_a = split(' ',$_a);
$res = lonelyinteger($_a);
echo $res;

?>
