<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class PageDetail extends BaseControllers
{

    public function getAll($req, $res, $arg)
    {
      $query = $this->mdop->get('pagect');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('pagect','id_usersct',$post['id_usersct']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhereId($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('pagect','id_pagect',$post['id_pagect']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inPageDetail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'pagetitle' => $post['pagetitle'],
        'pagesub' => $post['pagesub'],
        'pagedescr' => $post['pagedescr'],
        'pagestatus' => 'P',
        'id_usersct' => $post['id_usersct']
      );
      $query = $this->mdop->insert('pagect',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upPageDetail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'pagetitle' => $post['pagetitle'],
        'pagesub' => $post['pagesub'],
        'pagedescr' => $post['pagedescr'],
        'id_usersct' => $post['id_usersct']
      );
      $query = $this->mdop->updateWhere('pagect',$data,'id_pagect',$post['id_pagect']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function upPageDetailPic($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'pagepic' => $post['pagepic']
      );
      $query = $this->mdop->updateWhere('pagect',$data,'id_pagect',$post['id_pagect']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated Picture succesfully.',
        'data' => $query
      ]);
    }

    public function dePageDetail($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'pagestatus' => 'D'
      );
      $query = $this->mdop->deleteWhere('pagect',$data,'id_pagect',$post['id_pagect']);
      if($query){
        return $res->withJson([
          'success' => true,
          'message' => 'Deleted succesfully.'
        ]);
      }
    }
}
