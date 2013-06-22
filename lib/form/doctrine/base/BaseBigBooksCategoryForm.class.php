<?php

/**
 * BigBooksCategory form base class.
 *
 * @method BigBooksCategory getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBigBooksCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'big_books_category_id' => new sfWidgetFormInputHidden(),
      'name'                  => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'big_books_category_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('big_books_category_id')), 'empty_value' => $this->getObject()->get('big_books_category_id'), 'required' => false)),
      'name'                  => new sfValidatorString(array('max_length' => 45)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('big_books_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BigBooksCategory';
  }

}
