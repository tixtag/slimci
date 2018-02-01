<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Middleware;

class AuthLogin 
{

  public function __invoke($req,$res,$nex)
  {
    if (!isset($_SESSION)) {
      return $res->withRedirect('login');
    }
    return $nex($req,$res);
  }
}
