$(function () {
    //手机端菜单
    $('#toolbox-mobile').click(function () {
        $('.modale').addClass('show');
    });
    $('#close').click(function () {
        $('.modale').removeClass('show');
    });

    //编辑器
    if($('#editor').length){
        let E = window.wangEditor;
        let editor = new E('#editor');
        let $content = $('#content');

        editor.customConfig.uploadFileName = 'pic';
        editor.customConfig.uploadImgServer = '/admin/posts/uploadfile';

        editor.customConfig.uploadImgHeaders = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        };

        editor.customConfig.debug = true;
        editor.customConfig.onchange = function (html) {
            $content.val(html)// 监控变化，同步更新到 textarea
        };
        editor.create();


        editor.txt.html($content.val());
        // $content.val(editor.txt.html());

    }


    //文章h2目录
    if($('.article-content h2').length){
        let $h2 =  $('.article-content h2');
        $h2.each(function () {
            let text = ($(this).text());
            $(this).attr('id',text);
            let str = `<li class="toc-item toc-level-2"><a class="toc-link" href="#${text}"><span class="toc-text">${text}</span></a></li>`;
            $('.toc').append(str);
        });
    }else {
        $('.toc').append('<li class="toc-item toc-level-2"><em>暂无</em></li>')
    }





    // $.get('http://127.0.0.1:9200/laravel/post/_search?q=1',function (data) {
    //     console.log(data)
    // })



    $('.post-status').on('change',function () {
        let status = $(this).is(":checked")?1:0;
        let id = $(this).data('id');

        $.get('/admin/posts/'+ id +'/status',{status})

    })





})
