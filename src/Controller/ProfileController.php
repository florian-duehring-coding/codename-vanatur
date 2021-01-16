<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProfileRepository;
use App\Form\UserType;

class ProfileController extends AbstractController
{
    /**
     * @Route("/p/create", name="profile-create")
     */
    public function profileCreate(ProfileRepository $profileRepository): Response{

        $form = $this->createForm(UserType::class, new User());
        return $this->render('profile/profile-edit.html.twig', [
            'controller_name' => 'ProfileController',
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/p/{nickname}", name="profile")
     */
    public function profileShow(string $nickname): Response
    {
        return $this->render('profile/profile-view.html.twig', [
            'controller_name' => 'ProfileController',
            'nickname' => $nickname
        ]);
    }
    /**
     * @Route("/p/{nickname}/edit", name="profile-edit")
     */
    public function profileEdit(string $nickname, ProfileRepository $profileRepository): Response{
        return $this->render('profile/profile-edit.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
