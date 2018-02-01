<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class StylistDetail extends BaseControllers
{

    public function getAll($req, $res, $arg)
    {
      $query = $this->mdop->get('stylistdetail');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('stylistdetail','id_stylist',$post['id_stylist']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhereId($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('stylistdetail','stylists',$post['stylists']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inStylistDetail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'stylistsname' => $post['stylistsname'],
        'stylistsday' => $post['stylistsday'],
        'stylistsin' => $post['stylistsin'],
        'stylistsout' => $post['stylistsout'],
        'id_stylist' => $post['id_stylist']
      );
      $query = $this->mdop->insert('stylistdetail',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upStylistDetail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'stylistsname' => $post['stylistsname'],
        'stylistsday' => $post['stylistsday'],
        'stylistsin' => $post['stylistsin'],
        'stylistsout' => $post['stylistsout'],
        'id_stylist' => $post['id_stylist']
      );
      $query = $this->mdop->updateWhere('stylistdetail',$data,'stylists',$post['stylists']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function deStylistDetail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->deleteWhere('stylistdetail','stylists',$post['stylists']);
      return $res->withJson([
        'success' => true,
        'message' => 'Deleted succesfully.'
      ]);
    }
}
