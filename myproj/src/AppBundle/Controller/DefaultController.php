<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/list/{firstname}/{lastname}", name="user_list")
     */
    public function listAction(Request $request, $firstname = "", $lastname="")
    {
        if($firstname === "" && $lastname === ""){
            $name = "inconnu";
        } else {
            $name = $firstname . " " . $lastname;
        }
        return $this->render(':default:hello.html.twig', ['name' => $name]);
    }
}
