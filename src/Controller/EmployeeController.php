<?php

namespace App\Controller;

use App\Entity\Employee;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager as Check;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use PHPUnit\Framework\TestCase;

class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee", name="employee")
     */
    public function index(EntityManagerInterface $em)
    {
        $q = $em->createQuery('DELETE FROM App\Entity\Employee');
        $numDeleted = $q->execute();

        $employee = new Employee();
        $employee->setEmpId(1)->setFname('John')->setLname('Brown')->setAddress('123 left street');

        $em->persist($employee);

        $employee = new Employee();
        $employee->setEmpId(2)->setFname('Dan')->setLname('White')->setAddress('456 right street');

        $em->persist($employee);
        $em->flush();

        $response = new Response();
        
        $date = new \DateTime();
        $jsonObj = $this->getDoctrine()->getRepository(Employee::class)->findAll();

        $response->setContent(
           json_encode($jsonObj)
        );

        $response->headers->set('Content-Type', 'application/json');

        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}
