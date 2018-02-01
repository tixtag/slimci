<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use Interop\Container\ContainerInterface;
use Application\Models\M_dop;

class BaseControllers
{
    protected $c;
    protected $mdop;

    public function __construct(ContainerInterface $container)
    {

        $this->c = $container;
        $this->mdop = new M_dop();

    }

}
