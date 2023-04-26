<?php

namespace App\Test\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PostRepository $repository;
    private string $path = '/post/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Post::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Post index');

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
            'post[description_p]' => 'Testing',
            'post[media]' => 'Testing',
            'post[title_p]' => 'Testing',
            'post[date_p]' => 'Testing',
            'post[post_type]' => 'Testing',
            'post[id_user]' => 'Testing',
            'post[id_category]' => 'Testing',
        ]);

        self::assertResponseRedirects('/post/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Post();
        $fixture->setDescription_p('My Title');
        $fixture->setMedia('My Title');
        $fixture->setTitle_p('My Title');
        $fixture->setDate_p('My Title');
        $fixture->setPost_type('My Title');
        $fixture->setId_user('My Title');
        $fixture->setId_category('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Post');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Post();
        $fixture->setDescription_p('My Title');
        $fixture->setMedia('My Title');
        $fixture->setTitle_p('My Title');
        $fixture->setDate_p('My Title');
        $fixture->setPost_type('My Title');
        $fixture->setId_user('My Title');
        $fixture->setId_category('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'post[description_p]' => 'Something New',
            'post[media]' => 'Something New',
            'post[title_p]' => 'Something New',
            'post[date_p]' => 'Something New',
            'post[post_type]' => 'Something New',
            'post[id_user]' => 'Something New',
            'post[id_category]' => 'Something New',
        ]);

        self::assertResponseRedirects('/post/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getDescription_p());
        self::assertSame('Something New', $fixture[0]->getMedia());
        self::assertSame('Something New', $fixture[0]->getTitle_p());
        self::assertSame('Something New', $fixture[0]->getDate_p());
        self::assertSame('Something New', $fixture[0]->getPost_type());
        self::assertSame('Something New', $fixture[0]->getId_user());
        self::assertSame('Something New', $fixture[0]->getId_category());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Post();
        $fixture->setDescription_p('My Title');
        $fixture->setMedia('My Title');
        $fixture->setTitle_p('My Title');
        $fixture->setDate_p('My Title');
        $fixture->setPost_type('My Title');
        $fixture->setId_user('My Title');
        $fixture->setId_category('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/post/');
    }
}
