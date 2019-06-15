<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use yozh\SandboxBundle\Service\SanboxPrivateService;
use yozh\SandboxBundle\Service\SanboxPublicService;
use Symfony\Component\Routing\Annotation\Route;

class SandboxController extends AbstractController
{
    /**
     * @Route("/sandbox/hello/{val}")
     */
    public function hello($val, SanboxPublicService $publicService, SanboxPrivateService $privateService )
    {
        $publicService->hello();
        $privateService->hello();
        
        return $this->render('sandbox/index.html.twig', [
            'val' => $val,
        ]);
    }
    
    /**
     * @Route("/api/hello/{val}")
     */
    public function apiHello($val)
    {
        return $this->json([
            'val' => $val,
            'foo' => 'bar',
        ]);
    }
}
