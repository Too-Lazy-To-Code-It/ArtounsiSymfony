<?php

namespace App\Test\Controller;

use App\Entity\Demandetravail;
use App\Repository\DemandetravailRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemandetravailControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private DemandetravailRepository $repository;
    private string $path = '/demandetravail/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Demandetravail::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Demandetravail index');

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
            'demandetravail[nickname]' => 'Testing',
            'demandetravail[titreDemande]' => 'Testing',
            'demandetravail[descriptionDemande]' => 'Testing',
            'demandetravail[pdf]' => 'Testing',
            'demandetravail[dateajoutdemande]' => 'Testing',
            'demandetravail[categoriedemande]' => 'Testing',
            'demandetravail[id_user]' => 'Testing',
            'demandetravail[idcategorie]' => 'Testing',
        ]);

        self::assertResponseRedirects('/demandetravail/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Demandetravail();
        $fixture->setNickname('My Title');
        $fixture->setTitreDemande('My Title');
        $fixture->setDescriptionDemande('My Title');
        $fixture->setPdf('My Title');
        $fixture->setDateajoutdemande('My Title');
        $fixture->setCategoriedemande('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Demandetravail');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Demandetravail();
        $fixture->setNickname('My Title');
        $fixture->setTitreDemande('My Title');
        $fixture->setDescriptionDemande('My Title');
        $fixture->setPdf('My Title');
        $fixture->setDateajoutdemande('My Title');
        $fixture->setCategoriedemande('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'demandetravail[nickname]' => 'Something New',
            'demandetravail[titreDemande]' => 'Something New',
            'demandetravail[descriptionDemande]' => 'Something New',
            'demandetravail[pdf]' => 'Something New',
            'demandetravail[dateajoutdemande]' => 'Something New',
            'demandetravail[categoriedemande]' => 'Something New',
            'demandetravail[id_user]' => 'Something New',
            'demandetravail[idcategorie]' => 'Something New',
        ]);

        self::assertResponseRedirects('/demandetravail/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNickname());
        self::assertSame('Something New', $fixture[0]->getTitreDemande());
        self::assertSame('Something New', $fixture[0]->getDescriptionDemande());
        self::assertSame('Something New', $fixture[0]->getPdf());
        self::assertSame('Something New', $fixture[0]->getDateajoutdemande());
        self::assertSame('Something New', $fixture[0]->getCategoriedemande());
        self::assertSame('Something New', $fixture[0]->getId_user());
        self::assertSame('Something New', $fixture[0]->getIdcategorie());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Demandetravail();
        $fixture->setNickname('My Title');
        $fixture->setTitreDemande('My Title');
        $fixture->setDescriptionDemande('My Title');
        $fixture->setPdf('My Title');
        $fixture->setDateajoutdemande('My Title');
        $fixture->setCategoriedemande('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/demandetravail/');
    }
}
