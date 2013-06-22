<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClientBooksAdvertisment', 'doctrine');

/**
 * BaseClientBooksAdvertisment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $book_id
 * @property integer $advertisment_id
 * @property integer $user_category_id
 * @property integer $orders_id
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Advertisment $Advertisment
 * @property Books $Books
 * @property Ordered $Ordered
 * 
 * @method integer                 getBookId()           Returns the current record's "book_id" value
 * @method integer                 getAdvertismentId()   Returns the current record's "advertisment_id" value
 * @method integer                 getUserCategoryId()   Returns the current record's "user_category_id" value
 * @method integer                 getOrdersId()         Returns the current record's "orders_id" value
 * @method timestamp               getCreatedAt()        Returns the current record's "created_at" value
 * @method timestamp               getUpdatedAt()        Returns the current record's "updated_at" value
 * @method Advertisment            getAdvertisment()     Returns the current record's "Advertisment" value
 * @method Books                   getBooks()            Returns the current record's "Books" value
 * @method Ordered                 getOrdered()          Returns the current record's "Ordered" value
 * @method ClientBooksAdvertisment setBookId()           Sets the current record's "book_id" value
 * @method ClientBooksAdvertisment setAdvertismentId()   Sets the current record's "advertisment_id" value
 * @method ClientBooksAdvertisment setUserCategoryId()   Sets the current record's "user_category_id" value
 * @method ClientBooksAdvertisment setOrdersId()         Sets the current record's "orders_id" value
 * @method ClientBooksAdvertisment setCreatedAt()        Sets the current record's "created_at" value
 * @method ClientBooksAdvertisment setUpdatedAt()        Sets the current record's "updated_at" value
 * @method ClientBooksAdvertisment setAdvertisment()     Sets the current record's "Advertisment" value
 * @method ClientBooksAdvertisment setBooks()            Sets the current record's "Books" value
 * @method ClientBooksAdvertisment setOrdered()          Sets the current record's "Ordered" value
 * 
 * @package    BookCity
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClientBooksAdvertisment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('client_books_advertisment');
        $this->hasColumn('book_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('advertisment_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('user_category_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('orders_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
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
        $this->hasOne('Advertisment', array(
             'local' => 'advertisment_id',
             'foreign' => 'advertisment_id'));

        $this->hasOne('Books', array(
             'local' => 'book_id',
             'foreign' => 'book_id'));

        $this->hasOne('Ordered', array(
             'local' => 'orders_id',
             'foreign' => 'orders_id'));
    }
}