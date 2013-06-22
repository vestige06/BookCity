<?php

/**
 * OrderDetail form base class.
 *
 * @method OrderDetail getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'detail_id'   => new sfWidgetFormInputHidden(),
      'number'      => new sfWidgetFormInputText(),
      'discount'    => new sfWidgetFormInputText(),
      'book_name'   => new sfWidgetFormInputText(),
      'book_price'  => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'orders_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ordered'), 'add_empty' => true)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'detail_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('detail_id')), 'empty_value' => $this->getObject()->get('detail_id'), 'required' => false)),
      'number'      => new sfValidatorInteger(),
      'discount'    => new sfValidatorNumber(),
      'book_name'   => new sfValidatorString(array('max_length' => 45)),
      'book_price'  => new sfValidatorNumber(),
      'description' => new sfValidatorString(),
      'orders_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ordered'), 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('order_detail[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetail';
  }

}
