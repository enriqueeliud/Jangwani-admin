<?php

session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$db = getDbInstance();
$select = array('id', 'f_name', 'l_name', 'gender', 'phone', 'created_at', 'updated_at');


$chunk_size = 100;
$offset = 0;

$data = $db->withTotalCount()->get('therapists');
$total_count = $db->totalCount;

$handle = fopen('php://memory', 'w');

fputcsv($handle,$select);
$filename = 'export_therapists.csv';


$num_queries = ($total_count/$chunk_size) + 1;

for ($i=0; $i<$num_queries; $i++){

    $rows = $db->get('therapists',Array($offset,$chunk_size), $select);
    $offset = $offset + $chunk_size;
    foreach ($rows as $row) {

        fputcsv($handle,array_values($row));
    }
}

fseek($handle, 0);

header('Content-Type: application/csv');

header('Content-Disposition: attachment; filename="'.$filename.'";');

fpassthru($handle);

