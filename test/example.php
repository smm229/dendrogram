<?php
/**
 * Created by PhpStorm.
 * User: Hikki
 * Date: 2018/11/27 0027
 * Time: 下午 5:55
 */
require_once __DIR__.'/../autoload.php';

test1();

function test1()
{
   echo (new \DenDroGram\Controller\DenDroGram(\DenDroGram\Controller\AdjacencyList::class))->buildTree(1);
   //echo \DenDroGram\Controller\AdjacencyList::buildTree(true);
}
