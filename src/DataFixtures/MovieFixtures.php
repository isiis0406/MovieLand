<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie->setTitle('The Dark Knight');
       $movie->setReleaseYear(2008);
       $movie->setDescription('description of dark knight');
       $movie->setImagePath('https://images.unsplash.com/photo-1509347528160-9a9e33742cdb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
    
    //    Add data to pivot table
       $movie->addActor($this->getReference('actor_1'));
       $movie->addActor($this->getReference('actor_2'));
       $manager->persist($movie);
       
       $movie2 = new Movie();
       $movie2->setTitle('Avengers: End Game');
       $movie2->setReleaseYear(2008);
       $movie2->setDescription('description of Avengers: End Game');
       $movie2->setImagePath('https://images.unsplash.com/photo-1608889175638-9322300c46e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80');
    
       $movie->addActor($this->getReference('actor_3'));
       $movie->addActor($this->getReference('actor_4'));

       $manager->persist($movie2);



       $manager->flush();
    }
}
