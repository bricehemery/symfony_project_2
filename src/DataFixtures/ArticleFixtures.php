<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Articles;
use App\Entity\Category;
use App\Entity\Comment;
use Faker\Factory;
class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $faker = \Faker\Factory::create('fr_FR');

       //Creer 3 fausses catégories
       for($i = 1; $i <=3; $i++){
           $category = new Category();
           $category->setTitle($faker->sentence())
                    ->setDescription($faker->paragraph());


                    $manager->persist($category);

                    //Créer entre 4 et 6 articles
            for($j = 1; $j <= mt_rand(4,6); $j++){
                $article = new Articles();

                $content ='<p>'.join($faker->paragraphs(5), '</p><p>').'</p>';

                $article->setTitle($faker->sentence())
                        ->setContent($content)
                        ->setImage($faker->imageUrl())
                        ->setCreateAt($faker->dateTimeBetween('-6months'))
                        ->setCategory($category);

                $manager->persist($article);

                //On donne des commentaires à l'article
                
                for($k = 1; $k <= mt_rand(4,10); $k++){
                    $comment = new Comment();
                    $content ='<p>'.join($faker->paragraphs(5), '</p><p>').'</p>';

                    $now = new \DateTime();
                    $interval = $now->diff($article->getCreateAt());
                    $days = $interval->days;
                    $minimum = '-'.$days.'days';

                    $comment->setAuthor($faker->name)
                            ->setContent($content)
                            ->setCreatedAt($faker->dateTimeBetween($minimum))
                            ->setArticle($article);

                    $manager->persist($comment);
                }
            }
       }
       

        $manager->flush();
    }
}
