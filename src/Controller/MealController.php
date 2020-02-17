<?php

namespace App\Controller;

use App\Entity\Meal;
use App\Repository\MealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MealController extends AbstractController
{
    /**
     * @Route("/", name="meal")
     */
    public function index(MealRepository $repository)
    {
        $meals = $repository->findAll();
        return $this->render('meal/index.html.twig', 
        [
            'meals' => $meals
        ]);
    }
}
