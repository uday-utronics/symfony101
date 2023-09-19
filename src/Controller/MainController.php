<?php

namespace App\Controller;

use App\Document\Crop;
use App\Repository\CropRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(){
        return new Response('<h1>Hello world</h1>');
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request){
        $name = $request->get('name');
        return $this->render('/main/index.html.twig',[
            'my_name' => $name,
        ]);
    }


    // /**
    //  * @Route("/crops", methods={"GET"})
    //  */
    // public function read(DocumentManager $dm)
    // {
    //     $crop =  $dm->getRepository(Crop::class)->findAll();
    //     return $this->json([
    //         'crop' => $crop
    //     ]);
    // }

}
