<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class Stylist extends BaseControllers
{

    public function login($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'stylistname' => $post['stylistname'],
        'stylistpass' => $post['stylistpass'],
        'styliststatus' => 'A'
      );
      $query = $this->mdop->getWhereArray('stylist',$data);

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
            "stylistname" => $query[0]->stylistname
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
      $query = $this->mdop->get('stylist');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('stylist','id_owner',$post['id_owner']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhereId($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('stylist','id_stylist',$post['id_stylist']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inStylist($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'stylistname' => $post['stylistname'],
        'stylistphone' => $post['stylistphone'],
        'stylistemail' => $post['stylistemail'],
        'stylistpass' => $post['stylistpass'],
        'styliststatus' => 'P',
        'id_owner' => $post['id_owner']
      );
      $query = $this->mdop->insert('stylist',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upStylist($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'stylistname' => $post['stylistname'],
        'stylistphone' => $post['stylistphone'],
        'stylistemail' => $post['stylistemail'],
        'stylistpass' => $post['stylistpass'],
        'id_owner' => $post['id_owner']
      );
      $query = $this->mdop->updateWhere('stylist',$data,'id_stylist',$post['id_stylist']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function upStylistPic($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'stylistpic' => $post['stylistpic']
      );
      $query = $this->mdop->updateWhere('stylist',$data,'id_stylist',$post['id_stylist']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated Picture succesfully.',
        'data' => $query
      ]);
    }

    public function deStylist($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'status' => 'D'
      );
      $query = $this->mdop->deleteWhere('stylist',$data,'id_stylist',$post['id_stylist']);
      if($query){
        return $res->withJson([
          'success' => true,
          'message' => 'Deleted succesfully.'
        ]);
      }
    }
}
