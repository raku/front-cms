<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Template {

    public $template = '/site/index';

    public function action_index()
    {
        $alias = $this->request->param('alial');
        $catalog = ORM::factory('catalog')->where('alias', '=', $alias)->find_all();
        foreach ($catalog as $cat)
        {
            $catalogname = $cat['catname'];
        }

        $this->template->catalog = $catalogname;
    }
}