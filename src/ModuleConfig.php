<?php

namespace RcmImageWithThumbnails;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * __invoke
     *
     * @return array
     */
    public function __invoke()
    {
        $config = include __DIR__ . '/../config/module.config.php';

        return [
            'asset_manager' => $config['asset_manager'],
            'rcmPlugin' => $config['rcmPlugin'],
        ];
    }
}
