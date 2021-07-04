<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ImagProfilType;
use App\Form\UserProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="app_profil")
     */
    public function index(): Response
    {   
        $Profil = $this->getUser();
       
        
        return $this->render('profil/index.html.twig', [
            'User' => $Profil,
        ]);
    }

    // /**
    //  * @Route("/profil/modifier", name="app_profil_modifier")
    //  */
    // public function User(EntityManagerInterface $em, Security $security, Request $request)
    // {
    //     $Profil = $this->getUser();
    //     $form = $this->createForm(ImagProfilType::class, $Profil);

    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $Profil = $security->getUser();
    //         $em->flush();

            

    //         return $this->redirectToRoute('app_profil');
    //     }

    //     return $this->render('Form/Upload.html.twig', [
    //         'user' => $Profil,
    //         'form' => $form->createView(),
    //     ]);
    // }
}
