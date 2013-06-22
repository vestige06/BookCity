<?php

/**
 * Ordered form base class.
 *
 * @method Ordered getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrderedForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'orders_id'   => new sfWidgetFormInputHidden(),
      'guy_addr'    => new sfWidgetFormInputText(),
      'guy_phone'   => new sfWidgetFormInputText(),
      'is_paied'    => new sfWidgetFormInputText(),
      'guy_payway'  => new sfWidgetFormInputText(),
      'pay_status'  => new sfWidgetFormInputText(),
      'is_delivery' => new sfWidgetFormInputText(),
      'is_receipt'  => new sfWidgetFormInputText(),
      'post_money'  => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'orders_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('orders_id')), 'empty_value' => $this->getObject()->get('orders_id'), 'required' => false)),
      'guy_addr'    => new sfValidatorString(array('max_length' => 45)),
      'guy_phone'   => new sfValidatorString(array('max_length' => 45)),
      'is_paied'    => new sfValidatorInteger(array('required' => false)),
      'guy_payway'  => new sfValidatorString(array('max_length' => 45)),
      'pay_status'  => new sfValidatorString(array('max_length' => 45)),
      'is_delivery' => new sfValidatorInteger(array('required' => false)),
      'is_receipt'  => new sfValidatorInteger(array('required' => false)),
      'post_money'  => new sfValidatorNumber(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ordered[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordered';
  }

}
