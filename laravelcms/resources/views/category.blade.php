<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form>
                    分类名称：<input type="text" name="name" />
                    分类级别：
                        <select name="parent_id">
                                <option value="0">最高级</option>
                            @foreach($category as $post)
                                <option value="{{$post->id}}">{{$post->name}}</option>
                            @endforeach
                        </select>
                    <button>添加</button>
                </form>
            </div>
        </div>
    </body>
</html>
