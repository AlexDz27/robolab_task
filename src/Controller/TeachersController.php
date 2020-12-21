<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeachersController extends AbstractController
{
  /**
   * @Route("/teachers", name="teachers")
   */
  public function index(): Response
  {
    return $this->render('teachers/index.html.twig', [
      'controller_name' => 'TeachersController',
    ]);
  }
}
