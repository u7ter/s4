<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route,
    Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\HttpFoundation\Request;

/**
 * Class ProductController
 *
 * @package App\Controller
 */
class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     *
     */
    public function indexAction()
    {
        $products = $this->get('product.service')->getAllProducts();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products,
        ]);
    }
}
