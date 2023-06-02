const searchInput = document.querySelector('#JsSearch')
const defaultArticle = document.querySelector('.search-form__article-default')
const searchResult = document.querySelector('.search-result')

searchInput.addEventListener('input', function(e) {
    let val = e.target.value.trim();
    if (val.length) {
        searchResult.style.display = "block";
        defaultArticle.style.display = "none";
    } else {
        searchResult.style.display = "none";
        defaultArticle.style.display = "block";
    }
});