<?php

namespace App\Http\Controllers\Backend;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Ramsey\Uuid\Uuid;

class CategoryController extends Controller
{
    /**
     * 取得所有類別
     */
    public function getAllCategories()
    {
        try {
            $data = Category::all();
            $status = 200;
            $message = 'Get all category success.';
        } catch(\Exception $e) {
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
     * 建立類別
     */
    public function createCategory(Request $request)
    {
        $body = $request->all();

        $validator = Validator::make($body, [
            'categoryTitle' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            $data = $validator->errors();
            $status = 426;
            $message = 'Requirement parameter invalidated.';
        } else {
            $body['categoryUuid'] = Uuid::uuid1();

            try {
                $data = Category::create($body);
                $status = 200;
                $message = 'Create category success.';
            } catch(\Exception $e) {
                $data = null;
                $status = 500;
                $messgae = $e->getMessage();
            }
        }        

        return response()->json([ 
            'status' => $status, 
            'data' => $data,
            'message' => $message 
        ], $status);
    }

    /**
     * 修改類別
     */
    public function updateCategory(Request $request, $uuid)
    {
        $body = $request->all();

        try {
            $data = Category::where('categoryUuid', $uuid)
                        ->update($body);
            $status = 200;
            $message = 'Update category success';
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
     * 刪除類別
     */
    public function deleteCategory(Request $request)
    {
        $body = $request->all();

        $validator = Validator::make($body, [
            'categoryUuid' => 'required'
        ]);

        try {
            $data = Category::where('categoryUuid', $body['categoryUuid'])
                        ->delete();
            $status = 200;
            $message = 'Delete category success';
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
