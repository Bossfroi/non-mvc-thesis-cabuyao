<?php
 require_once("../ctmls.io");
$Bigaa = 0; $Butong= 0; $marinig=0; $gulod=0; $baclaran=0;$mamatid=0; $banlic=0; $sanisidro=0;$casile=0;
$pitland=0;$diezmo=0;$pulo=0;$banaybanay=0;$niugan=0;$sala=0;$pobuno=0;$pubdos=0;$pubtres=0; $total=0;
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Bigaa';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $Bigaa = ($Bigaa+$row['Price'] );
        }}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Butong';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $Butong = ($Butong+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Marinig';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $marinig = ($marinig+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Gulod';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $gulod = ($gulod+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Baclaran';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $baclaran = ($baclaran+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Mamatid';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $mamatid = ($mamatid+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Banlic';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $banlic = ($banlic+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Sanisidro';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $sanisidro = ($sanisidro+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Casile';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $casile = ($casile+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Pittland';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $pitland = ($pitland+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Diezmo';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $diezmo = ($diezmo+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Pulo';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $pulo = ($pulo+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Banay-banay';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $banaybanay = ($banaybanay+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Niugan';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $niugan = ($niugan+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Sala';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $sala = ($sala+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Pob Uno';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $pobuno = ($pobuno+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Pob Dos';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $pubdos = ($pubdos+$row['Price'] );
        }}
/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `buyproduct` where Location ='Pob Tres';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
 $pubtres = ($pubtres+$row['Price'] );
        }}
        $query = "SELECT * FROM `buyproduct`  ;";
        if(count(fetchAll($query))>0){
            foreach(fetchAll($query) as $row){
     $total = ($total+$row['Price'] );
            }}
/////////////////////////////////////////////////////













































































        ?>
