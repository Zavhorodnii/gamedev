$(document).ready(function () {
    var template = tinymce.get("postdivrich").getContent();

    console.log('script ready');

    $( ".js_get_selected_template_id" ).change(function() {
        let post_id = $('.js_get_selected_template_id').find(":selected").val();

        let data = new FormData();
        data.append('action', 'get_template');
        data.append('post_id', post_id);
        $.ajax({
            url: window.ajaxUrl,
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // console.log('data' + data);
                // console.log('data = ' + data.html);
                if (data.status === 'ok') {
                    console.log('template = ' + data.template);

                    tinymce.activeEditor.setContent(data.template);
                }
            },
            error: function (jqXHR, status, errorThrown) {
                console.log('ОШИБКА AJAX запроса: ' + status, jqXHR);
                window.alert('Возникла ошибка. Перезагрузите страницу');
            }
        })
    });



    $('.js_send_email').click(js_send_email);


    function js_send_email (event) {
        event.preventDefault();

        let data = new FormData();

        data.append('action', 'send_mail');
        data.append('email', $(this).attr('data-email'));
        data.append('message', tinymce.get("postdivrich").getContent());

        let post_id = $('.js_get_selected_template_id').find(":selected").val();
        data.append('post_id', post_id);

        $.ajax({
            url: window.ajaxUrl,
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // console.log('data' + data);
                // console.log('data = ' + data.html);
                if (data.status === 'ok') {
                    window.alert('Message sent');
                    tinymce.activeEditor.setContent(data.template);
                }
            },
            error: function (jqXHR, status, errorThrown) {
                console.log('ОШИБКА AJAX запроса: ' + status, jqXHR);
                window.alert('Возникла ошибка. Перезагрузите страницу');
            }
        })

    }

});