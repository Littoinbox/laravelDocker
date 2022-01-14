(function ($) {

    //добавление новой строки в списке добавляемых ссылок на сканирование
    $(document).on('click', '.addLinks', function () {
        let html = "<label>Ссылка на товар либо бренд</label>\n" +
            "                        <input type=\"text\" class='watchListLink' name=\"link[]\">\n";
        $(this).parent().prev().append(html);

    });

    $(document).on('blur', '.watchListLink', function () {
        let val = $(this).val();
        validateLink(val, $(this));
    });


    $(document).on('click', '.saveWatchList', function () {
        let is_valid = true;
        $('.watchListLink').each(function () {
            if ($(this).hasClass('notValid')) {
                is_valid = false;
            }
        });
        if (is_valid) {
            $.ajax({
                url: '/ajax/addList',
                type: 'post',
                data: $('form[name=addwatchlist]').serialize()
                ,
                success: function(result) {
                    console.log(result);
                }
            });
        }
        else {
            alert("Неправильно заполнены все поля!");
            return false;
        }

    });

    function validateLink(val, el) {
        el.removeClass('valid');
        el.removeClass('notValid');
        if (val.length <= 0) {
            return true;
        } else if (/wildberries\.ru/.test(val) || /ozon\.ru/.test(val)) {
            el.addClass('valid');
            return true;
        } else {
            el.addClass('notValid');
            return false;
        }
    }

})(jQuery);
