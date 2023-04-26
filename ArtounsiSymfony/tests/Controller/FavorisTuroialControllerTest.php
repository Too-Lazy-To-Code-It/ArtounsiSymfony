<?php

namespace App\Test\Controller;

use App\Entity\FavorisTuroial;
use App\Repository\FavorisTuroialRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FavorisTuroialControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private FavorisTuroialRepository $repository;
    private string $path = '/favoris/turoial/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(FavorisTuroial::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('FavorisTuroial index');

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
            'favoris_turoial[id_user]' => 'Testing',
            'favoris_turoial[id_tutoriel]' => 'Testing',
        ]);

        self::assertResponseRedirects('/favoris/turoial/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new FavorisTuroial();
        $fixture->setId_user('My Title');
        $fixture->setId_tutoriel('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('FavorisTuroial');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new FavorisTuroial();
        $fixture->setId_user('My Title');
        $fixture->setId_tutoriel('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'favoris_turoial[id_user]' => 'Something New',
            'favoris_turoial[id_tutoriel]' => 'Something New',
        ]);

        self::assertResponseRedirects('/favoris/turoial/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getId_user());
        self::assertSame('Something New', $fixture[0]->getId_tutoriel());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new FavorisTuroial();
        $fixture->setId_user('My Title');
        $fixture->setId_tutoriel('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/favoris/turoial/');
    }
}
