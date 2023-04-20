<?php
namespace app\modules;
use Yii;

/**
 * Admin module definition class
 */
class admin extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->layout = '@app/modules/views/layouts/main';
        if ($_SERVER['REQUEST_URI'] != '/admin/login' && Yii::$app->admin->isGuest) {
            header('Location: /admin/login');
            die();
        } else {
            parent::init();
        }
    }
}
