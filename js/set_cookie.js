$(function () {
    //#### Получаем куки по ключу film
    var getFullCookieJSON = document.cookie.match(/film=(.+?)(;|$)/);
    if (getFullCookieJSON == null) {    // если нет, тогда создаем пустой массив
        var arrFilms = [];
    }
    else {                              // если уже есть, тогда JSON переводим в массив
        var arrFilmsJSON = getFullCookieJSON[1];
        var arrFilms = JSON.parse(arrFilmsJSON);
    }
    console.log('получили: ' +arrFilms);

    //#### Проверяем на избежание дублежей в кукисах
    var filmId = $('.cinema').attr('data-film');    // id фильма
    
    if (arrFilms.indexOf(filmId) == -1) {   // если нет совпадений
        setTimeout(function() {             // таймер, который сработает через 5мин
            console.log(filmId+ ' - нет совпадения');
            arrFilms.unshift(filmId);       // добавляем id в начало массива
            var setCookie = JSON.stringify(arrFilms);   // переводим массив у JSON
            document.cookie = 'film='+setCookie+';path=/';  // записываем кукисы
            console.log('установили: ' +setCookie);
        }, 1000*60*5);
    }
    else {                                  // если уже есть совпадение
        console.log(filmId+ ' - совпадение');
    }
});