<?php

namespace App\Test\Controller;

use App\Entity\Offretravail;
use App\Repository\OffretravailRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OffretravailControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private OffretravailRepository $repository;
    private string $path = '/offretravail/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Offretravail::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Offretravail index');

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
            'offretravail[titreoffre]' => 'Testing',
            'offretravail[descriptionoffre]' => 'Testing',
            'offretravail[categorieoffre]' => 'Testing',
            'offretravail[nickname]' => 'Testing',
            'offretravail[dateajoutoofre]' => 'Testing',
            'offretravail[typeoffre]' => 'Testing',
            'offretravail[localisationoffre]' => 'Testing',
            'offretravail[id_user]' => 'Testing',
            'offretravail[idcategorie]' => 'Testing',
        ]);

        self::assertResponseRedirects('/offretravail/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Offretravail();
        $fixture->setTitreoffre('My Title');
        $fixture->setDescriptionoffre('My Title');
        $fixture->setCategorieoffre('My Title');
        $fixture->setNickname('My Title');
        $fixture->setDateajoutoofre('My Title');
        $fixture->setTypeoffre('My Title');
        $fixture->setLocalisationoffre('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Offretravail');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Offretravail();
        $fixture->setTitreoffre('My Title');
        $fixture->setDescriptionoffre('My Title');
        $fixture->setCategorieoffre('My Title');
        $fixture->setNickname('My Title');
        $fixture->setDateajoutoofre('My Title');
        $fixture->setTypeoffre('My Title');
        $fixture->setLocalisationoffre('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'offretravail[titreoffre]' => 'Something New',
            'offretravail[descriptionoffre]' => 'Something New',
            'offretravail[categorieoffre]' => 'Something New',
            'offretravail[nickname]' => 'Something New',
            'offretravail[dateajoutoofre]' => 'Something New',
            'offretravail[typeoffre]' => 'Something New',
            'offretravail[localisationoffre]' => 'Something New',
            'offretravail[id_user]' => 'Something New',
            'offretravail[idcategorie]' => 'Something New',
        ]);

        self::assertResponseRedirects('/offretravail/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitreoffre());
        self::assertSame('Something New', $fixture[0]->getDescriptionoffre());
        self::assertSame('Something New', $fixture[0]->getCategorieoffre());
        self::assertSame('Something New', $fixture[0]->getNickname());
        self::assertSame('Something New', $fixture[0]->getDateajoutoofre());
        self::assertSame('Something New', $fixture[0]->getTypeoffre());
        self::assertSame('Something New', $fixture[0]->getLocalisationoffre());
        self::assertSame('Something New', $fixture[0]->getId_user());
        self::assertSame('Something New', $fixture[0]->getIdcategorie());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Offretravail();
        $fixture->setTitreoffre('My Title');
        $fixture->setDescriptionoffre('My Title');
        $fixture->setCategorieoffre('My Title');
        $fixture->setNickname('My Title');
        $fixture->setDateajoutoofre('My Title');
        $fixture->setTypeoffre('My Title');
        $fixture->setLocalisationoffre('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/offretravail/');
    }
}
