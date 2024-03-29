<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/hello', name: 'hello')]
class Hello extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->json(['message' => 'Hello!']);
    }
}
