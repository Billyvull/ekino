$(function () {
    //#### Получаем куки по ключу
    var getFullCookieJSON = document.cookie.match(/film=(.+?)(;|$)/);
    if (getFullCookieJSON == null) {    // если нет, тогда создаем пустой массив
        var arrFilms = [];
    }
    else {                              // если уже есть, тогда JSON переводим в массив
        var arrFilmsJSON = getFullCookieJSON[1];
        var arrFilms = JSON.parse(arrFilmsJSON);
    }
    console.log('получили: ' +arrFilms);

    // #2 Проверяем на наличие для списка
    console.log('проверяем: ');
    $.each(arrFilms, function name(i, val) {    // пробегаем по каждому элементу куки
        console.log('('+i+') '+val);
        // находим li с data-атрибутом, который совпадает с кукой и задаем стиль
        $('.films__list_item[data-film='+val+'] .film__box').addClass('film__visited');
    });
});