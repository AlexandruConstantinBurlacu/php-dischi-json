<?php

$discs = file_get_contents('./dischi.json');

$disk_list = json_decode($discs);

$discs = json_encode($disk_list);


header('Content-Type: application/json');

echo $discs;


