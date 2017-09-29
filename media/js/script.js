function createUploader(){
    var uploader = new qq.FileUploader({
        element: document.getElementById('file-uploader-demo1'),
        action: '/blog/upload',
        allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
        debug: true,
        onComplete: function(id, fileName, responseJSON){
            $('form').find('input[name=file]').val(fileName);
        },
        extraDropzones: [qq.getByClass(document, 'qq-upload-extra-drop-area')[0]]
    });           
}
$(function(){

    $(document).on('click', '.js-addmodal', function(){
        $.get('/blog/add',{}, function(html){
            $('.modal-body').html(html);
            $('#myModal').modal('show');
            
            createUploader();
        });
        return false;
    });
    
    $(document).on('submit', '.js-form', function(){
        var form = $(this);
        var name = form.find('input[name=name]').val();
        var text = form.find('textarea[name=text]').val();
        var file = form.find('input[name=file]').val();
        
        $.post('/blog/add',{name:name, text:text, file:file}, function(html){
            $('.modal-body').html(html);
            
            setTimeout(function() { window.location.reload(); }, 500);
            /*$.post('/blog/list',{}, function(html){
                var cnt = $(html).find('.items').html();
                $('.items').html(cnt);
            });*/
        });
        return false;
    });
     
    $(document).on('click', '.js-editmodal', function(){
        var id = $(this).data('id');
        $.get('/blog/edit/'+id,{}, function(html){
            $('.modal-body').html(html);
            $('#myModal').modal('show');
            
            createUploader();
        });
        return false;
    });
    
    $(document).on('submit', '.js-form-update', function(){
        var form = $(this);
        var id = form.find('input[name=id]').val();
        var name = form.find('input[name=name]').val();
        var text = form.find('textarea[name=text]').val();
        var file = form.find('input[name=file]').val();
        
        $.post('/blog/edit/'+id,{name:name, text:text, file:file}, function(html){
            $('.modal-body').html(html);
            
            setTimeout(function() { window.location.reload(); }, 500);
            /*$.post('/blog/list',{}, function(html){
                var cnt = $(html).find('.items').html();
                $('.items').html(cnt);
            });*/
        });
        return false;
    });
   
});