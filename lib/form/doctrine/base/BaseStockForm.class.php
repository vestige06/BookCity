<?php

/**
 * Stock form base class.
 *
 * @method Stock getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStockForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'stock_id'     => new sfWidgetFormInputHidden(),
      'count'        => new sfWidgetFormInputText(),
      'income_price' => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'stock_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('stock_id')), 'empty_value' => $this->getObject()->get('stock_id'), 'required' => false)),
      'count'        => new sfValidatorInteger(),
      'income_price' => new sfValidatorNumber(),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('stock[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stock';
  }

}
