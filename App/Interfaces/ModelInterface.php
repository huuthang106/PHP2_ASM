<?php
namespace App\Interfaces;
// khi các phương thức bắt buộc dùng thì tạo interface

interface ModelInterface{
    //chứa các phương thức bắt buột các hàm triển khai điều phải gọi
    public function create(array $data);
    public function getOne($id,$condition);
    public function getAll();
    public function update($id, array $data);
    public function delete($id);


}
?>