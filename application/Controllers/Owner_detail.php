<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class Owner_detail extends BaseControllers
{

    public function getAll($req, $res, $arg)
    {
      $query = $this->mdop->get('owners_detail');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('owners_detail','id_owner',$post['id_owner']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhereId($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('owners_detail','id',$post['id']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inowners_detail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'id_owner' => $post['id_owner'],
        'services' => $post['services'],
        'price' => $post['price'],
        'promo' => $post['promo'],
        'descript' => $post['descript']
      );
      $query = $this->mdop->insert('owners_detail',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upowners_detail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'id_owner' => $post['id_owner'],
        'services' => $post['services'],
        'price' => $post['price'],
        'promo' => $post['promo'],
        'descript' => $post['descript']
      );
      $query = $this->mdop->updateWhere('owners_detail',$data,'id',$post['id']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function upowner_detailpic($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'owner_detailpic' => $post['owner_detailpic']
      );
      $query = $this->mdop->updateWhere('owners_detail',$data,'id',$post['id']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated Picture succesfully.',
        'data' => $query
      ]);
    }

    public function deowner_detail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->deleteWhere('owners_detail','id',$post['id']);
      return $res->withJson([
        'success' => true,
        'message' => 'Deleted succesfully.'
      ]);
    }
}
