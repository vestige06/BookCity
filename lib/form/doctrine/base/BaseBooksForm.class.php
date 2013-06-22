<?php

/**
 * Books form base class.
 *
 * @method Books getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBooksForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'book_id'           => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'price'             => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'isbn'              => new sfWidgetFormInputText(),
      'author'            => new sfWidgetFormInputText(),
      'publisher'         => new sfWidgetFormInputText(),
      'is_onsale'         => new sfWidgetFormInputText(),
      'img'               => new sfWidgetFormTextarea(),
      'books_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BooksCategory'), 'add_empty' => true)),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'book_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('book_id')), 'empty_value' => $this->getObject()->get('book_id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 255)),
      'price'             => new sfValidatorNumber(),
      'description'       => new sfValidatorString(),
      'isbn'              => new sfValidatorString(array('max_length' => 255)),
      'author'            => new sfValidatorString(array('max_length' => 45)),
      'publisher'         => new sfValidatorString(array('max_length' => 255)),
      'is_onsale'         => new sfValidatorInteger(array('required' => false)),
      'img'               => new sfValidatorString(),
      'books_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BooksCategory'), 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('books[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Books';
  }

}
