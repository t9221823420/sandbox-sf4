<?php

namespace App\Tests\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Module;
use League\FactoryMuffin\Faker\Facade as Faker;

class Factories extends Module
{
    public function _beforeSuite($settings = [])
    {
        $factory = $this->getModule('DataFactory');
        // let us get EntityManager from Doctrine
        $em = $this->getModule('Doctrine2')->_getEntityManager();
        
        /**
         * examples:
         * get real company from database
         * 'company' => $em->getRepository(Company::class)->find(),
         *
         * let's generate a profile for each created user
         * receive an entity and set it via `setProfile` method
         * UserProfile factory should be defined as well
         * 'profile' => 'entity|'.UserProfile::class
         */
        $factory->_define(ContentTheme::class, [
            'name' => Faker::name(),
        ]);
        
    }
}
