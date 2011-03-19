<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ProfileOrganization', 'doctrine');

/**
 * BaseProfileOrganization
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $account_id
 * @property string $name
 * @property string $brand_name
 * @property string $slogan
 * @property string $cui
 * @property string $contact_name
 * @property string $contact_job_title
 * @property string $contact_email
 * @property string $contact_phone
 * @property integer $location_id
 * @property Location $Location
 * @property Account $Account
 * 
 * @method integer             getAccountId()         Returns the current record's "account_id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method string              getBrandName()         Returns the current record's "brand_name" value
 * @method string              getSlogan()            Returns the current record's "slogan" value
 * @method string              getCui()               Returns the current record's "cui" value
 * @method string              getContactName()       Returns the current record's "contact_name" value
 * @method string              getContactJobTitle()   Returns the current record's "contact_job_title" value
 * @method string              getContactEmail()      Returns the current record's "contact_email" value
 * @method string              getContactPhone()      Returns the current record's "contact_phone" value
 * @method integer             getLocationId()        Returns the current record's "location_id" value
 * @method Location            getLocation()          Returns the current record's "Location" value
 * @method Account             getAccount()           Returns the current record's "Account" value
 * @method ProfileOrganization setAccountId()         Sets the current record's "account_id" value
 * @method ProfileOrganization setName()              Sets the current record's "name" value
 * @method ProfileOrganization setBrandName()         Sets the current record's "brand_name" value
 * @method ProfileOrganization setSlogan()            Sets the current record's "slogan" value
 * @method ProfileOrganization setCui()               Sets the current record's "cui" value
 * @method ProfileOrganization setContactName()       Sets the current record's "contact_name" value
 * @method ProfileOrganization setContactJobTitle()   Sets the current record's "contact_job_title" value
 * @method ProfileOrganization setContactEmail()      Sets the current record's "contact_email" value
 * @method ProfileOrganization setContactPhone()      Sets the current record's "contact_phone" value
 * @method ProfileOrganization setLocationId()        Sets the current record's "location_id" value
 * @method ProfileOrganization setLocation()          Sets the current record's "Location" value
 * @method ProfileOrganization setAccount()           Sets the current record's "Account" value
 * 
 * @package    newe
 * @subpackage model
 * @author     Iulian Manea <iulian.manea@impurelabs.com>
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseProfileOrganization extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('profile_organization');
        $this->hasColumn('account_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('brand_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('slogan', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('cui', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('contact_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('contact_job_title', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('contact_email', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('contact_phone', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('location_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => true,
             'length' => 4,
             ));

        $this->option('symfony', array(
             'filter' => false,
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Location', array(
             'local' => 'location_id',
             'foreign' => 'id'));

        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id'));
    }
}