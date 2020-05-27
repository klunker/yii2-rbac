<?php

namespace klunker\rbac;

/**
 * pages module definition class
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'klunker\rbac\controllers';
    public $defaultRoute = 'rbac/index';
    
    public function bootstrap($app) {
        $app->getUrlManager()->addRules([
        $this->id => $this->id.'/rbac/index',
        ],false);
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
