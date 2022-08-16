


document.addEventListener('DOMContentLoaded', function () {
    let current_url = document.location;
    console.log(current_url);

    document.querySelectorAll(".nav-link").forEach(function (e) {
        if (e.href == current_url) {
            e.classList += " current";
        }
        if(current_url=='http://localhost/SitioWebWaresoft/views/public/'){
            document.getElementById('home').classList.add('current');
        }
    });
});