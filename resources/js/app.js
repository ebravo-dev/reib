import './bootstrap';

var templatecard = document.getElementById('template-card');
var uploadcard = document.getElementById('upload-card');
// var uploadarticle = document.getElementById('uploadArticle');

if (templatecard != null) {
    templatecard.onclick = function () {
        window.location = 'http://reibci.org/plantilla/plantilla_ReIbCi.doc';
    }
}
if (uploadcard != null) {
    uploadcard.onclick = function () {
        $('#uploadArticle').modal('toggle');
    }
}

// $(document).ready(function () {
//     $('#avisomodal').modal('show');
// });

$("#fileselected").on("change", function () {
    var filename = $("#fileselected").val();
    filename = filename.replace(/.*[\/\\]/, '');
    // console.log(filename);
    $("#fileselectedbutton").html(filename);
    // $("#uploadsubmit").show();

});

$("#uploadArticle").on("change", function () {
    // $("#fileselected").val("");
    // $("#uploadsubmit").hide();
    // $("#fileselectedbutton").show();

});

window.addEventListener("pageshow", function (event) {
    $("#spinnerupload").hide();
    $("#enviartxtupload").show();
    $('#avisomodal').modal('toggle');
    $('#noticemodal').modal('toggle');
});

$("#uploadsubmit").on("click", function () {
    var filename = $("#fileselected").val();
    var contact = $("#contactupload").val();
    var name = $("#nameupload").val();
    if (filename !== "" && contact !== "" && name !== "") {
        $("#spinnerupload").show();
        $("#enviartxtupload").hide();
    }
});

$("#closetohome").on("click", function () {
    var href = $('#gotohome').attr('href');
    window.location.href = href;
});

$("#currenteditions-card").on("click", function () {
    var href = $('#currenteditions-url').attr('href');
    window.location.href = href;
});

$('#avisomodal').on('hidden.bs.modal', function () {
    var href = $('#gotohome').attr('href');
    window.location.href = href;
});

var articles = document.getElementsByClassName('url-article-provider');


for (let i = 0; i < articles.length; i++) {
    articles[i].onclick = function () {
        var win = window.open(articles[i].attributes.dir.value, '_blank');
        win.focus();
    }
}

$("#sincedropdown a").on('click', function () {
    $(this).parents(".dropdown").find('.btn').html('<span class="pr-2">Desde ' + $(this).text() + '</span>');
    $("#sinceinput").val($(this).text());
    // $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});

$("#inputbar").on("keyup", function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
        $("#searchsubmit").click();
    }
});

$("#searchicon").on('click', function () {
    $("#searchsubmit").click();
});

$(function () {
    $('[data-toggle="popover"]').popover()
})
