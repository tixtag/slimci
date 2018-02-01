<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use Interop\Container\ContainerInterface;

class Product extends BaseControllers
{

    public function home($req, $res, $arg)
    {

      return $this->c->view->render($res, 'product/home.html');
    }

}
