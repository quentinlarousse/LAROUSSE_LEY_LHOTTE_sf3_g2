<?php

namespace AppBundle\Controller\Article;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {

     return new Response('List of article');
    }

    /**
     * @Route("/show/{id}", requirements={"id" = "\d"})
     */
    public function showAction($id, Request $request)
    {
        $tag = $request->query->get('tag');

        return new Response('Affiche moi l\'article avec l\'id: '.$id. 'avec le tag' .$tag);
    }

    /**
     * @Route("/show/{articleName}")
     *
     * @param $articleName
     *
     * @return Response
     */
    public function showArticleNameAction($articleName)
    {
        return $this->render('AppBundle:Article:index.html.twig',[
            'articleName' => $articleName,
        ]);
    }


}