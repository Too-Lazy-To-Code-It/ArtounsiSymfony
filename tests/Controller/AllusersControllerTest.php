<?php

namespace App\Test\Controller;

use App\Entity\Allusers;
use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AllusersControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private AllusersRepository $repository;
    private string $path = '/allusers/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Allusers::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Alluser index');

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
            'alluser[name]' => 'Testing',
            'alluser[Last_Name]' => 'Testing',
            'alluser[Email]' => 'Testing',
            'alluser[Birthday]' => 'Testing',
            'alluser[password]' => 'Testing',
            'alluser[salt]' => 'Testing',
            'alluser[nationality]' => 'Testing',
            'alluser[type]' => 'Testing',
            'alluser[nickname]' => 'Testing',
            'alluser[avatar]' => 'Testing',
            'alluser[background]' => 'Testing',
            'alluser[description]' => 'Testing',
            'alluser[bio]' => 'Testing',
        ]);

        self::assertResponseRedirects('/allusers/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Allusers();
        $fixture->setName('My Title');
        $fixture->setLast_Name('My Title');
        $fixture->setEmail('My Title');
        $fixture->setBirthday('My Title');
        $fixture->setPassword('My Title');
        $fixture->setSalt('My Title');
        $fixture->setNationality('My Title');
        $fixture->setType('My Title');
        $fixture->setNickname('My Title');
        $fixture->setAvatar('My Title');
        $fixture->setBackground('My Title');
        $fixture->setDescription('My Title');
        $fixture->setBio('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Alluser');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Allusers();
        $fixture->setName('My Title');
        $fixture->setLast_Name('My Title');
        $fixture->setEmail('My Title');
        $fixture->setBirthday('My Title');
        $fixture->setPassword('My Title');
        $fixture->setSalt('My Title');
        $fixture->setNationality('My Title');
        $fixture->setType('My Title');
        $fixture->setNickname('My Title');
        $fixture->setAvatar('My Title');
        $fixture->setBackground('My Title');
        $fixture->setDescription('My Title');
        $fixture->setBio('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'alluser[name]' => 'Something New',
            'alluser[Last_Name]' => 'Something New',
            'alluser[Email]' => 'Something New',
            'alluser[Birthday]' => 'Something New',
            'alluser[password]' => 'Something New',
            'alluser[salt]' => 'Something New',
            'alluser[nationality]' => 'Something New',
            'alluser[type]' => 'Something New',
            'alluser[nickname]' => 'Something New',
            'alluser[avatar]' => 'Something New',
            'alluser[background]' => 'Something New',
            'alluser[description]' => 'Something New',
            'alluser[bio]' => 'Something New',
        ]);

        self::assertResponseRedirects('/allusers/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getName());
        self::assertSame('Something New', $fixture[0]->getLast_Name());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getBirthday());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getSalt());
        self::assertSame('Something New', $fixture[0]->getNationality());
        self::assertSame('Something New', $fixture[0]->getType());
        self::assertSame('Something New', $fixture[0]->getNickname());
        self::assertSame('Something New', $fixture[0]->getAvatar());
        self::assertSame('Something New', $fixture[0]->getBackground());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getBio());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Allusers();
        $fixture->setName('My Title');
        $fixture->setLast_Name('My Title');
        $fixture->setEmail('My Title');
        $fixture->setBirthday('My Title');
        $fixture->setPassword('My Title');
        $fixture->setSalt('My Title');
        $fixture->setNationality('My Title');
        $fixture->setType('My Title');
        $fixture->setNickname('My Title');
        $fixture->setAvatar('My Title');
        $fixture->setBackground('My Title');
        $fixture->setDescription('My Title');
        $fixture->setBio('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/allusers/');
    }
}
