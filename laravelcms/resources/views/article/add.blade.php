<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Bootstrap 101 Template</title>
    @include('common/refer')
</head>
<body>
<!-- navbar -->
<div class="navbar navbar-fixed-top navbar-get" role="navigation" id="theheader">
    <div class="container clearfix">

        <a class="logo" href="/?c=default"><img src="{{URL::asset('/images/get32px.png')}}"><span class="get">Get</span>社区</a>
        <!-- <div class="new_message_notice"></div> -->
        <!-- <span class="exp">每日Get新知识</span> -->

        <div class="navbar-collapse collapse pull-right">
            <ul class="get-cate-nav">
                <li class="dropdown   active  ">
                    <button class="btn btn-getnar dropdown-toggle" type="button"  onclick="location='/?c=default'">
                        新知
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li class=" active "><a href="/">全部</a></li>
                        <li class="" role="presentation"><a href="/?cate=1" role="menuitem" tabindex="-1">技术</a></li>
                        <li class="" role="presentation"><a href="/?cate=2" role="menuitem" tabindex="-1">设计</a></li>
                        <li class="" role="presentation"><a href="/?cate=3" role="menuitem" tabindex="-1">产品</a></li>
                        <li class="" role="presentation"><a href="/?cate=4" role="menuitem" tabindex="-1">创业</a></li>
                        <li class=""><a href="/?a=kb">我的</a></li>
                        <li class=""><a href="/?a=feed">我关注的</a></li>
                        <li class="" ><a href="/?a=submit" target="_blank">+添加新知</a></li>
                    </ul>
                </li>

                <li class="dropdown  ">
                    <button class="btn btn-getnar dropdown-toggle" type="button"  onclick="location='/?c=card'">
                        卡片流
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li class=""><a href="/?c=card">我的首页</a></li>
                        <li class=""><a href="/?c=card&a=explore">随便看看</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container -->
</div><!-- /.navbar -->

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>创建文章</h1>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form role="form" action="create" method="post">
                            <!--csrf_token verify-->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="title">
                                   标题
                                </label>
                                <input type="text" class="form-control" id="title" name="title"/>
                            </div>
                            <div class="form-group">
                                <label for="intro">
                                    简介
                                </label>
                                <textarea name="intro" id="intro" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">
                                    内容
                                </label>
                                <textarea name="article_content" id="content" class="form-control" rows="16"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">
                                    分类
                                </label>
                                <select multiple class="form-control" name="category">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="exampleInputFile">--}}
                                    {{--File input--}}
                                {{--</label>--}}
                                {{--<input type="file" id="exampleInputFile" />--}}
                                {{--<p class="help-block">--}}
                                    {{--Example block-level help text here.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            <button type="submit" class="btn btn-default">
                                提交
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

