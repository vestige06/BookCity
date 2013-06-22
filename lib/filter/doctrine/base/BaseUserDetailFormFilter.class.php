<?php

/**
 * UserDetail filter form base class.
 *
 * @package    BookCity
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserDetailFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'email'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tel'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'question'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'answer'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sex'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'email'          => new sfValidatorPass(array('required' => false)),
      'tel'            => new sfValidatorPass(array('required' => false)),
      'question'       => new sfValidatorPass(array('required' => false)),
      'answer'         => new sfValidatorPass(array('required' => false)),
      'sex'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_detail_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserDetail';
  }

  public function getFields()
  {
    return array(
      'user_detail_id' => 'Number',
      'email'          => 'Text',
      'tel'            => 'Text',
      'question'       => 'Text',
      'answer'         => 'Text',
      'sex'            => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
