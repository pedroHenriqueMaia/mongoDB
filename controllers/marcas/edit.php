<?php
    require_once __DIR__."/../../mongo/find.php";

    $id=new \MongoDB\BSON\ObjectId($_GET['id']);

    $filter=['_id'=>$_GET['id']];
    $options;
    $collections='ecommerce.marcas';

    $data=find($filter,$options,$collections);

    require_once __DIR__."/../../views/marcas/edit.php";