<!-- app/views/index.php -->

<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> 
<title>Test</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>
    <script src="{{ asset('/js/jquery-latest.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/angular.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('/js/controllers/MainCtrl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/services/commentService.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/comment.js') }}"></script> 
</head> 
<body class="container" ng-app="commentApp" ng-controller="mainController"> <div class="col-md-8 col-md-offset-2">
    <div class="page-header">
        <h2>Test</h2>
        <h4></h4>
    </div>
    <!-- NEW COMMENT FORM =============================================== -->
    <form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->
        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
        </div>
        <!-- COMMENT TEXT -->
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
        </div>
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">   
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
        <h3>Comment #@{{ comment.id }} <small>by @{{ comment.fullnames }}</h3>
        <p>@{{ comment.comments }}</p>
        <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>                         
    </div>
</div> 
</body> 
</html>