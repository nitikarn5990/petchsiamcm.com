<?php

include_once ( '../lib/application_admin.php');

$_status = $_GET['status'] == 'true' ? 'open':'closed';

$arrData = array(
    "status" => $_status,
    "updated_at" => DATE_TIME,
);

if ($order_in_store->updateSQL($arrData, ["id" => $_GET['id'] ])) {
    echo 'success';
}else{
     echo 'error';
}

?>