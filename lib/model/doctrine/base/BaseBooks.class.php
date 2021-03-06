<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Books', 'doctrine');

/**
 * BaseBooks
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $book_id
 * @property string $name
 * @property float $price
 * @property string $description
 * @property string $isbn
 * @property string $author
 * @property string $publisher
 * @property integer $is_onsale
 * @property string $img
 * @property integer $books_category_id
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property BooksCategory $BooksCategory
 * @property Doctrine_Collection $ClientBooksAdvertisment
 * @property Doctrine_Collection $Promotion
 * 
 * @method integer             getBookId()                  Returns the current record's "book_id" value
 * @method string              getName()                    Returns the current record's "name" value
 * @method float               getPrice()                   Returns the current record's "price" value
 * @method string              getDescription()             Returns the current record's "description" value
 * @method string              getIsbn()                    Returns the current record's "isbn" value
 * @method string              getAuthor()                  Returns the current record's "author" value
 * @method string              getPublisher()               Returns the current record's "publisher" value
 * @method integer             getIsOnsale()                Returns the current record's "is_onsale" value
 * @method string              getImg()                     Returns the current record's "img" value
 * @method integer             getBooksCategoryId()         Returns the current record's "books_category_id" value
 * @method timestamp           getCreatedAt()               Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()               Returns the current record's "updated_at" value
 * @method BooksCategory       getBooksCategory()           Returns the current record's "BooksCategory" value
 * @method Doctrine_Collection getClientBooksAdvertisment() Returns the current record's "ClientBooksAdvertisment" collection
 * @method Doctrine_Collection getPromotion()               Returns the current record's "Promotion" collection
 * @method Books               setBookId()                  Sets the current record's "book_id" value
 * @method Books               setName()                    Sets the current record's "name" value
 * @method Books               setPrice()                   Sets the current record's "price" value
 * @method Books               setDescription()             Sets the current record's "description" value
 * @method Books               setIsbn()                    Sets the current record's "isbn" value
 * @method Books               setAuthor()                  Sets the current record's "author" value
 * @method Books               setPublisher()               Sets the current record's "publisher" value
 * @method Books               setIsOnsale()                Sets the current record's "is_onsale" value
 * @method Books               setImg()                     Sets the current record's "img" value
 * @method Books               setBooksCategoryId()         Sets the current record's "books_category_id" value
 * @method Books               setCreatedAt()               Sets the current record's "created_at" value
 * @method Books               setUpdatedAt()               Sets the current record's "updated_at" value
 * @method Books               setBooksCategory()           Sets the current record's "BooksCategory" value
 * @method Books               setClientBooksAdvertisment() Sets the current record's "ClientBooksAdvertisment" collection
 * @method Books               setPromotion()               Sets the current record's "Promotion" collection
 * 
 * @package    BookCity
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBooks extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('books');
        $this->hasColumn('book_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('price', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('isbn', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('author', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('publisher', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('is_onsale', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('img', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('books_category_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
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
        $this->hasOne('BooksCategory', array(
             'local' => 'books_category_id',
             'foreign' => 'books_category_id'));

        $this->hasMany('ClientBooksAdvertisment', array(
             'local' => 'book_id',
             'foreign' => 'book_id'));

        $this->hasMany('Promotion', array(
             'local' => 'book_id',
             'foreign' => 'book_id'));
    }
}