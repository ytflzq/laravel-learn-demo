(function hasUserIdSession() {
            $.get("/laravel/public/hasUserIdSession",function (result) {
                if (result==2) {
                   parent.window.location = "/laravel/public/";
                }
            });  
})()