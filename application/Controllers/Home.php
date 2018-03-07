<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use Interop\Container\ContainerInterface;

class Home extends BaseControllers
{

    public function qrscanner($req, $res, $arg)
    {

      return $this->c->view->render($res, 'qr/qrscanner.html');

    }

    public function home($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/home.html');

    }

    public function join($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/join.html');

    }

    public function booking($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/booking.html');

    }

    public function maps($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/maps.html');

    }

    public function features($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/features.html');

    }

    public function partners($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/partners.html');

    }

    public function help($req, $res, $arg)
    {

      return $this->c->view->render($res, 'home/help.html');

    }

}
