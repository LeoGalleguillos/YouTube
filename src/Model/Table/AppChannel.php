<?php
namespace LeoGalleguillos\YouTube\Model\Table;

use DateTime;
use Generator;
use Zend\Db\Adapter\Adapter;

class AppChannel
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

    public function insertOnDuplicateKeyUpdate(
        int $appId,
        int $channelId,
        string $accessToken,
        DateTime $accessTokenExpiration,
        string $refreshToken
    ): int {
        $sql = '
            INSERT
              INTO `app_channel` (
                       `app_id`
                     , `channel_id`
                     , `access_token`
                     , `access_token_expiration`
                     , `refresh_token`
                   )
            VALUES (?, ?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE
                   `access_token` = ?
                 , `access_token_expiration` = ?
                 , `refresh_token` = ?
                 ;
        ';
        $parameters = [
            $appId,
            $channelId,
            $accessToken,
            $accessTokenExpiration->format('Y-m-d h:i:s'),
            $refreshToken,
            $accessToken,
            $accessTokenExpiration->format('Y-m-d h:i:s'),
            $refreshToken,
        ];
        return $this->adapter
                    ->query($sql)
                    ->execute($parameters)
                    ->getAffectedRows();
    }

    public function selectWhereAppIdChannelId(
        int $appId,
        int $channelId
    ): array {
        $sql = '
            SELECT `app_id`
                 , `channel_id`
                 , `access_token`
                 , `access_token_expiration`
                 , `refresh_token`
            FROM `app_channel`
           WHERE `app_id` = ?
             AND `channel_id` = ?
        ';
        $parameters = [
            $appId,
            $channelId,
        ];
        return $this->adapter
                    ->query($sql)
                    ->execute($parameters)
                    ->current();
    }
}
