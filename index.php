<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script type="text/javascript" src="data.json"></script>



<style type="text/css">

#below { 
   height:1080px; 
   width:1080px; 
   
   padding-left: 1024px;
}
</style>

</head>

<body>

    <div id="wrapper">


        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Twitter API</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
          </ul>
        
        </div>
      </div>
    </nav>
        <div id="sidebar-wrapper" style="">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Twitter API
                    </a>
                </li>
                <li>
                    <a onClick='document.getElementById("ifr").src="searchtweetsbyhashtag.php";'  >Search Tweets By Tags</a>
                </li>

                <li>
                    <a onClick='document.getElementById("ifr").src="hometimeline.php";' >Fetch TimeLine</a>
                </li>
                <li>
                    <a onClick='document.getElementById("ifr").src="fetchfollowerstweet.php";' >Fetch Followers Tweets</a>
                </li>
                <li>
                    <a onClick='document.getElementById("ifr").src="followerslist.php";' >Post Tweet</a>
                </li>
                <li>
                    <a onClick='document.getElementById("ifr").src="FetchImage.html";' >Get Twitter User Image </a>
                </li>
                <li>
                    <a onClick='document.getElementById("ifr").src="friendlist.php";' >Get Friends List</a>
                </li>
                 <li>
                    <a onClick='document.getElementById("ifr").src="retweets.php";' >Get Retweets</a>
                </li>
                <li>
                    <a onClick='document.getElementById("ifr").src="mentionintimeline.php";' >Mentions In Timeline</a>
                </li>
                
            </ul>
        </div>
 
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1></h1>
                        <p></p>
                        <p></p>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="formc" style="width:800px; margin:0 auto;">                   
<div class="form-field" >   
    
 
            <div class="large-inputtext">
                    <iframe id='ifr' src="" width="800" height="800" align="left">
                    </iframe>
             </div>
                                
               
       
                
    </div>


     
          
        

          


</div>
    </div>
   
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
