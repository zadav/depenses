<?php

namespace David\Bundle\DepenseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use David\Bundle\DepenseBundle\Entity\Ligne;
use David\Bundle\DepenseBundle\Entity\Bilan;
use David\Bundle\DepenseBundle\Form\Type\BilanType;
use David\Bundle\DepenseBundle\Form\Type\LigneType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DepenseController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        return $this->render("DavidDepenseBundle:Depense:index.html.twig");
    }

    public function creerAction()
    {
    	$ligne = new Ligne();
    	$form = $this->createForm(new LigneType(), $ligne);
        
        $form->handleRequest();
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form);
            $em->flush();
            
            return $this->redirect(
                    $this->generateUrl('daviddepense_show_bilan', array ('id' => $bilan->getId()))
                    );
            
            
        }
        return $this->render("DavidDepenseBundle:Depense:creation.html.twig",
        		array('form'=>$form->createView(),));
    }
    
    public function showBilanAction($id)
    {
    
        $em = $this->getDoctrine()->getManager();
        $bilan = $em->find("DavidDepenseBundle:Bilan", $id);
        
        if (!$bilan) {
             throw new NotFoundHttpException('Page not found');
        }
        return $this->render(
                "DavidDepenseBundle:Depense:bilan.html.twig",
        	array('bilan' =>$bilan)
                );
    }
    
    public function creerBilanAction(Request $request)
    {
    	$bilan = new Bilan();
        
    	$form = $this->createForm(new BilanType(), $bilan);
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em =  $this->getDoctrine()->getManager();
            $em->persist($bilan);
            $em->flush();
            
            return $this->redirect(
                    $this->generateUrl('daviddepense_show_bilan', array ('id' => $bilan->getId()))
                    );
           
        }
        
        return $this->render('DavidDepenseBundle:Depense:creationbilan.html.twig',
                             array('form' => $form->createView()));
    }
    
}

?>