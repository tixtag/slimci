<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
use Application\Controllers\Customer;
use Application\Controllers\Barbers;
use Application\Controllers\Owner_detail;
use Application\Controllers\Stylist;
use Application\Controllers\StylistDetail;
use Application\Controllers\UserPage;
use Application\Controllers\PageDetail;
use Application\Controllers\Gallery;
use Application\Library\AuthJwt_lib;


$app->post('/customer/login', Customer::class.':login');
$app->post('/customer/regis', Customer::class.':regis');

$app->group('/customer', function(){
  $this->get('/getAll', Customer::class.':getAll');
  $this->post('/getWhere', Customer::class.':getWhere');
  $this->post('/inCustomer', Customer::class.':inCustomer');
  $this->put('/upCustomer', Customer::class.':upCustomer');
  $this->put('/upCustomerPic', Customer::class.':upCustomerPic');
  $this->delete('/deCustomer', Customer::class.':deCustomer');
})->add(new AuthJwt_lib());

$app->post('/owner/login', Owner::class.':login');
$app->group('/owner', function(){
  $this->get('/getAll', Owner::class.':getAll');
  $this->post('/getWhere', Owner::class.':getWhere');
  $this->post('/inowner', Owner::class.':inowner');
  $this->put('/upowner', Owner::class.':upowner');
  $this->put('/upownerlogo', Owner::class.':upownerlogo');
  $this->delete('/deowner', Owner::class.':deowner');
})->add(new AuthJwt_lib());

$app->group('/owner_detail', function(){
  $this->get('/getAll', Owner_detail::class.':getAll');
  $this->post('/getWhere', Owner_detail::class.':getWhere');
  $this->post('/getWhereId', Owner_detail::class.':getWhereId');
  $this->post('/inowner_detail', Owner_detail::class.':inowner_detail');
  $this->put('/upowner_detail', Owner_detail::class.':upowner_detail');
  $this->put('/upowner_detailpic', Owner_detail::class.':upowner_detailpic');
  $this->delete('/deowner_detail', Owner_detail::class.':deowner_detail');
})->add(new AuthJwt_lib());

$app->post('/stylist/login', Stylist::class.':login');
$app->group('/stylist', function(){
  $this->get('/getAll', Stylist::class.':getAll');
  $this->post('/getWhere', Stylist::class.':getWhere');
  $this->post('/getWhereId', Stylist::class.':getWhereId');
  $this->post('/inStylist', Stylist::class.':inStylist');
  $this->put('/upStylist', Stylist::class.':upStylist');
  $this->put('/upStylistPic', Stylist::class.':upStylistPic');
  $this->delete('/deStylist', Stylist::class.':deStylist');
})->add(new AuthJwt_lib());

$app->group('/stylistdetail', function(){
  $this->get('/getAll', StylistDetail::class.':getAll');
  $this->post('/getWhere', StylistDetail::class.':getWhere');
  $this->post('/getWhereId', StylistDetail::class.':getWhereId');
  $this->post('/inStylistDetail', StylistDetail::class.':inStylistDetail');
  $this->put('/upStylistDetail', StylistDetail::class.':upStylistDetail');
  $this->delete('/deStylistDetail', StylistDetail::class.':deStylistDetail');
})->add(new AuthJwt_lib());

$app->post('/userpage/login', Stylist::class.':login');
$app->group('/userpage', function(){
  $this->get('/getAll', UserPage::class.':getAll');
  $this->post('/getWhere', UserPage::class.':getWhere');
  $this->post('/inUserPage', UserPage::class.':inUserPage');
  $this->put('/upUserPage', UserPage::class.':upUserPage');
  $this->delete('/deUserPage', UserPage::class.':deUserPage');
})->add(new AuthJwt_lib());

$app->group('/pagedetail', function(){
  $this->get('/getAll', PageDetail::class.':getAll');
  $this->post('/getWhere', PageDetail::class.':getWhere');
  $this->post('/getWhereId', PageDetail::class.':getWhereId');
  $this->post('/inPageDetail', PageDetail::class.':inPageDetail');
  $this->put('/upPageDetail', PageDetail::class.':upPageDetail');
  $this->put('/upPageDetailPic', PageDetail::class.':upPageDetailPic');
  $this->delete('/dePageDetail', PageDetail::class.':dePageDetail');
})->add(new AuthJwt_lib());

$app->group('/gallery', function(){
  $this->get('/getAll', Gallery::class.':getAll');
  $this->post('/getWhere', Gallery::class.':getWhere');
  $this->post('/getWhereId', Gallery::class.':getWhereId');
  $this->post('/inGallery', Gallery::class.':inGallery');
  $this->put('/upGallery', Gallery::class.':upGallery');
  $this->put('/upGalleryPic', Gallery::class.':upGalleryPic');
  $this->delete('/deGallery', Gallery::class.':deGallery');
})->add(new AuthJwt_lib());
