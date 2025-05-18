$("#registerToggle").click(function(){
    $("#togglePoint").animate({left: '100px'}, 350);
    $("#form-login").hide();
    $("#form-register").show();
});
$("#loginToggle").click(function(){
    $("#togglePoint").animate({left: '0px'}, 350);
    $("#form-register").hide();
    $("#form-login").show();
});

var dropzone = document.getElementById('dropzone');

dropzone.addEventListener('dragover', e => {
    e.preventDefault();
    dropzone.classList.add('border-blue-500');
});

dropzone.addEventListener('dragleave', e => {
    e.preventDefault();
    dropzone.classList.remove('border-blue-500');
});

dropzone.addEventListener('drop', e => {
    e.preventDefault();
    dropzone.classList.remove('border-blue-500');
    var file = e.dataTransfer.files[0];
    displayPreview(file);
});

var input = document.getElementById('file-upload');

input.addEventListener('change', e => {
    var file = e.target.files[0];
    displayPreview(file);
});

function displayPreview(file) {
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
        var preview = document.getElementById('preview');
        preview.src = reader.result;
        preview.classList.remove('hidden');
    };
}