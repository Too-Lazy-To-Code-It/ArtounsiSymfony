<?php

namespace App\Test\Controller;

use App\Entity\Tutoriel;
use App\Repository\TutorielRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TutorielControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private TutorielRepository $repository;
    private string $path = '/tutoriel/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Tutoriel::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Tutoriel index');

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
            'tutoriel[pathimg]' => 'Testing',
            'tutoriel[title]' => 'Testing',
            'tutoriel[description]' => 'Testing',
            'tutoriel[niveau]' => 'Testing',
            'tutoriel[id_artist]' => 'Testing',
            'tutoriel[id_categorie]' => 'Testing',
        ]);

        self::assertResponseRedirects('/tutoriel/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tutoriel();
        $fixture->setPathimg('My Title');
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setId_artist('My Title');
        $fixture->setId_categorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Tutoriel');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tutoriel();
        $fixture->setPathimg('My Title');
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setId_artist('My Title');
        $fixture->setId_categorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'tutoriel[pathimg]' => 'Something New',
            'tutoriel[title]' => 'Something New',
            'tutoriel[description]' => 'Something New',
            'tutoriel[niveau]' => 'Something New',
            'tutoriel[id_artist]' => 'Something New',
            'tutoriel[id_categorie]' => 'Something New',
        ]);

        self::assertResponseRedirects('/tutoriel/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getPathimg());
        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getNiveau());
        self::assertSame('Something New', $fixture[0]->getId_artist());
        self::assertSame('Something New', $fixture[0]->getId_categorie());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Tutoriel();
        $fixture->setPathimg('My Title');
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setId_artist('My Title');
        $fixture->setId_categorie('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/tutoriel/');
    }
}
