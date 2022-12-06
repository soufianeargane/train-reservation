
// How to use localstorage
// https://blog.logrocket.com/localstorage-javascript-complete-guide/#setitem
function doNotShowAgain(){
    window.localStorage.setItem('show', 'No');
    alert(window.localStorage.getItem('show'));
    document.getElementById("popUp").innerHTML = "";
}


