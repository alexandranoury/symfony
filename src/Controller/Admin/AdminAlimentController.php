<?php

namespace App\Controller\Admin;

use App\Entity\Aliment;
use App\Form\AlimentType;
use App\Repository\AlimentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminAlimentController extends AbstractController
{
    /**
     * @Route("/admin/aliment", name="admin_aliment")
     */
    public function index(AlimentRepository $repository)
    {
        $aliments = $repository->findAll();
        return $this->render('admin/admin_aliment/adminAliment.html.twig', [
            "aliments" => $aliments
            
        ]);
    }

     /**
     * @Route("/admin/aliment/creation", name="admin_aliment_creation") 
     * @Route("/admin/aliment/{id}", name="admin_aliment_modification", methods="GET|POST")
     */
    public function ajoutEtModif(Aliment $aliment = null, Request $request, ManagerRegistry $managerRegistry) /*ManagerRegistry ou entityManagerInterface  au lieu de ObjectManager */
    {
        if(!$aliment) { /* Si l'aliment n'existe pas creer un nouvel aliment */ 
            $aliment = new Aliment();
        }
        $form = $this->createForm(AlimentType::class, $aliment);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $managerRegistry->getManager();
            $em->persist($aliment);
            $em->flush();
          
            return $this->redirectToRoute("admin_aliment"); /*Formulaire soumis et valide + modification dabs la bdd alors redirection*/

        }

        return $this->render('admin/admin_aliment/modifEtAjout.html.twig', [
            "aliment" => $aliment,
            "form" => $form->createView(),
            "isModification" => $aliment->getId() !== null
        ]);
    }

    
     /**
     * @Route("/admin/aliment/{id}", name="admin_aliment_supression", methods="DELETE")
     */
    public function delete(Aliment $aliment = null, Request $request, ManagerRegistry $managerRegistry) {
        if ($this->isCsrfTokenValid( 'delete' . $aliment->getId(), $request->get('_token'))){
            $em = $managerRegistry->getManager();
            $em->remove($aliment);
            $em->flush(); 
        }
        
        return $this->redirectToRoute("admin_aliment");


    }
    
}
