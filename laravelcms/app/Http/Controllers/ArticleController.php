<?php
/**
 * User: yuesir
 * Date: 2016/5/29
 * Time: 9:19
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller{
    /**
     * 添加文章
     */
    public function getAdd(Request $req)
    {
        $article_id = ($req->id) ? $req->id : 0;

        exit($article_id);
        //渲染模板
        return view('article.add', ['id'=>$article_id]);
    }

    /**
     * 创建文章
     * @param $req
     */
    public function postCreate(Request $req)
    {
        exit('create');
    }
}