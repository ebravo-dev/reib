import './bootstrap';

var cartaplantilla = document.getElementById('cartaplantilla');

if (cartaplantilla != null) {
    cartaplantilla.onclick = function () {
        window.location = 'http://reibci.org/plantilla/plantilla_ReIbCi.doc';
    }
}
var articles = document.getElementsByClassName('url-article-provider');


for (let i = 0; i < articles.length; i++) {
    articles[i].onclick = function () {
        var win = window.open(articles[i].attributes.dir.value, '_blank');
        win.focus();
    }
}
