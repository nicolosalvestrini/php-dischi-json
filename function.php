<?php
function getDischi() {
    $json = file_get_contents('dischi.json');
    $dischi = json_decode($json, true);
    return $dischi;
}
?>