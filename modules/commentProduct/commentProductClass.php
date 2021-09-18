<?php

class commentProductClass extends ObjectModelCore
{
    public $id_comment;
    public $user_id;
    public $product_id;
    public $name;
    public $comment;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => _DB_PREFIX_ . 'all_product_comment',
        'primary' => 'id_comment',
        'multilang' => false,
        'fields' => array(
            '$user_id' => ['type' => self::TYPE_INT, 'size' => 10],
            '$product_id' => ['type' => self::TYPE_INT, 'size' => 10],
            '$name' => ['type' => self::TYPE_STRING, 'lang' => true, 'size' => 50],
            '$comment' => ['type' => self::TYPE_STRING, 'size' => 255],
        )
    );

    public function hello() {
        $hello = "helo";
    }
}