<?php

namespace App\Manager;

use App\Entity\Post;

class PostManager extends BaseManager
{


    /**
     * @return Post[]
     */
    public function getAllPosts(string $table): array
    {

        return $this->pdo->query("SELECT * FROM $table")->fetchall();
    }

    public function getPostById(int $id,string $table): array  //on mets pas le post (pas compris)
    {
        return $this->pdo->query("SELECT * FROM   $table WHERE ID = $id")->fetch();
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function createPost(string $table, string $data) //pas fait avec post car pas le temps de comprendre
    {
        $this->pdo->query("INSERT INTO $table $data");
        return true;
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function updatePost(Post $post)
    {
        // TODO - getPostById($post->getId())
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deletePostById(int $id): bool
    {
        // TODO - Delete post
    }
}