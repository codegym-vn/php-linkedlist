<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/26/2018
 * Time: 2:52 AM
 */
include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo implode ('-' , $linkData);