<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Firebase\JWT\JWT;
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMPT;
use \PHPMailer\PHPMailer\Exception;
use \Application\Library\AuthEmail_lib;
require '../vendor/autoload.php';

class Customer extends BaseControllers
{

    public function regis($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $get = $this->mdop->getWhere('customer','email',$post['mail']);
      if(empty($get[0]->email)){
        $data = array(
          'email' => $post['mail'],
          'password' => MD5($post['pass']),
          'status' => 'P'
        );
        $query = $this->mdop->insert('customer',$data);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        // $mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->Host = 'ssl://smtp.gmail.com:465';
        $mail->Username = 'ajakpiknik@gmail.com';
        $mail->Password = '24des16#';
        $mail->SMTPOptions = array(
          'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
          )
        );
        $mail->IsHTML(true);
        $mail->Sender= 'ajakpiknik@gmail.com';
        $mail->SetFrom('ajakpiknik@gmail.com', 'Tixtag.co.id');
        $mail->Subject = 'Tixtag.co.id account activation';
        $temp = new AuthEmail_lib();

        $ket ='Dear..<br>
          Thank you for registering at Tixtag.co.id<br>
          Click the confirmation below to activate your Tixtag.co.id account.<br><br>
          Here below your login data,<br><br>
          Email: '.$post['mail'].'<br>
          Password: '.$post['pass'].'<br><br><br>
          For the sake of your Account security, please keep your personal data from unauthorized persons with this Login Data.<br>
          Thank you<br>
          <br>Salam<br> Support Tixtag.co.id <br><br><br><br>';

        $mail->Body = $temp->fh_verifikasi(
                              $aktifUrl='',
                              $ket,
                              $judul='Confirmation of registration.',
                              $label='Confirmation',
                              $email='tixtag@gmail.com',
                              $telp='+62 812 8052 5231'
                            );

        $mail->AddAddress($post['mail']);
        $mail->Send();
        return $res->withJson([
          'success' => true,
          'message' => 'Registration is successful please check email.',
          'data' => $query
        ]);
      }else{
        return $res->withJson([
          'success' => false,
          'message' => 'This email is already registered.',
          'data' => $query
        ]);
      }
    }

    public function login($req, $res, $arg)
    {
      $post = $req->getParsedBody();
      $data = array(
        'email' => $post['mail'],
        'password' => MD5($post['pass']),
        'status' => 'A'
      );
      $query = $this->mdop->getWhereArray('customer',$data);

      if(empty($query[0]->email)){
        return $res->withJson([
          'success' => false, 'message' => 'Email or Password incorrect.'
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
