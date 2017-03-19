<?php
/**
 * Класс для 301 редиректа
 */
namespace b4djo\redirect301\components;

use backend\modules\redirect\models\RedirectPage;
use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\web\Application;

class Redirect extends Component implements BootstrapInterface
{
    
    /**
     * 301 редирект, в случае есть в БД есть искомый url
     * @param \yii\base\Application $application
     */
    public function bootstrap($application)
    {
        if ($application instanceof Application) {
            \Yii::$app->on(Application::EVENT_BEFORE_REQUEST, function($e) {
                $page = new RedirectPage();
                if ($redirectUrl = $page->getPageByAlias(\Yii::$app->request->url)) {
                    \Yii::$app->response->redirect($redirectUrl->target_url, 301)->send();
                    exit;
                }
            });
        }
    }
}