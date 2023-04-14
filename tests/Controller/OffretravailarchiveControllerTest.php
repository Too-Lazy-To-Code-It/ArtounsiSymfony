<?php

namespace App\Test\Controller;

use App\Entity\Offretravailarchive;
use App\Repository\OffretravailarchiveRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OffretravailarchiveControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private OffretravailarchiveRepository $repository;
    private string $path = '/offretravailarchive/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Offretravailarchive::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Offretravailarchive index');

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
            'offretravailarchive[titreoffre]' => 'Testing',
            'offretravailarchive[descriptionoffre]' => 'Testing',
            'offretravailarchive[categorieoffre]' => 'Testing',
            'offretravailarchive[nickname]' => 'Testing',
            'offretravailarchive[dateajoutoffre]' => 'Testing',
            'offretravailarchive[typeoffre]' => 'Testing',
            'offretravailarchive[localisationoffre]' => 'Testing',
            'offretravailarchive[id_user]' => 'Testing',
            'offretravailarchive[idcategorie]' => 'Testing',
        ]);

        self::assertResponseRedirects('/offretravailarchive/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Offretravailarchive();
        $fixture->setTitreoffre('My Title');
        $fixture->setDescriptionoffre('My Title');
        $fixture->setCategorieoffre('My Title');
        $fixture->setNickname('My Title');
        $fixture->setDateajoutoffre('My Title');
        $fixture->setTypeoffre('My Title');
        $fixture->setLocalisationoffre('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Offretravailarchive');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Offretravailarchive();
        $fixture->setTitreoffre('My Title');
        $fixture->setDescriptionoffre('My Title');
        $fixture->setCategorieoffre('My Title');
        $fixture->setNickname('My Title');
        $fixture->setDateajoutoffre('My Title');
        $fixture->setTypeoffre('My Title');
        $fixture->setLocalisationoffre('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'offretravailarchive[titreoffre]' => 'Something New',
            'offretravailarchive[descriptionoffre]' => 'Something New',
            'offretravailarchive[categorieoffre]' => 'Something New',
            'offretravailarchive[nickname]' => 'Something New',
            'offretravailarchive[dateajoutoffre]' => 'Something New',
            'offretravailarchive[typeoffre]' => 'Something New',
            'offretravailarchive[localisationoffre]' => 'Something New',
            'offretravailarchive[id_user]' => 'Something New',
            'offretravailarchive[idcategorie]' => 'Something New',
        ]);

        self::assertResponseRedirects('/offretravailarchive/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitreoffre());
        self::assertSame('Something New', $fixture[0]->getDescriptionoffre());
        self::assertSame('Something New', $fixture[0]->getCategorieoffre());
        self::assertSame('Something New', $fixture[0]->getNickname());
        self::assertSame('Something New', $fixture[0]->getDateajoutoffre());
        self::assertSame('Something New', $fixture[0]->getTypeoffre());
        self::assertSame('Something New', $fixture[0]->getLocalisationoffre());
        self::assertSame('Something New', $fixture[0]->getId_user());
        self::assertSame('Something New', $fixture[0]->getIdcategorie());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Offretravailarchive();
        $fixture->setTitreoffre('My Title');
        $fixture->setDescriptionoffre('My Title');
        $fixture->setCategorieoffre('My Title');
        $fixture->setNickname('My Title');
        $fixture->setDateajoutoffre('My Title');
        $fixture->setTypeoffre('My Title');
        $fixture->setLocalisationoffre('My Title');
        $fixture->setId_user('My Title');
        $fixture->setIdcategorie('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/offretravailarchive/');
    }
}
