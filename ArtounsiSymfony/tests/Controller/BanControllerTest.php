<?php

namespace App\Test\Controller;

use App\Entity\Ban;
use App\Repository\BanRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BanControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private BanRepository $repository;
    private string $path = '/ban/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Ban::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Ban index');

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
            'ban[Reason]' => 'Testing',
            'ban[DateB]' => 'Testing',
            'ban[id_user]' => 'Testing',
        ]);

        self::assertResponseRedirects('/ban/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Ban();
        $fixture->setReason('My Title');
        $fixture->setDateB('My Title');
        $fixture->setId_user('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Ban');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Ban();
        $fixture->setReason('My Title');
        $fixture->setDateB('My Title');
        $fixture->setId_user('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'ban[Reason]' => 'Something New',
            'ban[DateB]' => 'Something New',
            'ban[id_user]' => 'Something New',
        ]);

        self::assertResponseRedirects('/ban/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getReason());
        self::assertSame('Something New', $fixture[0]->getDateB());
        self::assertSame('Something New', $fixture[0]->getId_user());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Ban();
        $fixture->setReason('My Title');
        $fixture->setDateB('My Title');
        $fixture->setId_user('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/ban/');
    }
}
