<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class Customer extends BaseControllers
{

    public function login($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'username' => $post['username'],
        'password' => $post['password'],
        'status' => 'A'
      );
      $query = $this->mdop->getWhereArray('customer',$data);

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
            "username" => $query[0]->username
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
      $query = $this->mdop->get('customer');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('customer','username',$post['username']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inCustomer($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'username' => $post['username'],
        'password' => $post['password'],
        'fullname' => $post['fullname'],
        'email' => $post['email'],
        'status' => 'P',
        'phone' => $post['phone']
      );
      $query = $this->mdop->insert('customer',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upCustomer($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'username' => $post['username'],
        'password' => $post['password'],
        'fullname' => $post['fullname'],
        'email' => $post['email'],
        'phone' => $post['phone']
      );
      $query = $this->mdop->updateWhere('customer',$data,'id',$post['id']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function upCustomerPic($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'customerpic' => $post['customerpic']
      );
      $query = $this->mdop->updateWhere('customer',$data,'id',$post['id']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function deCustomer($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'status' => 'D'
      );
      $query = $this->mdop->deleteWhere('customer',$data,'id',$post['id']);
      if($query){
        return $res->withJson([
          'success' => true,
          'message' => 'Deleted succesfully.'
        ]);
      }
    }
}
