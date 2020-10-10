<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class CustomerController extends AbstractFOSRestController
{
    /**
     * Lists all customers.
     * @Rest\Get("/customers")
     *
     * @return Response
     */
    public function getCustomersAction()
    {
        $repository = $this->getDoctrine()->getRepository(Customer::class);
        $customers = $repository->findall();
        return $this->handleView($this->view($customers));
    }

    /**
     * Lists one customer.
     * @Rest\Post("/customers")
     *
     * @return Response
     */
    public function getMovieAction(Request $request, CustomerRepository $customerRepository)
    {
        $data = json_decode($request->getContent(), true);
        $customer = $customerRepository->findOneByIdNumber($data['idNumber']);
        return $this->handleView($this->view($customer));
    }
    
}
