<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class UserPage extends BaseControllers
{

    public function login($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'usernamect' => $post['usernamect'],
        'passwordct' => $post['passwordct'],
        'statusct' => 'A'
      );
      $query = $this->mdop->getWhereArray('usersct',$data);

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
            "usernamect" => $query[0]->usernamect
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
      $query = $this->mdop->get('usersct');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('usersct','usernamect',$post['usernamect']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inUserPage($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'usernamect' => $post['usernamect'],
        'passwordct' => $post['passwordct'],
        'fullnamect' => $post['fullnamect'],
        'emailct' => $post['emailct'],
        'statusct' => 'P'
      );
      $query = $this->mdop->insert('usersct',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upUserPage($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'usernamect' => $post['usernamect'],
        'passwordct' => $post['passwordct'],
        'fullnamect' => $post['fullnamect'],
        'emailct' => $post['emailct']
      );
      $query = $this->mdop->updateWhere('usersct',$data,'id_usersct',$post['id_usersct']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function deUserPage($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'statusct' => 'D'
      );
      $query = $this->mdop->deleteWhere('usersct',$data,'id_usersct',$post['id_usersct']);
      if($query){
        return $res->withJson([
          'success' => true,
          'message' => 'Deleted succesfully.'
        ]);
      }
    }
}
