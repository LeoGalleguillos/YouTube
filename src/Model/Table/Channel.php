<?php
namespace LeoGalleguillos\YouTube\Model\Table;

use Zend\Db\Adapter\Adapter;

class Channel
{
    /**
     * @var Adapter
     */
    protected $adapter;

    public function __construct(
        Adapter $adapter
    ) {
        $this->adapter   = $adapter;
    }

    public function insert(
        string $name,
        string $youTubeUserId,
        string $youTubeChannelId
    ): int {
        $sql = '
            INSERT
              INTO `channel` (
                       `name`
                     , `you_tube_user_id`
                     , `you_tube_channel_id`
                   )
            VALUES (?, ?, ?)
                 ;
        ';
        $parameters = [
            $name,
            $youTubeUserId,
            $youTubeChannelId
        ];
        return $this->adapter
                    ->query($sql)
                    ->execute($parameters)
                    ->getGeneratedValue();
    }
}
