<h3>Все каталоги</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Алиас</th>
            <th>Родительский Каталог</th>
            <th>Дата создания</th>
            <th width="50">Состояние</th>
            <th width="80">В корзину</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($catalogs as $catalog) : ?>
            <tr class="pageedit">
                <td><?=$catalog->id;?></td>
                <td class="pagename">
                    <form action="" method="post" name="edititem" id="edititem">
                        <input type="hidden" value="<?=$catalog->id;?>" name="id">
                        <a href="#edit" onclick="req.editItem('catalogs',<?=$catalog->id;?>);">
                            <?=$catalog->catname;?>
                        </a>
                    </form>
                </td>
                <td class="pagedesc"><?=$catalog->alias;?></td>
                <td class="catname"><?=$catalog->catalogs->catname == '' ? 'нет' : $catalog->catalogs->catname;?></td>
                <td><?=$catalog->date;?></td>
                <td>
                    <form action="" method="post" id="cngstatus<?=$catalog->id;?>">
                        <input type="hidden" name="idpage" value="<?=$catalog->id;?>">
                        <?php if ($catalog->status == 1) : ?>
                             <a href="#" onclick="req.off('catalogs', this); return false;">
                                 <img src='<?=URL::base()?>assets/img/admin/published.png'>
                             </a>
                        <? else : ?>
                             <a href="#" onclick="req.on('catalogs',this); return false;">
                                 <img src='<?=URL::base()?>assets/img/admin/not-published.png'>
                             </a>
                        <? endif; ?>
                    </form>
                </td>
                <td>
                    <form action="" method="post" id="intrash<?=$catalog->id;?>">
                        <input type="hidden" name="intrash" value="<?=$catalog->id;?>">
                        <a href="#" onclick="req.intrash('catalogs', this);">
                            <img src='<?=URL::base()?>assets/img/admin/delete.png'>
                        </a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?=$failsearch;?>
<form action="" method="post" id="save">
<div class="row">
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select1">Сортировать по:</label>
            <div class="controls">
                <select id="select1" name="sortby" class="input-medium">
                    <option value="id">ID</option>
                    <option value="catname">Названию</option>
                    <option value="catdesc">Описанию</option>
                    <option value="parent_id">Родительскому каталогу</option>
                    <option value="date">Дате</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select2">Выводить по:</label>
            <div class="controls">
                <select id="select2" name="limit" class="input-medium">
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span3 savepages">
        <a class="btn btn-success" onclick="req.sortItems('catalogs');">Применить настройки</a>
    </div>
</div>
</form>

<div class="row">
    <div class="span12">
        <div class="pagination">
            <ul>
                <?php for ($i = 1; $i <= $count; $i++ ) : ?>
                <li>
                    <form action="" method="post" id="pagination<?php echo $i; ?>">
                        <input type="hidden" name="offset" id="offset" value="">
                        <input type="hidden" name="limit" id="limit" value="">
                        <input type="hidden" name="sortby" id="sortby" value="">
                        <a href="#" class="page<?php echo $i; ?>" name="pagination" onclick="req.pagination('catalogs',this);"><?php echo $i; ?></a>
                    </form>
                </li>
                <? endfor; ?>
            </ul>
        </div>
    </div>
</div>