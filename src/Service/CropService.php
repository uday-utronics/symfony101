<?php
namespace App\Service;
use App\Document\Crop;
use App\Repository\CropRepository;
use Doctrine\ODM\MongoDB\DocumentManager;


class CropService {
  
    private $dm;
    private $cropRepository;

    public function __construct(DocumentManager $dm, CropRepository $cropRepository)
    {
        $this->dm = $dm;
        $this->cropRepository = $cropRepository;
    }

    public function createCrop(array $data): void
    {
        $crop = new Crop();
        $crop->setFarmerId($data['farmerId']);
        $crop->setCropName($data['cropName']);
        // Set other properties as needed

        $this->dm->persist($crop);
        $this->dm->flush();
    }

    public function readCrop(string $id): ?Crop
    {
        return $this->cropRepository->find($id);
    }

    public function updateCrop(string $id, array $data): void
    {
        $crop = $this->cropRepository->find($id);

        if (!$crop) {
            throw new \Exception('Crop not found');
        }

        $crop->setFarmerId($data['farmerId']);
        $crop->setCropName($data['cropName']);
        // Update other properties as needed

        $this->dm->flush();
    }

    public function deleteCrop(string $id): void
    {
        $crop = $this->cropRepository->find($id);

        if (!$crop) {
            throw new \Exception('Crop not found');
        }

        $this->dm->remove($crop);
        $this->dm->flush();
    }
}