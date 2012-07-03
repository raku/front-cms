<h3 class="center">Добавить каталог</h3>
<form action="" method="post" id="additem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Название каталога</label>
            <div class="controls">
                <input type="text" id="pagename" name="catname" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас каталога</label>
            <div class="controls">
                <input type="text" id="alias" name="alias" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Описание каталога:</h3>
        <textarea id="editor" class="auto"></textarea>
        <script>editor = CKEDITOR.editor.replace('editor');</script>
    </div>
</div>
<div class="row">
    <div class="span5">
        <div class="control-group">
            <label class="control-label w200" for="pagecatalog">Родительский каталог:</label>
            <div class="controls">
                <select id="pagecatalog" class="input-medium" name="parent_id">
                    <option value="0">Нету</option>
                    <?php foreach($catalogs as $catalog) : ?>
                        <option value="<?=$catalog->id; ?>">
                            <?=$catalog->catname; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="status" value="1">
                <input type="hidden" id="content" name="content" value="">
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="date" class="input-small">
                <script>
                    $(function() {
                        $("#datepicker").datepicker();
                        date.today("#datepicker");
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="span2 savecat">
        <div class="control-group">
            <a class="btn btn-success btncheck" href="#" onclick="req.initEditor();req.addItem('catalogs');return false;">Сохранить каталог</a>
        </div>
    </div>
</div>
</form>