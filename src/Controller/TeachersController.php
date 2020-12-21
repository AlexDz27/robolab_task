<?php

namespace App\Controller;

use App\Entity\Teacher;
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
    $teachers = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->findAll()
    ;

    return $this->render('teachers/index.html.twig', [
      'teachers' => $teachers,
    ]);
  }

  /**
   * @Route("/teacher/{id}", name="teacher_show")
   */
  public function show(int $id): Response
  {
    /**
     * @var $teacher Teacher
     */
    $teacher = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->find($id)
    ;

    if (!$teacher) {
      throw $this->createNotFoundException(
        'Учителя с id ' . $id . ' не найдено!'
      );
    }

    return $this->render('teachers/show.html.twig', [
        'teacher' => $teacher
     ]);
  }

  /**
   * @Route("/teachers/test/create", name="teachers_test_create")
   */
  public function createTestTeacher(): Response
  {
    $entityManager = $this->getDoctrine()->getManager();

    $teacher = new Teacher();
    $teacher->setName('Валентина');
    $teacher->setMiddleName('Ивановна');
    $teacher->setSurname('Чайкова');

    $entityManager->persist($teacher);

    $entityManager->flush();

    return new Response('Saved new teacher with id: ' . $teacher->getId());
  }
}
