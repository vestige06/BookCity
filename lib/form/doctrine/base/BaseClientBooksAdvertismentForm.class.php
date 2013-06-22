<?php

/**
 * ClientBooksAdvertisment form base class.
 *
 * @method ClientBooksAdvertisment getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClientBooksAdvertismentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'book_id'          => new sfWidgetFormInputHidden(),
      'advertisment_id'  => new sfWidgetFormInputHidden(),
      'user_category_id' => new sfWidgetFormInputHidden(),
      'orders_id'        => new sfWidgetFormInputHidden(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'book_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('book_id')), 'empty_value' => $this->getObject()->get('book_id'), 'required' => false)),
      'advertisment_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('advertisment_id')), 'empty_value' => $this->getObject()->get('advertisment_id'), 'required' => false)),
      'user_category_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_category_id')), 'empty_value' => $this->getObject()->get('user_category_id'), 'required' => false)),
      'orders_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('orders_id')), 'empty_value' => $this->getObject()->get('orders_id'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('client_books_advertisment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClientBooksAdvertisment';
  }

}
