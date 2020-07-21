<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(EntityManagerInterface $em)
    {
        $q = $em->createQuery('DELETE FROM App\Entity\User');
        $numDeleted = $q->execute();

        $username = 'jon';
        $password = md5('123');
        $user = new User();
        $user->setUsername($username)->setPassword($password)->setFkEmpId(1);

        $em->persist($user);
        $em->flush();
                
        $username = 'dw';
        $password = md5('456');
        $user = new User();
        $user->setUsername($username)->setPassword($password)->setFkEmpId(2);

        $em->persist($user);
        $em->flush();

        $response = new Response();
        
        $date = new \DateTime();
        $jsonObj = $this->getDoctrine()->getRepository(User::class)->findAll();

        $response->setContent(
           json_encode($jsonObj)
        );

        $response->headers->set('Content-Type', 'application/json');

        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}
