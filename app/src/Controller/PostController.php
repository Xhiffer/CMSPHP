<?php

namespace App\Controller;

use App\Entity\Author;
use App\Fram\Factories\PDOFactory;
use App\Fram\Utils\Flash;
use App\Manager\PostManager;

class PostController extends BaseController
{
    /**
     * Show all Posts
     */
    public function executeIndex()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $posts = $postManager->getAllPosts();

        $this->render(
            'home.php',
            [
                'posts' => $posts,
                'user' => new Author(),
                'test' => 'je suis un test'
            ],
            'Home page'
        );

    }

    public function executeShow()
    {
        Flash::setFlash('alert', 'je suis une alerte');
        $arr = array(1, 2, 3, 4,5);
        if (is_numeric($this->params['id'])) 
        {
            $this->render(
                'show.php',
                [
                    'test' => 'article ' . $this->params['id']
                ],
                'Show Page'
            );
        }
        else 
        {
            foreach ($arr as &$value)
            {
                $result = $result . 'article ' .'<a href="http://localhost:5555/show/' . $value .'">'. $value.'</a>' . '<hr>';
            }
            $this->render(
                'showall.php',
                [
                    'test' => $result
                ],
                'Show Page'
            );
        }
}

    public function executeAuthor()
    {
        $this->render(
            'author.php',
            [],
            'Auteur'
        );
    }
    public function executeLogin()
    {
        $this->render(
            'login.php',
            [],
            'Login'
        );
    }
    public function executeUserlist()
    {
        $arr = array(1, 2, 3, 4,5);
        $result = [];
        foreach ($arr as &$value)
        {
            array_push($result,array($value,1,2));
        }
        $this->render(
            'userlist.php',
            [
                'test' => $result
            ],
            'Login'
        );
    }

    
    public function executeAdmin()
    {
        $this->render(
            'admin.php',
            [],
            'Admin'
        );
    }
}