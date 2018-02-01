<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class Owner extends BaseControllers
{

    public function login($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'ownername' => $post['ownername'],
        'ownerpass' => $post['ownerpass'],
        'ownerstatus' => 'A'
      );
      $query = $this->mdop->getWhereArray('owners',$data);
      // die(var_dump($query));

      if(empty($query)){
        return $res->withJson([
          'success' => false, 'message' => 'Username or Password false.'
        ]);
      }

      $token = [
        "iss" => 'bookinghaircut',
        "iat" => time(),
        "exp" => time() + 60*60,
        "data" => [
            "ownername" => $query[0]->ownername
        ]
      ];
      $jwt = JWT::encode($token, getenv('API_SECRET'));

      return $res->withJson([
        'success' => true,
        'message' => 'Login succesfully.',
        'data' => $query,
        'jwt' => $jwt
      ]);
    }

    public function getAll($req, $res, $arg)
    {
      $query = $this->mdop->get('owners');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('owners','ownername',$post['ownername']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inowner($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'ownername' => $post['ownername'],
        'owneraddress' => $post['owneraddress'],
        'owneremail' => $post['owneremail'],
        'ownerphone' => $post['ownerphone'],
        'ownerpass' => $post['ownerpass'],
        'ownertype' => $post['ownertype'],
        'workingdate' => $post['workingdate'],
        'openinghours' => $post['openinghours'],
        'ownerstatus' => 'P',
        'closinghours' => $post['closinghours']
      );
      $query = $this->mdop->insert('owners',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upowner($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'ownername' => $post['ownername'],
        'owneraddress' => $post['owneraddress'],
        'owneremail' => $post['owneremail'],
        'ownerphone' => $post['ownerphone'],
        'ownerpass' => $post['ownerpass'],
        'ownertype' => $post['ownertype'],
        'workingdate' => $post['workingdate'],
        'openinghours' => $post['openinghours'],
        'closinghours' => $post['closinghours']
      );
      $query = $this->mdop->updateWhere('owners',$data,'id_owner',$post['id_owner']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function upownerlogo($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'ownerlogo' => $post['ownerlogo']
      );
      $query = $this->mdop->updateWhere('owners',$data,'id_owner',$post['id_owner']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated Picture succesfully.',
        'data' => $query
      ]);
    }

    public function deowner($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'status' => 'D'
      );
      $query = $this->mdop->deleteWhere('owners',$data,'id_owner',$post['id_owner']);
      if($query){
        return $res->withJson([
          'success' => true,
          'message' => 'Deleted succesfully.'
        ]);
      }
    }
}
