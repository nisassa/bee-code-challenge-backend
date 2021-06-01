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

    public function search(array $data): array
    {
        $repository = $this->em->getRepository(Record::class);

        $query = $repository
                    ->createQueryBuilder('r')
                    ->join('r.artist', 'a');


        if (isset($data['id']) and ! empty($data['id'])) {
            $query
                ->where('r.id = :recordId')
                ->setParameter('recordId', $data['name'])
            ;
        } else if (isset($data['name']) and ! empty($data['name'])) {
            $query
                ->where('r.name = :recordId')
                ->setParameter('recordId', $data['name'])
            ;
        } else if (isset($data['artist']['id']) and ! empty($data['artist']['id'])) {
            $query
                ->where('a.id = :artistId')
                ->setParameter('artistId', $data['artist']['id'])
            ;
        } else if (isset($data['artist']['name']) and ! empty($data['artist']['name'])) {
            $query
                ->where('a.name = :artistName')
                ->setParameter('artistName', $data['artist']['name'])
            ;
        } else {
            return [];
        }

        $query = $query->orderBy("a.name", 'ASC')->getQuery();

        return  $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
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