<?php
/**
 * Created by PhpStorm.
 * User: 龚成
 * Date: 2016/2/23
 * Time: 14:20
 */
require_once ("DB.class.php");
$db=GCDB::getInstance();
echo "GCDB_tablepre:{$db->tablepre}<br/>";
$sql="select * from {$db->tablepre}forum_gc_type_thread;";
$sqldata=$db->query($sql);
echo "<br/>";
while($row=$sqldata->fetch_assoc()){
    print_r($row);
    echo "<br/>";
}
?>