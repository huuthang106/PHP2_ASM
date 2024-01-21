<?php
    use App\Models\User;
    require_once 'vendor/autoload.php';
    $user = new User('User');
    $user->getOne(1,1);
?>