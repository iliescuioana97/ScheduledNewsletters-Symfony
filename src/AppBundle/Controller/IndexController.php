<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller {

    /**
     * @Route("/", name="home")
     */
    public function indexAction() {
        return $this->render('AppBundle:pages:index.html.twig');
    }

    /**
     * @Route("/history", name="history")
     */
    public function historyAction() {
        return $this->render('AppBundle:pages:history.html.twig');
    }

    /**
     * @Route("/music", name="music")
     */
    public function musicAction() {
        return $this->render('AppBundle:pages:music.html.twig');
    }

    /**
     * @Route("/literature", name="literature")
     */
    public function literatureAction() {
        return $this->render('AppBundle:pages:literature.html.twig');
    }

    /**
     * @Route("/painting", name="painting")
     */
    public function paintingAction() {
        return $this->render('AppBundle:pages:painting.html.twig');
    }

    /**
     * @Route("/form", name="form")
     */
    public function formAction() {
        return $this->render('AppBundle:pages:form.html.twig');
    }

}
