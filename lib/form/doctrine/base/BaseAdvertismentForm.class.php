<?php

/**
 * Advertisment form base class.
 *
 * @method Advertisment getObject() Returns the current form's model object
 *
 * @package    BookCity
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdvertismentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'advertisment_id' => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'url'             => new sfWidgetFormTextarea(),
      'img_url'         => new sfWidgetFormTextarea(),
      'comment'         => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'advertisment_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('advertisment_id')), 'empty_value' => $this->getObject()->get('advertisment_id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 45)),
      'url'             => new sfValidatorString(),
      'img_url'         => new sfValidatorString(),
      'comment'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('advertisment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Advertisment';
  }

}
