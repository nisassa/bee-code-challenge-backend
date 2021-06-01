<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RecordControllerTest extends WebTestCase
{
    public function testStoreRecordApiEndpoint(): void
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/record/store',
            ['CONTENT_TYPE' => 'application/json'],
            [],
            [],
            '{
                 "artist": {
                     "id": 1
                 },
                 "name": "Record name.",
                 "price": "24.24"
            }'
        );

        $response = $client->getResponse();
        $result = json_decode($response->getContent());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertIsInt($result->record->id);
        $this->assertEquals('Record name.' , $result->record->name);
        $this->assertEquals(24.24 , $result->record->price);
    }

    public function testUpdateRecord(): void
    {
        $client = static::createClient();
        $client->request(
            'PUT',
            '/record/update',
            ['CONTENT_TYPE' => 'application/json'],
            [],
            [],
            '{
                "id": 1,
                "name": "Updated record name.",
                "price": "21.12",
                "artist": {
                    "id": 1
                }
            }'
        );

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());

        $response = $client->getResponse();
        $result = json_decode($response->getContent());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertSame($result->message, "The record has been updated!");

    }

    public function testDeleteRecord(): void
    {
        $client = static::createClient();
        $client->request(
            'DELETE',
            '/record/delete',
            ['CONTENT_TYPE' => 'application/json'],
            [],
            [],
            '{"id": 1}'
        );

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testSearchEndpoint(): void
    {
        $client = static::createClient();
        $client->request(
            'GET',
            '/record/search',
            ['CONTENT_TYPE' => 'application/json'],
            [],
            [],
            '{
                 "id": "",
                 "name": "",
                 "artist": {
                     "id": 1,
                     "name": "Billy Joel"
                 }
                }
                '
        );

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());

        $result = json_decode($response->getContent());
        $this->assertIsArray($result->records);
    }
}
