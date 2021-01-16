<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileApiController extends AbstractController
{
    /**
     * @Route("api/profile/{nickname}", name="api_profile_get")
     */
    public function profileGet(ProfileRepository $profileRepository): Response{
        
    }
}
