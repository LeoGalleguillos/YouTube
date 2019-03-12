<?php
namespace LeoGalleguillos\AmazonYouTubeTest\Model\Table;

use DateTime;
use LeoGalleguillos\YouTube\Model\Table as YouTubeTable;
use LeoGalleguillos\Test\TableTestCase;

class AppChannelTest extends TableTestCase
{
    protected function setUp()
    {
        $this->appChannelTable = new YouTubeTable\AppChannel(
            $this->getAdapter()
        );

        $this->dropTable('app_channel');
        $this->createTable('app_channel');
    }

    public function testInsertOnDuplicateKeyUpdate()
    {
        $affectedRows = $this->appChannelTable->insertOnDuplicateKeyUpdate(
            1,
            2,
            'access_token',
            new DateTime(),
            'refresh_token'
        );
        $this->assertSame(
            1,
            $affectedRows
        );
    }

    public function testSelectWhereAppIdChannelId()
    {
        $affectedRows = $this->appChannelTable->insertOnDuplicateKeyUpdate(
            1,
            2,
            'access_token',
            new DateTime(),
            'refresh_token'
        );

        $array = $this->appChannelTable->selectWhereAppIdChannelId(
            1,
            2
        );

        $this->assertInternalType(
            'array',
            $array
        );
    }
}
