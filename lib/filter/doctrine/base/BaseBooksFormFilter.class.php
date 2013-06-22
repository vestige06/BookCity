<?php

/**
 * Books filter form base class.
 *
 * @package    BookCity
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBooksFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'price'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'isbn'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'publisher'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_onsale'         => new sfWidgetFormFilterInput(),
      'img'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'books_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BooksCategory'), 'add_empty' => true)),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'              => new sfValidatorPass(array('required' => false)),
      'price'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'description'       => new sfValidatorPass(array('required' => false)),
      'isbn'              => new sfValidatorPass(array('required' => false)),
      'author'            => new sfValidatorPass(array('required' => false)),
      'publisher'         => new sfValidatorPass(array('required' => false)),
      'is_onsale'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'img'               => new sfValidatorPass(array('required' => false)),
      'books_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('BooksCategory'), 'column' => 'books_category_id')),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('books_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Books';
  }

  public function getFields()
  {
    return array(
      'book_id'           => 'Number',
      'name'              => 'Text',
      'price'             => 'Number',
      'description'       => 'Text',
      'isbn'              => 'Text',
      'author'            => 'Text',
      'publisher'         => 'Text',
      'is_onsale'         => 'Number',
      'img'               => 'Text',
      'books_category_id' => 'ForeignKey',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
