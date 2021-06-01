<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\Record;
use App\Service\RecordManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ArtistManager;

/**
 * @Route("/record")
 */
class RecordController extends AbstractController
{
    /**
     * @var ArtistManager
     */
    private $artistManager;

    /**
     * @var RecordManager
     */
    private $recordManager;

    public function __construct(ArtistManager $artistManager, RecordManager $recordManager)
    {
        $this->artistManager = $artistManager;
        $this->recordManager = $recordManager;
    }


    /**
     * @Route("/store", name="store_record", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);
        if (! isset($data['artist']['id']) or ! isset($data['name']) or ! isset($data['price'])) {
            return $this->json([
                'message' => 'Missing input parameters!',
            ], 400);
        }

        $artist = $this->artistManager->loadById($data['artist']['id']);
        if (! $artist) {
            return $this->json([
                'message' => 'Unable to find the artist!',
            ], 404);
        }

        try {
            $record = $this->recordManager->create($data, $artist);
        } catch (\Exception $exception) {
            return $this->json([
                'message' => $exception->getMessage(),
            ], 500);
        }

        return $this->json([
            'message' => 'New record was created!',
            'record' => $record->toArray()
        ]);
    }


    /**
     * @Route("/update", name="record_update",  methods={"PUT"})
     * @param Request $request
     * @return Response
     */
    public function update(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $record = null;
        if (isset($data['id'])) {
            $record = $this->recordManager->loadById($data['id']);
        }

        if (! $record) {
            return $this->json([
                'message' => 'Unable to find a Record for the given ID!',
            ], 404);
        }

        $artist = null;
        if (isset($data['artist']['id'])) {
            $artist = $this->artistManager->loadById($data['artist']['id']);
            if (! $artist) {
                return $this->json([
                    'message' => 'Unable to find the artist!',
                ], 404);
            }
        }

        try {
            $this->recordManager->update($data, $artist, $record);
        } catch (\Exception $exception) {
            return $this->json([
                'message' => $exception->getMessage(),
            ], 500);
        }

        return $this->json([
            'message' => 'The record has been updated!',
        ]);
    }


    /**
     * @Route("/delete", name="record_delete",  methods={"DELETE"})
     * @param Request $request
     * @return Response
     */
    public function delete(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $record = null;
        if (isset($data['id'])) {
            $record = $this->recordManager->loadById($data['id']);
        }

        if (! $record) {
            return $this->json([
                'message' => 'Unable to find a Record for the given ID!',
            ], 404);
        }

        $this->recordManager->delete($record);

        return $this->json([
            'message' => 'The record has been deleted!',
        ]);
    }

    /**
     * @Route("/search", name="record_search",  methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function search(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);
        if (! $data) {
            return $this->json([
                'message' => 'Bad request',
            ], 400);
        }

        $records = $this->recordManager->search($data);

        return $this->json([
            'records' => $records
        ]);
    }
}
