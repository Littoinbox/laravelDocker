function watchListVerification(data) {
    console.log(data);

}

(function ($) {

    //добавление новой строки в списке добавляемых ссылок на сканирование
    $(document).on('click', '.addLinks', function () {
        let html = "<label>Ссылка на товар либо бренд</label>\n" +
            "                        <input type=\"text\" name=\"link[]\">\n";
        $(this).parent().prev().append(html);

    });

    $(document).on('click', '.saveWatchList', function () {

       let data = $('form[name=addwatchlist]').serialize();
        watchListVerification(data);
        return false;
    });

})(jQuery);
