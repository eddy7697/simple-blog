<?php

namespace App\Http\Controllers\backend;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Ramsey\Uuid\Uuid;

class PostController extends Controller
{
    /**
     * 取得單一篇文章
     */
    public function getPost($uuid)
    {
        try {
            $data = Post::where('postUuid', $uuid)->first();
            $status = 200;
            $message = 'Get post success.';
        } catch (\Exception $e) {
            $data = null;
            $status = 500;
            $message = $e->getMessage();
        }

        return response()->json([ 
            'status' => $status, 
            'data' => $data,
            'message' => $message 
        ], $status);
    }

    /** 
     * 取得全部的文章
     * 需夾帶每頁幾個項目數量
     */
    public function getAllPost($row) 
    {
        try {
            $data = Post::paginate($row);
            $status = 200;
            $message = 'Get post success.';
        } catch (\Exception $e) {
            $data = null;
            $status = 500;
            $message = $e->getMessage();
        }

        return response()->json([ 
            'status' => $status, 
            'data' => $data,
            'message' => $message 
        ], $status);
    }

    /**
     * 創建文章
     */
    public function addPost(Request $request) 
    {
        $body = $request->all();

        $validator = Validator::make($body, [
            'postTitle' => 'required|unique:posts|max:255',
            'postAuthor' => 'required',
            'postContent' => 'required'
        ]);

        $body['postUuid'] = Uuid::uuid1();

        try {
            $data = Post::create($body);
            $status = 200;
            $message = 'Create post success';
        } catch (\Exception $e) {
            $data = null;
            $status = 500;
            $message = $e->getMessage();
        }

        return response()->json([ 
            'status' => $status, 
            'data' => $data,
            'message' => $message 
        ], $status);
    }

    /**
     * 修改文章
     */
    public function updatePost(Request $request, $uuid)
    {
        $body = $request->all();

        try {
            $data = Post::where('postUuid', $uuid)
                        ->update([
                            'postTitle' => $body['postTitle'],
                            'postCategory' => $body['postCategory'],
                            'postContent' => $body['postContent']
                        ]);
            $status = 200;
            $message = 'Update post success';
        } catch (\Exception $e) {
            $data = null;
            $status = 500;
            $message = $e->getMessage();
        }

        return response()->json([ 
            'status' => $status, 
            'data' => $data,
            'message' => $message 
        ], $status);
    }

    /**
     * 刪除文章
     */
    public function deletePost(Request $request)
    {
        $body = $request->all();

        try {
            $data = Post::where('postUuid', $body['postUuid'])
                        ->delete();
            $status = 200;
            $message = 'Delete post success';
        } catch (\Exception $e) {
            $data = null;
            $status = 500;
            $message = $e->getMessage();
        }

        return response()->json([ 
            'status' => $status, 
            'data' => $data,
            'message' => $message 
        ], $status);
    }
}
