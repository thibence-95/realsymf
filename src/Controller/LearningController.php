<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Routing\Annotation\Route;


class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */
    public function index()
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController'
        ]);
    }

    /**
     * @Route("/change", name="changeName")
     */
    public function changeMyName()
    {

        return $this->render('learning/about.html.twig', [
            'controller_name' => 'LearningController + changename func',
            'ischangeName' => 'dit kan ook een formulier en shitsl zen',
        ]);
    }

    /**
     * @Route("/about", name="aboutMe")
     */
    public function aboutMe()
    {
        return $this->render('learning/about.html.twig', [
            'controller_name' => 'LearningController + about me  func',
            'ischangeName' => 'dit kan ook een about me pagina zen',
        ]);
    }
}
