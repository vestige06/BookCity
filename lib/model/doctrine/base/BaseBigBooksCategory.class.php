<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BigBooksCategory', 'doctrine');

/**
 * BaseBigBooksCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $big_books_category_id
 * @property string $name
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $BooksCategory
 * 
 * @method integer             getBigBooksCategoryId()    Returns the current record's "big_books_category_id" value
 * @method string              getName()                  Returns the current record's "name" value
 * @method timestamp           getCreatedAt()             Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()             Returns the current record's "updated_at" value
 * @method Doctrine_Collection getBooksCategory()         Returns the current record's "BooksCategory" collection
 * @method BigBooksCategory    setBigBooksCategoryId()    Sets the current record's "big_books_category_id" value
 * @method BigBooksCategory    setName()                  Sets the current record's "name" value
 * @method BigBooksCategory    setCreatedAt()             Sets the current record's "created_at" value
 * @method BigBooksCategory    setUpdatedAt()             Sets the current record's "updated_at" value
 * @method BigBooksCategory    setBooksCategory()         Sets the current record's "BooksCategory" collection
 * 
 * @package    BookCity
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBigBooksCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('big_books_category');
        $this->hasColumn('big_books_category_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
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
        $this->hasMany('BooksCategory', array(
             'local' => 'big_books_category_id',
             'foreign' => 'big_books_category_id'));
    }
}