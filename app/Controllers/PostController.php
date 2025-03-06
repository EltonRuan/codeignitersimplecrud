<?php

namespace App\Controllers;

use App\Models\PostModel;

class PostController extends BaseController
{
    public function getDataPost()
    {
        $postModel = new PostModel();

        $dadosPosts = $postModel->findAll();

        return view('posts', ['posts' => $dadosPosts]);
    }

    public function createPostView()
    {
        return view('create_post');
    }

    public function createData()
    {
        $postModel = new PostModel();

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        if (empty($title) && empty($content)) {
            return redirect()->back()->with('error', 'All fields are required.');
        }

        if (empty($title)) {
            return redirect()->back()->with('error', 'Please enter the Title field.');
        }

        if (empty($content)) {
            return redirect()->back()->with('error', 'Please enter the Content field.');
        }


        $data = [
            'title'   => $title,
            'content' => $content
        ];

        if ($postModel->insert($data)) {
            return redirect()->to('/')->with('success', 'Post created successfully!');
        } else {
            return redirect()->back()->with('error', 'Error creating the post.');
        }
    }

    public function postUniqueView($id)
    {
        $postModel = new PostModel();

        $post = $postModel->find($id);

        if (!$post) {
            return redirect()->to('/')->with('error', 'Post not found.');
        }

        return view('post_unique', ['post' => $post]);
    }

    public function updatePostView($id)
    {
        $postModel = new PostModel();

        $post = $postModel->find($id);

        if (!$post) {
            return redirect()->to('/')->with('error', 'Post not found.');
        }        

        return view('post_update', ['post' => $post]);
    }

    public function updatePost($id)
    {
        $postModel = new PostModel();

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        if (empty($title) || empty($content)) {
            return redirect()->back()->with('error', 'All fields are required.');
        }

        $data = [
            'title'   => $title,
            'content' => $content,
        ];

        if ($postModel->update($id, $data)) {
            return redirect()->to('/')->with('success', 'Post updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Error updating the post.');
        }
    }

    public function deletePostView($id)
    {
        $postModel = new PostModel();

        $post = $postModel->find($id);

        if (!$post) {
            return redirect()->to('/')->with('error', 'Post not found.');
        }


        return view('post_delete', ['post' => $post]);
    }

    public function deletePost($id)
    {
        $postModel = new PostModel();

        if ($postModel->delete($id)) {
            return redirect()->to('/')->with('success', 'Post deleted successfully!');
        } else {
            return redirect()->to('/')->with('error', message: 'Error deleting the post.');
        }
    }
}
