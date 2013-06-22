<?php

/**
 * Promotion form base class.
 *
 * @method Promotion getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePromotionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'promotion_id' => new sfWidgetFormInputHidden(),
      'price'        => new sfWidgetFormInputText(),
      'discount'     => new sfWidgetFormInputText(),
      'is_recommend' => new sfWidgetFormInputText(),
      'is_active'    => new sfWidgetFormInputText(),
      'comment'      => new sfWidgetFormInputText(),
      'book_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Books'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'promotion_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('promotion_id')), 'empty_value' => $this->getObject()->get('promotion_id'), 'required' => false)),
      'price'        => new sfValidatorNumber(),
      'discount'     => new sfValidatorNumber(),
      'is_recommend' => new sfValidatorInteger(array('required' => false)),
      'is_active'    => new sfValidatorInteger(array('required' => false)),
      'comment'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'book_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Books'), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('promotion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promotion';
  }

}
