<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CustomerController extends AbstractController
{
    #[Route('/customer', name: 'customer')]
    public function index(): Response
    {
        return $this->render('customer/customer.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
}
