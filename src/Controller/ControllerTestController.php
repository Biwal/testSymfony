<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ControllerTestController extends AbstractController
{
    /**
     * @Route("/controller/test", name="controller_test")
     */
    public function index()
    {
        return $this->render('controller_test/index.html.twig', [
            'controller_name' => 'ControllerTestController',
        ]);
    }
}
