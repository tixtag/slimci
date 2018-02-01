<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;

class Gallery extends BaseControllers
{

    public function getAll($req, $res, $arg)
    {
      $query = $this->mdop->get('gallery');
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhere($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('gallery','id_barber',$post['id_barber']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function getWhereId($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->getWhere('gallery','id_gallery',$post['id_gallery']);
      return $res->withJson([
        'success' => true,
        'message' => 'Get succesfully.',
        'data' => $query
      ]);
    }

    public function inGallery($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'galleryname' => $post['galleryname'],
        'gallerydesc' => $post['gallerydesc'],
        'id_barber' => $post['id_barber']
      );
      $query = $this->mdop->insert('gallery',$data);
      return $res->withJson([
        'success' => true,
        'message' => 'Inserted succesfully.',
        'data' => $query
      ]);
    }

    public function upGallery($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'galleryname' => $post['galleryname'],
        'gallerydesc' => $post['gallerydesc'],
        'id_barber' => $post['id_barber']
      );
      $query = $this->mdop->updateWhere('gallery',$data,'id_gallery',$post['id_gallery']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated succesfully.',
        'data' => $query
      ]);
    }

    public function upGalleryPic($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'gallerypic' => $post['gallerypic']
      );
      $query = $this->mdop->updateWhere('gallery',$data,'id_gallery',$post['id_gallery']);
      return $res->withJson([
        'success' => true,
        'message' => 'Updated Picture succesfully.',
        'data' => $query
      ]);
    }

    public function deGallery($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $query = $this->mdop->deleteWhere('gallery','id_gallery',$post['id_gallery']);
      return $res->withJson([
        'success' => true,
        'message' => 'Deleted succesfully.'
      ]);
    }
}
