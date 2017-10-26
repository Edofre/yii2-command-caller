<?php

namespace edofre\commandcaller;

use Yii;
use yii\base\Component;

/**
 * Class CommandCaller
 * @package edofre\commandcaller
 */
class CommandCaller extends Component
{
    /** @var string Yii entry script */
    public $script = "@app/yii";
    /** @var string Executable location */
    public $executable = '/usr/bin/php';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        // We're doing this in the background so we don't care about timeouts
        set_time_limit(0);
    }

    /**
     * @param string $command
     * @return int Termination status of the process that was run. In case of an error then -1 is returned.
     */
    public function run($command)
    {
        return pclose(popen($this->buildCommand($command), 'r'));
    }

    /**
     * Builds the command string
     * @param $command string Yii command
     * @return string full command to execute
     */
    protected function buildCommand($command)
    {
        return $this->executable . ' ' . Yii::getAlias($this->script) . ' ' . $command . ' &> /dev/null &';
    }
}