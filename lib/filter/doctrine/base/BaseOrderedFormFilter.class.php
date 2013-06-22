<?php

/**
 * Ordered filter form base class.
 *
 * @package    BookCity
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOrderedFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'guy_addr'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'guy_phone'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_paied'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'guy_payway'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pay_status'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_delivery' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_receipt'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_money'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'guy_addr'    => new sfValidatorPass(array('required' => false)),
      'guy_phone'   => new sfValidatorPass(array('required' => false)),
      'is_paied'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'guy_payway'  => new sfValidatorPass(array('required' => false)),
      'pay_status'  => new sfValidatorPass(array('required' => false)),
      'is_delivery' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_receipt'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'post_money'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ordered_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordered';
  }

  public function getFields()
  {
    return array(
      'orders_id'   => 'Number',
      'guy_addr'    => 'Text',
      'guy_phone'   => 'Text',
      'is_paied'    => 'Number',
      'guy_payway'  => 'Text',
      'pay_status'  => 'Text',
      'is_delivery' => 'Number',
      'is_receipt'  => 'Number',
      'post_money'  => 'Number',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
