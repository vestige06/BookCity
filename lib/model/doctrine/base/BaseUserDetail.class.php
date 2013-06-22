<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UserDetail', 'doctrine');

/**
 * BaseUserDetail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_detail_id
 * @property string $email
 * @property string $tel
 * @property string $question
 * @property string $answer
 * @property integer $sex
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer    getUserDetailId()   Returns the current record's "user_detail_id" value
 * @method string     getEmail()          Returns the current record's "email" value
 * @method string     getTel()            Returns the current record's "tel" value
 * @method string     getQuestion()       Returns the current record's "question" value
 * @method string     getAnswer()         Returns the current record's "answer" value
 * @method integer    getSex()            Returns the current record's "sex" value
 * @method timestamp  getCreatedAt()      Returns the current record's "created_at" value
 * @method timestamp  getUpdatedAt()      Returns the current record's "updated_at" value
 * @method UserDetail setUserDetailId()   Sets the current record's "user_detail_id" value
 * @method UserDetail setEmail()          Sets the current record's "email" value
 * @method UserDetail setTel()            Sets the current record's "tel" value
 * @method UserDetail setQuestion()       Sets the current record's "question" value
 * @method UserDetail setAnswer()         Sets the current record's "answer" value
 * @method UserDetail setSex()            Sets the current record's "sex" value
 * @method UserDetail setCreatedAt()      Sets the current record's "created_at" value
 * @method UserDetail setUpdatedAt()      Sets the current record's "updated_at" value
 * 
 * @package    BookCity
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserDetail extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_detail');
        $this->hasColumn('user_detail_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('tel', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('question', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('answer', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('sex', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}