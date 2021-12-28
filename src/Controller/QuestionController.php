<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     *
     * @Route("/")
     *
     * @return Response
     */
    public function homepage(): Response
    {

        return new Response('What a bewitching controller we have conjured!');
    }


    /**
     * @Route("/questions/{slug}")
     *
     * @return Response
     */
    public function show($slug): Response
    {

        $answers = [
          'Make sure your cat is sitting purrrfectly still',
          'Honestly, I like furry shoes better than MY cat',
          'Maybe... try saying the spell backwards?'
        ];

        return $this->render('questions/show.html.twig',[
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);


    }


}