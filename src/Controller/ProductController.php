<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(EntityManagerInterface $em)
    {
        $product = new Product();
        $product->setName('cookie')->setPrice(5);

        $em->persist($product);

        $product = new Product();
        $product->setName('cookie2')->setPrice(8);

        $em->persist($product);
        $em->flush();

        $response = new Response();
        
        $date = new \DateTime();
        $jsonObj = $this->getDoctrine()->getRepository(Product::class)->findAll();

        $response->setContent(
           json_encode($jsonObj)
        );

        // $response->setContent(json_encode([
        //     'data' => 123,
        // ]));

        $response->headers->set('Content-Type', 'application/json');
       
        $response->headers->set('Access-Control-Allow-Origin', '*');

        // $response->headers->set('Access-Control-Allow-Methods', 'GET');

        return $response;
    }
}
