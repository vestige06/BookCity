<?php

/**
 * Promotion filter form base class.
 *
 * @package    BookCity
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePromotionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'price'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'discount'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_recommend' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_active'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment'      => new sfWidgetFormFilterInput(),
      'book_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Books'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'price'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'discount'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'is_recommend' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_active'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comment'      => new sfValidatorPass(array('required' => false)),
      'book_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Books'), 'column' => 'book_id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('promotion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promotion';
  }

  public function getFields()
  {
    return array(
      'promotion_id' => 'Number',
      'price'        => 'Number',
      'discount'     => 'Number',
      'is_recommend' => 'Number',
      'is_active'    => 'Number',
      'comment'      => 'Text',
      'book_id'      => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
