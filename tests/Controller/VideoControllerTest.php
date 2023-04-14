<?php

namespace App\Test\Controller;

use App\Entity\Video;
use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VideoControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private VideoRepository $repository;
    private string $path = '/video/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Video::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Video index');

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
            'video[title]' => 'Testing',
            'video[date_p]' => 'Testing',
            'video[description]' => 'Testing',
            'video[pathvideo]' => 'Testing',
            'video[pathimage]' => 'Testing',
            'video[id_tutoriel]' => 'Testing',
        ]);

        self::assertResponseRedirects('/video/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Video();
        $fixture->setTitle('My Title');
        $fixture->setDate_p('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPathvideo('My Title');
        $fixture->setPathimage('My Title');
        $fixture->setId_tutoriel('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Video');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Video();
        $fixture->setTitle('My Title');
        $fixture->setDate_p('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPathvideo('My Title');
        $fixture->setPathimage('My Title');
        $fixture->setId_tutoriel('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'video[title]' => 'Something New',
            'video[date_p]' => 'Something New',
            'video[description]' => 'Something New',
            'video[pathvideo]' => 'Something New',
            'video[pathimage]' => 'Something New',
            'video[id_tutoriel]' => 'Something New',
        ]);

        self::assertResponseRedirects('/video/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getDate_p());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getPathvideo());
        self::assertSame('Something New', $fixture[0]->getPathimage());
        self::assertSame('Something New', $fixture[0]->getId_tutoriel());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Video();
        $fixture->setTitle('My Title');
        $fixture->setDate_p('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPathvideo('My Title');
        $fixture->setPathimage('My Title');
        $fixture->setId_tutoriel('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/video/');
    }
}
