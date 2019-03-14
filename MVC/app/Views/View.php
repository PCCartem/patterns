<?php
/**
 * Created by PhpStorm.
 * User: pccartem
 * Date: 11.08.18
 * Time: 1:41
 */

namespace App\Views;


class View
{
    const PATH_TO_TMP = __DIR__.'/../tpl/';

    private function getPathTpl($path)
    {
        return self::PATH_TO_TMP.$path.".tpl";
    }

    public function render($tmpPath, $data = [])
    {
        if (!is_file($this->getPathTpl($tmpPath)))
            return 'View "'. $tmpPath . '" not exists';
        extract($data);
        ob_start();
        require_once($this->getPathTpl($tmpPath));
        echo ob_get_clean();

    }

    public function layout($tmpPath, $data = [])
    {

        if (!is_file($this->getPathTpl($tmpPath)))
            return 'View "'. $tmpPath . '" not exists';

        extract($data);
        ob_start();

        $header = $this->render('header');
        $content = $this->render($tmpPath, $data);
        $footer = $this->render('footer');

        $this->render($this->getPathTpl('layout'), [
            'header' => $header,
            'content' => $content,
            'footer' => $footer
        ]);


        echo ob_get_clean();
    }


}
