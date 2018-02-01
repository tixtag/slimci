<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Library;
use \Firebase\JWT\JWT;

class AuthJwt_lib
{

  public function __invoke($req, $res, $nex)
  {
    $jwt = $req->getHeader('Authorization')[0];
    try {
      $decode =  JWT::decode($jwt, getenv('API_SECRET'), array('HS256'));
      return $nex($req, $res);
    } catch (\Exception $e) {
      return $res->withJson([
        'success' => false,
        'message' => 'Token failed.',
        'catch' => $e->getMessage
      ], 401);
    }
  }

}
