<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dataku = '';
if($_GET['username']){
    $dataku = $_GET['username'];
    echo $dataku;
}
if(!$dataku){
    echo "Tidak ada";
}
?>