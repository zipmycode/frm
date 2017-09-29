<?php foreach($items as $item):?>
<div class="col-md-4">
    <h2><?=$item->name?></h2>
    <p><small><?=$item->created?></small></p>
    <?php if($item->file):?>
    <img src="/media/uploads/<?=$item->file?>" alt="<?=$item->name?>" />
    <?php endif;?>
    <p><?=$item->text?></p>
    <p><a class="btn btn-secondary" href="/blog/view/<?=$item->id?>" role="button">Посмотреть &raquo;</a> <a class="btn btn-secondary js-editmodal" data-id="<?=$item->id?>" href="#" role="button">Изменить</a> <a class="btn btn-secondary" href="/blog/delete/<?=$item->id?>" role="button" onclick="return confirm('Вы уверены?')">Удалить</a></p>
</div>
<?php endforeach;?>