<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addpromotion extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('promotion', array(
             'promotion_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'price' => 
             array(
              'type' => 'double',
              'notnull' => true,
              'length' => NULL,
             ),
             'discount' => 
             array(
              'type' => 'float',
              'notnull' => true,
              'length' => NULL,
             ),
             'is_recommend' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'is_active' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'comment' => 
             array(
              'type' => 'varchar',
              'length' => 255,
             ),
             'book_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'type' => 'INNODB',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'promotion_id',
             ),
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('promotion');
    }
}