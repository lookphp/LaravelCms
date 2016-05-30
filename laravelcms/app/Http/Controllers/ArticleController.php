<?php
/**
 * User: yuesir
 * Date: 2016/5/29
 * Time: 9:19
 */

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleContent;
use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Model;

class ArticleController extends Controller{
    /**
     * 添加文章
     */
    public function getAdd(Request $req)
    {
        $article_id = ($req->id) ? $req->id : 0;

        //渲染模板
        return view('article.add', ['id'=>$article_id]);
    }

    /**
     * 创建文章
     * @param $req
     */
    public function postCreate(Request $req)
    {
        $this->validate($req, [
            'title' => 'required|max:255',
            'article_content' => 'required',
        ]);

        //更改文章
        $article  = new Article();
        $content  = new ArticleContent();
        $category = new ArticleCategory();
        if ($req->id) {
            $article_id   = $req->id;
            $article_info = $article->find($req->id);

            $article->save();
        } else {
            $article->title = $req->title;
            $article->intro = $req->intro;
            $article->save();
            $article_id = $article->id;
        }

        //保存文章分类，先检查原先分类的状态，如果存在的

        $category->article_id = $article->id;
        $category->category_id = $req->category;
        $category_res = $category->save();
        if (!$category_res) {
            return '保存分类失败';
        }

        //保存文章内容
        $content = new ArticleContent();
        $content->article_id = $article_id;
        $content->content    = $req->article_content;
        $res = $content->save();

        if ($res) {
            return '更新成功';
        } else {
            return '更新失败';
        }
    }

    /**
     * 更新文章
     */
    public function postUpdate()
    {

    }

    /**
     * 删除文章
     */
    public function getDel()
    {

    }
    
    /**
     * 文章列表
     */
    public function getList()
    {
        $article = new Article();
        $list = $article->get();
        return view('article.list',['list' => $list]);
    }
    
    /**
     * 文章详情
     */
    public function getDetail()
    {
        $article = new Article();
        $detail = $article->where('id',1)->first();
        
//         print_r($detail);
var_dump($detail);

        print_r(1111111111111);
    }
}