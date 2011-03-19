<?php

/**
 * AccountRememberKeyTable
 */
class AccountRememberKeyTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return AccountRememberKeyTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AccountRememberKey');
    }
}