$(document).ready(function () {
    /* BREADCRUMBS*/
    // check current page
    var pagePath = window.location.pathname;
    var page = (pagePath.substr(pagePath.lastIndexOf("/") + 1).split("."))[0];
    var pageName;

    // Style path name
    switch(page){
        case "signup":
            pageName = "Sign Up";
            break;
        case "login":
            pageName = "Log In"
            break;
    }

    // send page name and path to breadcrumbs html page
    $("#breadcrumb-active").html(pageName);

});
