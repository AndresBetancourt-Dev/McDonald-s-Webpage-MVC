document.addEventListener("DOMContentLoaded", function(event) {
    var closeLogin = document.getElementById("close");
    var closeMainContainer = document.getElementById("login");
        closeLogin.addEventListener("click",function(){
            if(closeLogin.className == "loginClose"){
                closeLogin.className = "hide";
                closeMainContainer.className = "hide";
            }

        });
});
       


