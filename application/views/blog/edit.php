<form action="" method="POST" class="js-form-update">
    <input name="id" type="hidden" value="<?=$item->id?>"/>
    <input name="file" type="hidden" value="<?=$item->file?>"/>
    <div class="form-group">
        <input class="form-control" placeholder="Введите название" type="text" required name="name" value="<?=$item->name?>" />
    </div>
    <div class="form-group">
        <textarea class="form-control" name="text"><?=$item->text?></textarea>
    </div>
    <?php if($item->file):?>
    <p>Загруженное изображение:</p>
    <img src="/media/uploads/<?=$item->file?>" alt="<?=$item->name?>" />
    <br><br>
    <?php endif;?>
    <div class="form-group">
        <div id="file-uploader-demo1">        
            <noscript>            
                <p>Please enable JavaScript to use file uploader.</p>
                <!-- or put a simple form for upload here -->
            </noscript>         
        </div>

        <div class="qq-upload-extra-drop-area">Drop files here too</div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary js-add" value="Сохранить" />
    </div>
</form>