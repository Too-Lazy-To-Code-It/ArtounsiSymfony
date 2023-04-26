<?php

namespace App\Test\Controller;

use App\Entity\Challenge;
use App\Repository\ChallengeRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChallengeControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ChallengeRepository $repository;
    private string $path = '/challenge/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Challenge::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Challenge index');

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
            'challenge[title]' => 'Testing',
            'challenge[description]' => 'Testing',
            'challenge[date_c]' => 'Testing',
            'challenge[pathimg]' => 'Testing',
            'challenge[niveau]' => 'Testing',
            'challenge[id_categorie]' => 'Testing',
            'challenge[id_artist]' => 'Testing',
        ]);

        self::assertResponseRedirects('/challenge/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Challenge();
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDate_c('My Title');
        $fixture->setPathimg('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setId_categorie('My Title');
        $fixture->setId_artist('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Challenge');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Challenge();
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDate_c('My Title');
        $fixture->setPathimg('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setId_categorie('My Title');
        $fixture->setId_artist('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'challenge[title]' => 'Something New',
            'challenge[description]' => 'Something New',
            'challenge[date_c]' => 'Something New',
            'challenge[pathimg]' => 'Something New',
            'challenge[niveau]' => 'Something New',
            'challenge[id_categorie]' => 'Something New',
            'challenge[id_artist]' => 'Something New',
        ]);

        self::assertResponseRedirects('/challenge/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getDate_c());
        self::assertSame('Something New', $fixture[0]->getPathimg());
        self::assertSame('Something New', $fixture[0]->getNiveau());
        self::assertSame('Something New', $fixture[0]->getId_categorie());
        self::assertSame('Something New', $fixture[0]->getId_artist());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Challenge();
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDate_c('My Title');
        $fixture->setPathimg('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setId_categorie('My Title');
        $fixture->setId_artist('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/challenge/');
    }
}
