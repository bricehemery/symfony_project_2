<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Articles;
use App\Entity\PostLike;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticlesRepository;
use App\Repository\PostLikeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticlesRepository $repo)
    {


        $articles = $repo->findAll();


        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig');
    }

    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */

    public function form(Articles $article = null, Request $request, ObjectManager $manager)
    {

        if (!$article) {
            $article = new Articles();
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            if ($article->getId()) {
                $article->setCreateAt(new \DateTime());
            }

            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }

        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */

    public function show(Articles $article, Request $request, ObjectManager $manager)
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                ->setArticle($article);


            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }
        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }

    /**
     * Permet de savoir si cet article est liké par un utilisateur
     *
     * @param User $user
     * @return boolean
     */
    public function isLikedByUser(User $user): bool
    {
        foreach ($this->likes as $like) {
            if ($like->getUser() == $user) return true;
        }
        return false;
    }

    /**
     * Permet de liker ou d'unliker un article
     *
     * 
     * @Route("/blog/post/{id}/like", name = "post_like")
     * @param Articles $article
     * @param ObjectManager $manager
     * @param PostLikeRepository $likeRepo
     * @return Response
     */
    public function like(Articles $article, ObjectManager $manager, PostLikeRepository $likeRepo): Response
    {
        $user  = $this->getUser();

        //Y'a pas d'utilisateur 
        if (!$user) return $this->json([
            'code' => 403,
            'message' => "Unauthorized"
        ], 403);

        //Si le post est déjà liké on unlike et on supprime le like
        if ($article->isLikedByUser($user)) {
            $like = $likeRepo->findOneBy([
                'article' => $article,
                'user' => $user
            ]);

            $manager->remove($like);
            $manager->flush();
            return $this->json([
                'code' => 200,
                'message' => 'Like supprimé',
                'like' => $likeRepo->count(['article' => $article])
            ], 200);
        }

        //Sinon on like et on ajoute le like dans la bdd
        $like = new PostLike();
        $like->setArticle($article)
            ->setUser($user);

        $manager->persist($like);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'Post',
            'like' => $likeRepo->count(['article' => $article])
        ], 200);
    }
}
