<?php
/**
 * Created by PhpStorm.
 * UserModel.class: yanru02
 * Date: 2017/8/31
 * Time: 12:22
 */

class Load
{
    // Load library classes
    public function library($lib)
    {
        include LIB_PATH . "$lib.class.php";
    }

    // loader helper functions. Naming conversion is xxx_helper.php;
    public function helper($helper)
    {
        include HELPER_PATH . "{$helper}_helper.php";
    }
}