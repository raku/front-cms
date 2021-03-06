<!--Главный файл админки-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content=“no-index,no-follow”>
    <title>Панель администратора</title>

    <!--Стили-->
    <link rel="stylesheet" type="text/css" href="<?=URL::base();?>assets/css/jquery-ui-1.8.16.custom.css">
    <link rel="stylesheet" type="text/css" href="<?=URL::base();?>assets/css/bootstrap.css">
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/admin/admin.less">

    <!--Скрипты-->
    <script src="<?=URL::base();?>assets/js/libs/less-1.3.0.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery-1.7.2.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery-ui.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery.ui.datepicker-ru.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery.validate.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/additional-methods.js"></script>
    <script src="<?=URL::base();?>assets/ckeditor/ckeditor.js"></script>
    <script src="<?=URL::base();?>assets/js/admin/admin-validate.js"></script>
    <script src="<?=URL::base();?>assets/js/admin/admin.js"></script>

    <!--Фавикон-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
</head>
<body>
    <div class="row container">
        <div class="header">
            <div class="row one">
                <div class="span12 top">
                   <p>Название сайта: <strong class="sitename"><?=$sitename;?></strong></p>
                   <p>Ваш IP адрес: <strong><?=$_SERVER['REMOTE_ADDR'];?></strong></p>
                   <p>Здравствуйте: <strong><?=$user->username;?></strong>
                      <a href="<?=URL::site('/admin/auth/logout'); ?>" title="Выйти" class="logout">
                          <img src="<?=URL::base();?>assets/img/admin/delete.png" alt="">
                      </a>
                   </p>
                   <p><a href="<?=URL::base();?>" target="_blank" title="Просмотр сайта">Просмотр сайта</a></p>
                </div>
            </div>
            <div class="row two">
                <div class="span2">
                    <h1 class="logo">Front CMS</h1>
                </div>
                <div class="span9">
                    <ul class="menu">
                        <li><a href="#home" onclick="req.index();">Главная</a></li>
                        <li><a href="#options" onclick="req.options();">Настройки</a></li>
                        <li><a href="#pages" onclick="req.pages();">Страницы</a></li>
                        <li><a href="#catalogs" onclick="req.catalogs();">Каталоги</a></li>
                        <li><a href="#users" onclick="req.users();">Пользователи</a></li>
                        <li><a href="#users" onclick="req.roles();">Роли</a></li>
                        <li><a href="#modules" onclick="req.modules();">Модули</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row maintools">
            <div class="span9 offset1">
                <ul class="tools">
                    <li>
                        <a href="#addpage" onclick="req.addItem('pages');">
                            <img src="<?=URL::base();?>assets/img/admin/add.png" alt="" title="Добавить страницу">
                        </a>
                    </li>
                    <li>
                        <a href="#addcatalog" onclick="req.addItem('catalogs');">
                            <img src="<?=URL::base();?>assets/img/admin/addcat.png" alt="" title="Добавить каталог">
                        </a>
                    </li>
                    <li>
                        <a href="#adduser" onclick="req.addItem('users');">
                            <img src="<?=URL::base();?>assets/img/admin/user.png" alt="" title="Добавить пользователя">
                        </a>
                    </li>
                    <li>
                        <a href="#addrole" onclick="req.addItem('roles');">
                            <img src="<?=URL::base();?>assets/img/admin/addrole.png" alt="" title="Добавить роль">
                        </a>
                    </li>
                    <li>
                        <a href="#addmodule" onclick="req.addItem('modules');">
                            <img src="<?=URL::base();?>assets/img/admin/addmodule.png" alt="" title="Добавить модуль">
                        </a>
                    </li>
                    <li>
                        <a href="#email" onclick="req.email();">
                            <img src="<?=URL::base();?>assets/img/admin/email.png" alt="" title="Отправить сообщение">
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL::base();?>admin/rss">
                            <img src="<?=URL::base();?>assets/img/admin/rss.png" alt="" title="RSS-лента">
                        </a>
                    </li>
                    <li>
                        <a href="#stats" onclick="req.stats();">
                            <img src="<?=URL::base();?>assets/img/admin/stats.png" alt="" title="Просмотреть статистику сайта">
                        </a>
                    </li>
                    <li>
                        <a href="#info" onclick="req.info();">
                            <img src="<?=URL::base();?>assets/img/admin/info.png" alt="" title="Информация о сервере">
                        </a>
                    </li>
                    <li>
                        <a href="#trash" onclick="req.trash();">
                            <img src="<?=URL::base();?>assets/img/admin/trash.png" alt="" title="Корзина">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="span12 main">
                <?=$main;?>
            </div>
        </div>
    <div class="row">
        <div class="span12 footer">
            <p>Front CMS v0.1 основана на Kohana Framework v3.2</p>
            <a href="http://kohanaframework.org" class="kohcopy" target="_blank">www.kohanaframework.org</a>
            <a href="https://github.com/Shustoff/front-cms/wiki/%D0%9E%D0%B1%D0%B7%D0%BE%D1%80-Front-CMS" class="helper" target="_blank">
                <img src="<?=URL::base();?>assets/img/admin/help.png" alt=""><span>Помощь</span>
            </a>
        </div>
    </div>
</body>
</html>