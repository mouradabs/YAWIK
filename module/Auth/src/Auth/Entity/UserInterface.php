<?php
/**
 * Cross Applicant Management
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   GPLv3
 */

/** Auth model */
namespace Auth\Entity;

use Core\Entity\IdentifiableEntityInterface;
use Core\Entity\EntityInterface;
use Zend\Permissions\Acl\Role\RoleInterface;

/**
 * User model interface 
 */
interface UserInterface extends IdentifiableEntityInterface, RoleInterface
{
    
    /**
     * Sets the display name
     *
     * @param string $name
     */
    public function setLogin($login);
    
    /**
     * Gets the display name
     *
     * @return string
     */
    public function getLogin();
    
    public function setRole($role);
    public function getRole();
    public function setInfo(InfoInterface $info);
    public function getInfo();    
    public function setPassword($password);
    
    public function setCredential($credential);
    
    public function getCredential();
    
    /**
     * Sets the profile info from Hybridauth
     * 
     * @param array $profile
     */
    public function setProfile(array $profile);
    
    /**
     * Gets the profile info from Hybridauth
     * 
     * @return array
     */
    public function getProfile();
    
    //public function setSettings(array $settings);
    public function getSettings($module);
    
}