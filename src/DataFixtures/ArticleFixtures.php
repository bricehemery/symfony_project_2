<?php

use Faker\Factory;


namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Articles;
use App\Entity\Category;
use App\Entity\PostLike;
use App\DataFixtures\AppFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ArticleFixtures extends Fixture
{
    /**
     * Encodeur de mot de passe
     *
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        //Creer 3 fausses catégories
        for ($i = 1; $i <= 3; $i++) {
            $category = new Category();
            $category->setTitle($faker->sentence())
                ->setDescription($faker->paragraph());


            $manager->persist($category);

            //Créer entre 4 et 6 articles
            for ($j = 1; $j <= mt_rand(4, 6); $j++) {
                $article = new Articles();

                $content = '<p>' . join($faker->paragraphs(5), '</p><p>') . '</p>';

                $article->setTitle($faker->sentence())
                    ->setContent($content)
                    ->setImage($faker->imageUrl())
                    ->setCreateAt($faker->dateTimeBetween('-6months'))
                    ->setCategory($category);

                $manager->persist($article);

                //On donne des commentaires à l'article

                for ($k = 1; $k <= mt_rand(4, 10); $k++) {
                    $comment = new Comment();
                    $content = '<p>' . join($faker->paragraphs(5), '</p><p>') . '</p>';

                    $now = new \DateTime();
                    $interval = $now->diff($article->getCreateAt());
                    $days = $interval->days;
                    $minimum = '-' . $days . 'days';

                    $comment->setAuthor($faker->name)
                        ->setContent($content)
                        ->setCreatedAt($faker->dateTimeBetween($minimum))
                        ->setArticle($article);

                    $manager->persist($comment);
                }

                $users = [];

                $user = new User();
                $user->setEmail('user@symfony.com')
                    ->setPassword($this->encoder->encodePassword($user, 'password'))
                    ->setUsername("symfony");

                $manager->persist($user);
                $users[] = $user;

                for ($m = 0; $m < 20; $m++) {
                    $user = new User();
                    $user->setUsername($faker->name);
                    $user->setEmail($faker->email);
                    $user->setPassword($this->encoder->encodePassword($user, 'password'));

                    $manager->persist($user);

                    $users[] = $user;
                }
                for ($l = 0; $l < mt_rand(0, 10); $l++) {
                    $like = new Postlike();
                    $like->setArticle($article)
                        ->setUser($faker->randomElement($users));

                    $manager->persist($like);
                }
            }
        }


        $manager->flush();
    }
}
