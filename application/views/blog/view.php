<div class="col-md-12">
    <p><a href="/blog/list">< Назад</a></p>
    <h1><?=$item->name?></h1>
    <p><small><?=$item->created?></small></p>
    <?php if($item->file):?>
    <img src="/media/uploads/<?=$item->file?>" alt="<?=$item->name?>" />
    <?php endif;?>
    <p><?=$item->text?></p>
</div>