<?php

/**
 * AccountTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AccountTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return AccountTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Account');
    }
}