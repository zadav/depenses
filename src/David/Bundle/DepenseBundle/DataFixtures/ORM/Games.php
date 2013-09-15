<?php
 
namespace David\GameBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use David\GameBundle\Entity\Game;
 
class Games implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array('Super Aleste', 'Sonic', 'Super Mario World', 'ThunderForce IV');
 
    foreach($names as $i => $name)
    {
      // On crée la catégorie
      $name_list[$i] = new Game();
      $name_list[$i]->setTitle($name);
      $name_list[$i]->setDescription('Description test');
      $name_list[$i]->setYear(new \DateTime());
      // On la persiste
      $manager->persist($name_list[$i]);
    }
 
    // On déclenche l'enregistrement
    $manager->flush();
  }
}