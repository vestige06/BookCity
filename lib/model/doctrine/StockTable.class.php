<?php

/**
 * StockTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class StockTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object StockTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Stock');
    }
}