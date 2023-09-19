<?php
namespace App\Controller;

use App\Repository\CropRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CropController extends AbstractController{

    /**
     * @Route("/crops", name="crop_list", methods={"GET"})
     */
    public function list(CropRepository $cropRepository): JsonResponse
    {
        $crops = $cropRepository->findAll();
        return $this->json(['crops' => $crops]);
    }

    /**
     * @Route("/crops/{id}", name="crop_read", methods={"GET"})
     */
    public function read(string $id, CropRepository $cropRepository): JsonResponse
    {
        $crop = $cropRepository->find($id);
        if (!$crop) {
            return $this->json(['message' => 'Crop not found'], Response::HTTP_NOT_FOUND);
        }

        return $this->json(['crop' => $crop]);
    }
}