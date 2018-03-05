<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Models;
use Illuminate\Database\Eloquent\Model;

class M_dop extends Model
{

  public $timestamps = true;
  protected $guarded = [];
  protected static $_table;

  public static function setName($table, $parms = Array())
  {
      $ret = null;
      if (class_exists($table)){
          $ret = new $table($parms);
      } else {
          $ret = new static($parms);
          $ret->setTable($table);
      }
      return $ret;
  }

  public function setTable($table)
  {
    self::$_table = $table;
  }

  public function getTable()
  {
    return self::$_table;
  }

// set column to save insert or update
  public function setColumnArr($where,$data)
  {
    $arr = array();
    foreach ($data as $key => $row) {
      $set = $where->$key = $row;
      $arr[] = $set;
    }
    return $arr;
  }

// delete data table
  public function deleteWhere($table, $column, $key)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->where($column,$key)->delete();
    return $req;
  }

// insert table all data
  public function insert($table, $data)
  {
    $this->setTable($table);
    $query = $this;
    $this->setColumnArr($query,$data);
    $req = $query->save();
    return $req;
  }

// update table with condition
  public function updateWhere($table, $data, $column, $key)
  {
    $this->setTable($table);
    $query = $this;
    $query->where($column,$key);
    $this->setColumnArr($query,$data);
    $req = $query->save();
    return $req;
  }

// update table with array condition
  public function updateWhereArray($table, $data, $columnKeyArr)
  {
    $this->setTable($table);
    $query = $this;
    $where = array();
    foreach($columnKeyArr as $column => $val){
        $where[] = [$column,$val];
    }
    $query->where($where);
    $this->setColumnArr($query,$data);
    $req = $query->save();
    return $req;
  }

// get table all data
  public function get($table)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->all();
    return $req;
  }

// get table all data and order by
  public function getOrder($table, $order, $short)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->orderBy($order, $short)->get();
    return $req;
  }

// get table with condition where
  public function getWhere($table, $column, $key)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->where($column,$key)->get();
    return $req;
  }

// get table with condition where and order by
  public function getWhereOrder($table, $column, $key, $order, $short)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->where($column,$key)->orderBy($order, $short)->get();
    return $req;
  }

// get table with array key column and value condition where
  public function getWhereArray($table, $array)
  {
    $this->setTable($table);
    $query = $this;
    $where = array();
    foreach($array as $column => $val){
        $where[] = [$column,$val];
    }
    $req = $query->where($where)->get();
    return $req;
  }

// get table with array key column and value condition where and arder by
  public function getWhereOrderArray($table, $whereArray, $orderArray)
  {
    $this->setTable($table);
    $query = $this;
    $where = array();
    foreach($whereArray as $column => $val){
        $where[] = [$column,$val];
    }
    $order = array();
    foreach($orderArray as $column => $val){
        $order[] = [$column,$val];
    }
    $req = $query->where($where)->orderBy($order)->get();
    return $req;
  }

// get table with condition like
  public function getLike($table, $column, $key)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->where($column,'like',$key)->get();
    return $req;
  }

// get table with condition like and order by
  public function getLikeOrder($table, $column, $key, $order, $short)
  {
    $this->setTable($table);
    $query = $this;
    $req = $query->where($column,'like',$key)->orderBy($order, $short)->get();
    return $req;
  }

// get table with array key column and value condition like
  public function getLikeArray($table, $array)
  {
    $this->setTable($table);
    $query = $this;
    $like = array();
    foreach($array as $column => $val){
        $like[] = [$column, 'like', '%'.$val.'%'];
    }
    $req = $query->where($like)->get();
    return $req;
  }

// get table with array key column and value condition like and order by
  public function getLikeOrderArray($table, $likeArray, $orderArray)
  {
    $this->setTable($table);
    $query = $this;
    $like = array();
    foreach($likeArray as $column => $val){
        $like[] = [$column, 'like', '%'.$val.'%'];
    }
    $order = array();
    foreach($orderArray as $column => $val){
        $order[] = [$column, $val];
    }
    $req = $query->where($like)->orderBy($order)->get();
    return $req;
  }

}
