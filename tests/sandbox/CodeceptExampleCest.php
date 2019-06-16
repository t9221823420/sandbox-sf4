<?php

namespace App\Tests;

use App\Tests\SandboxTester;
use yozh\SandboxBundle\Service\SanboxPrivateService;
use App\Service\SanboxPublicService;

class CodeceptExampleCest
{
    /**
     * @param \App\Tests\SandboxTester $I
     */
    public function _before(SandboxTester $I)
    {
    }
    
    // tests
    public function tryToTestSandboxBundleServices(SandboxTester $I)
    {
        $service = $I->grabService(SanboxPublicService::class);
        $service = $I->grabService('test.service_container')->get(SanboxPublicService::class);

        // test service as
        $I->assertTrue($service->test());
    }
    
}
