$(document).ready(function(){

    console.log('v_ajax');

    $('.js_click_load_more_posts').click(function (e){
        e.preventDefault();
        let $this = $(this);

        let offset = $(this).attr('data-post-offset');
        let post_type = $(this).attr('data-post-type')

        let data = new FormData;

        data.append('action', 'ajax_get_more_post');
        data.append('offset', offset)
        data.append('post_type', post_type)

        $.ajax({
            url: window.ajaxUrl,
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // console.log('data' + data);
                // console.log('data = ' + data.status);
                if(data.status === 'ok'){
                    $this.attr('data-post-offset', data.offset);

                    $('.js_paste_post').append(data.html);

                    if( data.more_post === 'none' ){
                        $('.js_delete_more_posts').remove();
                    }
                }
            },
            error: function (jqXHR, status, errorThrown) {
                console.log('ОШИБКА AJAX запроса: ' + status, jqXHR);
            }
        })

    })
    $('.js_get_email_follow').click(function (e){
        e.preventDefault();
        let $this = $(this);

        let email = $(this).closest('.js_find_info').find('.js_get_email');

        let data = new FormData;

        data.append('action', 'ajax_follow_email');
        data.append('email', email.val())
        if(email.val().length < 5){
            email.addClass('error')
            return;
        }
        email.removeClass('error');

        $.ajax({
            url: window.ajaxUrl,
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // console.log('data' + data);
                // console.log('data = ' + data.status);
                if(data.status === 'ok'){
                    email.val('');
                }
            },
            error: function (jqXHR, status, errorThrown) {
                console.log('ОШИБКА AJAX запроса: ' + status, jqXHR);
            }
        })

    })

})