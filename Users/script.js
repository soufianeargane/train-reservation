
// How to use localstorage
// https://blog.logrocket.com/localstorage-javascript-complete-guide/#setitem
function doNotShowAgain(){
    window.localStorage.setItem('show', 'No');
    document.getElementById("popUp").innerHTML = "";
}


