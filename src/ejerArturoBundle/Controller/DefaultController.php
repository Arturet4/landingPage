<?php

namespace ejerArturoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{

    public function indexAction(){
        return $this->render('ejerArturoBundle:Default:index.html.twig');
    }

    public function equipoAction($numero){
        return $this->render('ejerArturoBundle:Default:equipo.html.twig',array('numero'=>$numero));
    }
}
