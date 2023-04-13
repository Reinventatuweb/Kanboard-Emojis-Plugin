<?php

namespace Kanboard\Plugin\Emojis;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {

        $this->hook->on('template:layout:css', array('template' => 'plugins/Emojis/Assets/css/emojione.picker.css'));
        $this->hook->on('template:layout:css', array('template' => 'plugins/Emojis/Assets/css/custom.css'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Emojis/Assets/js/emojione.min.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/Emojis/Assets/js/emojione.picker.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/Emojis/Assets/js/main.js'));


    }

    public function getPluginName()
    {
        return 'Emojis';
    }

    public function getPluginDescription()
    {
        return t("Plugin is used to add emojis icons on text editor comment");
    }

    public function getPluginAuthor()
    {
        return 'Reinventatuweb';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }
    public function getPluginHomepage()
    {
        return 'https://reinventatuweb.cl/kanboard-emojis';
    }
}
