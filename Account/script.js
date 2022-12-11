function modifications(){

    // var afterMOD = document.getElementById("AfterMod");
    // var afterMOD = document.querySelectorAll(".AfterMod")
    // afterMOD.style.display= "none";

    //https://stackoverflow.com/questions/31799603/show-hide-multiple-divs-javascript
    $(".AfterMod").slideToggle();

    //clear the inputs
    //https://stackoverflow.com/questions/11072031/clearing-multiple-text-input-boxes-with-one-name
    $(".clear").val("");
}