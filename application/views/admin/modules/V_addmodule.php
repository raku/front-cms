<div class="wraptooltip">
    <div class="alert alert-success tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center">Модуль добавлен!</span>
    </div>
    <div class="alert alert-danger tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center"></span>
    </div>
</div>
<h3 class="center">Добавить Модуль</h3>
<form action="" method="post" id="additem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="name">Название модуля</label>
            <div class="controls">
                <input type="text" id="name" name="name" class="input-xlarge required">
                <label class="fail failmodname"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="typemodule">Тип модуля</label>
            <div class="controls">
                <select id="typemodule" name="type" class="input-xlarge">
                    <option value="HTML">HTML</option>
                    <option value="JS">JS</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Код модуля:
            <label class="editorfail label label-important" for="editor">Пожалуйста введите код модуля</label>
        </h3>
        <textarea id="editor" class="auto"></textarea>
        <script>
            editor = CKEDITOR.editor.replace('editor');
            editor.on('blur', function() {
                if ($('#additem').valid() && !$('.failmodname').text() && !$('.failsystemname').text()) {
                    binds.canSave("binds.canSaveItem('modules')");
                }
            });
        </script>
    </div>
</div>
<div class="row">
    <div class="span5 systemmod">
        <div class="control-group">
            <label class="control-label w200" for="systemname">Системное имя модуля:</label>
            <div class="controls">
                <input type="text" id="systemname" name="systemname" class="input-medium required alphanumeric">
                <label class="fail failsystemname"></label>
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
            <input type="hidden" name="author_id" value="<?=$author_id;?>">
            <input type="hidden" name="status" value="1">
            <input type="hidden" id="content" name="content" value="">
            <a class="btn btn-success btncheck" href="#" onclick="binds.canSaveItem('modules');">Сохранить</a>
        </div>
    </div>
</div>
</form>
<script>valid.validModule('#additem', "binds.canSaveItem('modules');");</script>