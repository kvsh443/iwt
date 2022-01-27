document.getElementById("image-file").onchange = function() {
    document.getElementById("hidden-image-upload-form").submit();
    document.getElementById("change-label").innerHTML= "Uploaded";
}