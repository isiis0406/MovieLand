<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
      $repository = $this->em->getRepository(Movie::class);
      $movies = $repository->findAll();
      return $this->render('movie/index.html.twig',[
        'movies' => $movies

      ]);
   
    }
}
