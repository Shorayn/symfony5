<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     *
     * @Route("/", name="app_homepage")
     *
     * @return Response
     */
    public function homepage(Environment $twigEnvironment): Response
    {

        // fun example of using the Twig service directly
        // $html = $twigEnvironment->render('question/homepage.html.twig');

        // return new Response($html);
        return $this->render('question/homepage.html.twig');
    }


    /**
     * @Route("/question/{slug}", name="app_question_show")
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
        
        dump($this);


        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);


    }


}