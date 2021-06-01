<?php

namespace App\Service;

use App\Entity\Artist;

class ArtistManager extends ManagerMain
{
    /**
     * @var int $id
     * @return null|Artist
     *
     */
    public function loadById(int $id): ?Artist
    {
        return $this->em->getRepository(Artist::class)->findOneById($id);
    }
}