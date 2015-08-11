        <style>
            *{margin:0px; padding:0px;}
            #wrapper{
            	padding-left: 0;
            }
            body {
                background-color:#fff;
                font-family:arial;
            }

             /* Clear Button Style */
            .btn::-moz-focus-inner {
                border:0;
                padding:0
            }
            
            .btn {
                width:auto;
                border:0 none;
                margin:0;
                padding:0;
                background:transparent;
                overflow:visible;
                /* Stupid IE */
                font:14px arial, sans-serif;
                vertical-align:middle; /* IE6,IE7 */
            }
            
            /* Login Form Style */
            .login {
                width:380px;
                margin: 100px auto;
                border-radius:20px;
                text-align: center;
            }

            .login img {
                width: 350px;
                margin-bottom: 20px;
            }

            .login-form {
                /*width: 360px;*/
                padding: 20px;
                background-color: #656565;
            }
            
            .login-username, .login-password {
                width:100%;
                height:50px;
                text-indent:20px;
                font-size:20px;
                border: none;
                background-color: #fff;
                color: #656565;
                box-shadow: none;
            }
            
            .login-username {
                margin-bottom: 10px;  
            }
            
            .login-button {
                cursor:pointer;
                width:100%;
                text-align:center;
                background-color:#ababab;
                height:60px;
                font-size:20px;
                text-transform:uppercase;
                border: none;
                margin-top:20px;
                color:#fff;
            }
            
            .login-button:hover {
                background-color:#6a95d2;
            }
            
            .error {
               width: 100%;
               text-align: center;
               color:red; 
            }

            p {
                color: #656565;
                margin-top: 10px;
            }
            
        </style>
        <div class="login">
            <img src="../images/nogoblog-admin.png">
            <form action="" method="post" class="login-form">
                <?php if(isset($error)){ echo '<h4 class="error">Login Error</h4>'; } ?>
                <input type="text" name="username" class="login-username" placeholder="Username" />
                <input type="password" name="password" class="login-password" placeholder="Password" />
                <input type="submit" value="Login" class="btn login-button" />
            </form>
        </div>