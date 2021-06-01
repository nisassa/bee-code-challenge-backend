<?php

namespace App\Service;

use App\Entity\Record;
use Doctrine\ORM\EntityManagerInterface;
use App\Utils\PersistableEntity;

class ManagerMain
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var string
     */
    protected static $entityClass;

    /**
     * Contructor
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param PersistableEntity $entity
     */
    protected function persist(PersistableEntity $entity): void
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param PersistableEntity $entity
     */
    public function delete(PersistableEntity $entity): void
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
}
