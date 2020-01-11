<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginInfoController extends AbstractController
{
    /**
     * @Route("/login/info", name="login_info")
     */
    public function index()
    {
        return $this->render('login_info/index.html.twig', [
            'controller_name' => 'LoginInfoController',
        ]);
    }
}
