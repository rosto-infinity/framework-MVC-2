<?php
namespace App\Controllers;


use App\Models\Post;

class BlogController extends Controller{
   
   
    //     public function welcome (){
    //     return $this->view('blog.welcome');

    // }
   
    // public function index()
    // {
    //     $post = new Post($this->getDB());
    //     $posts = $post->all();

    //     return $this->view('blog.index', compact('posts'));
    // }

    // public function show(int $id){
    //     $post = new Post($this->getDB());
    //     $post = $post->findById($id);

    //     return $this->view('blog.show', compact('post'));
    // }
        public function welcome (){
        return $this->view('blog.welcome');

    }
   
    public function index(){
        $stmt= $this->db->getPDO()->query("SELECT * FROM posts ORDER BY created_at DESC");
        $posts=$stmt->fetchAll();
        
        return $this->view('blog.index', compact('posts'));
    }

    public function show(int $id){

         
        return $this->view('blog.show', compact('id'));
    }
}