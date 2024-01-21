<?php
namespace App\Models;
use App\Interfaces\ModelInterface;

abstract class BaseModel implements ModelInterface{
    protected $table;
    public function __construct($table) {
        $this-> table= $table;
        echo $table ,'</br>';
    }
    public function create(array $data){

    }
    public function getOne($id, $condition){
        echo 'function get one';
    }
    public function getAll() {
        
    }
    public function update($id, array $data){}
    public function delete($id){}

}
?>