<?php
namespace LeoGalleguillos\YouTube;

use LeoGalleguillos\YouTube\Model\Factory as YouTubeFactory;
use LeoGalleguillos\YouTube\Model\Service as YouTubeService;
use LeoGalleguillos\YouTube\Model\Table as YouTubeTable;
use LeoGalleguillos\YouTube\View\Helper as YouTubeHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                YouTubeTable\AppChannel::class => function ($sm) {
                    return new YouTubeTable\AppChannel(
                        $sm->get('you-tube')
                    );
                },
                YouTubeTable\Channel::class => function ($sm) {
                    return new YouTubeTable\Channel(
                        $sm->get('you-tube')
                    );
                },
            ],
        ];
    }
}
