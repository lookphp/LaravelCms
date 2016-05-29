<!DOCTYPE html>
<html>
    <head>
        <title>登录页</title>



        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
					<form action="">
						账号:<input type="text" id="email" name="psw"/></br>
						密码:<input type="text" id="psw" name="psw"/></br>
						<input type="submit" id="confirm" value="登录"/>
						<input type="button" id="register" value="注册" onclick="javascript:location.href='{{url("User/register")}}';"/>
					</form>
				</div>
            </div>
        </div>
    </body>
</html>


