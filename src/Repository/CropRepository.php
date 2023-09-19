<?php
namespace App\Repository;

use App\Document\Crop;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

Class CropRepository extends DocumentRepository{

    public function __construct(DocumentManager $dm)
{
    $uow = $dm->getUnitOfWork();
    $classMetaData = $dm->getClassMetadata(Crop::class);
    parent::__construct($dm, $uow, $classMetaData);
}
     // Add custom methods for querying if necessary
     public function findCropsByFarmerId($farmerId)
     {
         return $this->createQueryBuilder()
             ->field('farmerId')->equals($farmerId)
             ->getQuery()
             ->execute();
     }
}