// public/js/services/commentService.js

//https://scotch.io/tutorials/create-a-laravel-and-angular-single-page-comment-application
angular.module('commentService', [])
.factory('Comment', function($http,$location) { 

    return {
        // get all the comments
        get : function() {         
            var urlArr = $location.$$absUrl.split('/')
            return $http.get('/comments/'+urlArr[urlArr.length-1]);
        },

        // save a comment (pass in comment data)
        save : function(commentData) {
            return $http({
                method: 'POST',
                url: '/comments',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(commentData)
            });
        },

        // destroy a comment
        destroy : function(id) {
            return $http.delete('/comments/' + id);
        }
    }

});
