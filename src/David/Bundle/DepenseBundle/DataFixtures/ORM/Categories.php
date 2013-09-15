<?php

namespace David\Bundle\DepenseBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use David\Bundle\DepenseBundle\Entity\Category;

/**
 * Description of Consoles
 *
 * @author David
 */
class Categories implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories = array('Cigarettes','Alimentation','Essence');
        
        
    foreach($categories as $i => $category)
    {
      // On crée la catégorie
      $cat_list[$i] = new Game();
      $cat_list[$i]->setTitle($category);
      $cat_list[$i]->setDescription('category test');
      
      // On la persiste
      $manager->persist($cat_list[$i]);
    }
 
    // On déclenche l'enregistrement
    $manager->flush();
    }
}

?>
