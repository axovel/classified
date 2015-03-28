<html>
    
    <head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>
		Search Adds</title>
	<link rel="icon" type="image/x-icon" href="/classified/classified/favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="/classified/classified/favicon.ico">
        <link href="/classified/classified/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="/classified/classified/css/datepicker/jquery-ui.css" type="text/css" rel="stylesheet">
        <link href="/classified/classified/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="/classified/classified/css/styles.css" type="text/css" rel="stylesheet">
        <link href="/classified/classified/css/styles.css" type="text/css" rel="stylesheet">
        <script src="/classified/classified/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <link href="/classified_elasticsearch/css/nav.css" type="text/css" rel="stylesheet">
        <script src="/classified_elasticsearch/js/nav.js" type="text/javascript"></script>

        </script><script src="/classified/classified/js/datepicker/jquery-ui.js" type="text/javascript"></script>
        <script src="/classified/classified/js/bootstrap.js" type="text/javascript"></script>
        <script>
           
        $("document").ready(function(){
           $("#adSearch").click(function(){
             window.location.href="/classified/classified/Searchers/searcher/q:*"+$("#searchWindow").val()+"*"; 
           }); 
            
        });
        </script>
           </head>

<body>
    <div id="main">

    <div class="navbar navbar-default navbar-fixed-top">
        <div id="header">
            <div class="top-bar">
                <div class="container"><!-- container start-->
                    <div class="app">
                        <p>App Available on</p>
                        <i><img border="0" alt="" src="/classified/classified/img/android-icon.png"></i>
                    </div>

                    <div class="right-bar"><!-- right bar start -->
                        <div class="log">
                            <a href="/classified/classified/users/login">Login |</a>				<a href="/classified/classified/users/add">Register</a>			</div>
                        <div class="social-link">
                            <ul>
                                <li><div class="fb"><a href="#"><img border="0" alt="" src="/classified/classified/img/fb.png"></a></div></li>
                                <li><div class="twtr"><a href="#"><img border="0" alt="" src="/classified/classified/img/twitter.png"></a></div></li>
                                <li><div class="g-plus"><a href="#"><img border="0" alt="" src="/classified/classified/img/google-plus.png"></a></div></li>
                            </ul>
                        </div>

                    </div><!-- right bar end -->
                </div><!-- container end-->
            </div><!-- top-bar end --><div class="row header-nav">
                <div class="container"><!-- container start -->
                    <div class="navbar-brand"><a title="Home " href="/classified/classified/pages"><img border="0" alt="" src="/classified/classified/img/logo.png"></a></div>
                    <div class="query"><!-- query start -->
                        <div class="col-md-2"><!-- col-md-2 -->
                            <div class="select-box">
                                <select>
                                    <option>Select Category</option>
                                    <option>bike</option>
                                    <option>car</option>
                                    <option>home</option>
                                </select>
                            </div>
                        </div><!-- col-md-2 end -->
                    </div><!-- query end -->
                    <div class="col-md-6"><!-- col-md-6 start-->
                        <div class="search">
                            
                            <input type="search" placeholder="Search your Product" id="searchWindow">
                            <button id="adSearch"></button>
                        </div>
                    </div><!-- col-md-6 end-->

                    <div class="post-button">
                        <a title="Post a new add " href="/classified/classified/ads/add"><button type="submit">+ Post Your Ad</button></a>	</div>
                </div></div>		</div>
        <div class="banner-area">
            <div class="ad-banner">
                <div class="container"><!-- container start -->
                    <img border="0" alt="" src="/classified/classified/img/home_09.png">	</div><!-- container end -->
            </div>
        </div>
    </div>
</div>
    <div class="container adsform">
        <div class="container">
         <div style="float: left;height:600px;width:30%;">
	<?php echo $this->element('Frontend/category_left'); ?>
             </div>
            <div class="clear:both;">&nbsp;</div>
           <?php  //pr($results);die; ?>
	<div class="search_result" style="width:65%;float: left;">
              <div class="searched_item" style="margin-bottom: 10px;">
                <span style="min-width:60%;text-align: center;text-align: left;float: left;"><?php echo count($results);?> Ads in Category, United States</span><span style="min-width:200px;text-align: right;"><input type="button" class="btn btn-primary" value="Search"></span>
            </div> 
            <?php foreach($results as $result){ ?>
            <div class="search_list" style="border: 1px solid #e5e5e5;padding-top: 10px;height: 210px;margin-left: 20px;width:80%">
                <div class="ad-img"><img src="http://localhost/classified_elasticsearch/img/adimg.jpg" style="width:200px;height:200px;float: left;"></div>
                <div class="details" style="float: left;"><?php echo $result['data']['Ad/ad_title']; ?></div>
 </div>              
 <?php } ?>
       
</div>
        </div>
    </body>
        </html>