<?php

/**
 * UserDetail form base class.
 *
 * @method UserDetail getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserDetailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_detail_id' => new sfWidgetFormInputHidden(),
      'email'          => new sfWidgetFormInputText(),
      'tel'            => new sfWidgetFormInputText(),
      'question'       => new sfWidgetFormInputText(),
      'answer'         => new sfWidgetFormInputText(),
      'sex'            => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'user_detail_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_detail_id')), 'empty_value' => $this->getObject()->get('user_detail_id'), 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 255)),
      'tel'            => new sfValidatorString(array('max_length' => 45)),
      'question'       => new sfValidatorString(array('max_length' => 45)),
      'answer'         => new sfValidatorString(array('max_length' => 45)),
      'sex'            => new sfValidatorInteger(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user_detail[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserDetail';
  }

}
