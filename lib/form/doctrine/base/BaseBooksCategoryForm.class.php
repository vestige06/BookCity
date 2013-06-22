<?php

/**
 * BooksCategory form base class.
 *
 * @method BooksCategory getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBooksCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'books_category_id'     => new sfWidgetFormInputHidden(),
      'name'                  => new sfWidgetFormInputText(),
      'big_books_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BigBooksCategory'), 'add_empty' => true)),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'books_category_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('books_category_id')), 'empty_value' => $this->getObject()->get('books_category_id'), 'required' => false)),
      'name'                  => new sfValidatorString(array('max_length' => 45)),
      'big_books_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BigBooksCategory'), 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('books_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BooksCategory';
  }

}
