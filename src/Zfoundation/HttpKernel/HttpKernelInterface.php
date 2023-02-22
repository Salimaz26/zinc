<?php
namespace App\Zfoundation\HttpKernel;

use Symfony\Component\HttpFoundation\Response;


interface HttpKernelInterface
{
    /**
     * Cette méthode du noyau lui permet de soumettre la requête 
     * et de recuperer la réponse correspondante
     * 
     * 
     * @return Response
     */

public function handleRequest() : Response;


}