<?php
/**
 * Created by PhpStorm.
 * UserModel.class: yanru02
 * Date: 2017/8/31
 * Time: 14:02
 * application/models/UserModel.class.php
 */

class UserModel extends Model
{
    public function getUsers()
    {
        $sql = "select * from $this->table";
        $users = $this->db->getAll($sql);
        return $users;
    }
}