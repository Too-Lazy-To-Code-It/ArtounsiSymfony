<?php

namespace App\Test\Controller;

use App\Entity\Rating;
use App\Repository\RatingRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RatingControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private RatingRepository $repository;
    private string $path = '/rating/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Rating::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Rating index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'rating[rating]' => 'Testing',
            'rating[challenge_id]' => 'Testing',
            'rating[participator_id]' => 'Testing',
            'rating[rater_id]' => 'Testing',
        ]);

        self::assertResponseRedirects('/rating/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Rating();
        $fixture->setRating('My Title');
        $fixture->setChallenge_id('My Title');
        $fixture->setParticipator_id('My Title');
        $fixture->setRater_id('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Rating');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Rating();
        $fixture->setRating('My Title');
        $fixture->setChallenge_id('My Title');
        $fixture->setParticipator_id('My Title');
        $fixture->setRater_id('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'rating[rating]' => 'Something New',
            'rating[challenge_id]' => 'Something New',
            'rating[participator_id]' => 'Something New',
            'rating[rater_id]' => 'Something New',
        ]);

        self::assertResponseRedirects('/rating/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getRating());
        self::assertSame('Something New', $fixture[0]->getChallenge_id());
        self::assertSame('Something New', $fixture[0]->getParticipator_id());
        self::assertSame('Something New', $fixture[0]->getRater_id());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Rating();
        $fixture->setRating('My Title');
        $fixture->setChallenge_id('My Title');
        $fixture->setParticipator_id('My Title');
        $fixture->setRater_id('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/rating/');
    }
}
