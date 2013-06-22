<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uid'              => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormInputText(),
      'password'         => new sfWidgetFormInputText(),
      'user_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserCategory'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'uid'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uid')), 'empty_value' => $this->getObject()->get('uid'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 45)),
      'password'         => new sfValidatorString(array('max_length' => 45)),
      'user_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserCategory'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
