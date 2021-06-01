<?php

namespace App\Service;

use App\Entity\Artist;
use App\Entity\Record;

class RecordManager extends ManagerMain
{
    /**
     * @var int $id
     * @return null|Record
     *
     */
    public function loadById(int $id): ?Record
    {
        return $this->em->getRepository(Record::class)->findOneById($id);
    }

    /**
     * @param array $data
     * @param Artist $artist
     * @param Record|null $record
     */
    public function update(array $data, Artist $artist, Record $record = null): void
    {
        if (! empty($data["name"])) {
            $record->setName($data["name"]);
        }

        if (! empty($data["price"])) {
            $record->setPrice($data["price"]);
        }

        if ($artist) {
            $record->setArtist($artist);
        }

        $this->persist($record);
    }

    /**
     * @param array $data
     * @param Artist $artist
     * @return Record
     */
    public function create(array $data, Artist $artist): ?Record
    {
        $name = $data['name'] ?? null;
        $price = $data['price'] ?? null;

        $record = new Record();
        $record
            ->setArtist($artist)
            ->setName($name)
            ->setPrice($price);

        $this->persist($record);

        return $record;
    }
}