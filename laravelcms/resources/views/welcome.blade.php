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
	            <ul class="get-artiles" id="galist">
					<li>
						<div class="point">+5</div>
					    <div class="avatar"><img src="http://tp4.sinaimg.cn/1088413295/50/40057000557/1" class="avatar"/></div>
					    <div class="card">
					    <h2><a href="/8504.get" target="_blank">利用Hook把Git当网站发布工具用 </a></h2>
				        <div class="action clearfix">
					        <ul class="actions">
								<li><time class="timeago" datetime="2016-05-06 20:19:09">2016-05-06 20:19:09</time></li>
								<li class="tauthor"><a href="/1.user" target="_blank" class="green">推荐人&nbsp;<a href="/1.user" target="_blank" class="get">Easy</a></a></li>
								<li><a href="8504.get" target="_blank" >阅读全文</a></li>
								<li ><a href="javascript:add2kb('8504');" class="kblink-8504">+收藏到知识库</a></li>
					        </ul>	        
					      </div>
					    </div> 
					</li>

					<li>
						<div class="point">+5</div>
					    <div class="avatar"><img src="http://tp4.sinaimg.cn/1088413295/50/40057000557/1" class="avatar"/></div>
					    <div class="card">
					    <h2><a href="/8504.get" target="_blank">利用Hook把Git当网站发布工具用 </a></h2>
				        <div class="action clearfix">
					        <ul class="actions">
								<li><time class="timeago" datetime="2016-05-06 20:19:09">2016-05-06 20:19:09</time></li>
								<li class="tauthor"><a href="/1.user" target="_blank" class="green">推荐人&nbsp;<a href="/1.user" target="_blank" class="get">Easy</a></a></li>
								<li><a href="8504.get" target="_blank" >阅读全文</a></li>
								<li ><a href="javascript:add2kb('8504');" class="kblink-8504">+收藏到知识库</a></li>
					        </ul>	        
					      </div>
					    </div> 
					</li>

					<li>
						<div class="point">+5</div>
					    <div class="avatar"><img src="http://tp4.sinaimg.cn/1088413295/50/40057000557/1" class="avatar"/></div>
					    <div class="card">
					    <h2><a href="/8504.get" target="_blank">利用Hook把Git当网站发布工具用 </a></h2>
				        <div class="action clearfix">
					        <ul class="actions">
								<li><time class="timeago" datetime="2016-05-06 20:19:09">2016-05-06 20:19:09</time></li>
								<li class="tauthor"><a href="/1.user" target="_blank" class="green">推荐人&nbsp;<a href="/1.user" target="_blank" class="get">Easy</a></a></li>
								<li><a href="8504.get" target="_blank" >阅读全文</a></li>
								<li ><a href="javascript:add2kb('8504');" class="kblink-8504">+收藏到知识库</a></li>
					        </ul>	        
					      </div>
					    </div> 
					</li>

				</ul>
			</div>
			</div>
		</div>
 	</body>
</html>

