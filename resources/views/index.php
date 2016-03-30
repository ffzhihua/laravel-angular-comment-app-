<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular Comment System</title>
 

    <link rel="stylesheet" href="js/bootstrap.min.css"> 
   
    <style>
        body         { padding-top:30px; }
        form         { padding-bottom:20px; }
        .comment     { padding-bottom:20px; }
    </style>
 

   <script src="js/jquery.min.js"></script>
   <script src="js/angular.min.js"></script>

        <script src="js/controllers/mainCtrl.js"></script> 
        <script src="js/services/commentService.js"></script>
        <script src="js/app.js"></script>
</head>

<body ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">
 
   
    <div>
        <h2>Laravel and Angular Single Page Application</h2>
        <h4>Commenting System</h4>
    </div>
 

    <form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->
 
        <!-- AUTHOR -->
        <div>
            <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
        </div>
 
        <!-- COMMENT TEXT -->
        <div>
            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
        </div>
         
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
 
    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
 
    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <div ng-hide="loading" ng-repeat="comment in comments">
        <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</h3>
        <p>{{ comment.text }}</p>
 
        <p><a href="#" ng-click="deleteComment(comment.id)">Delete</a></p>
    </div>
 
</div>
</body>

 
</html>