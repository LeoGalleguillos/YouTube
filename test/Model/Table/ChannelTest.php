<?php
namespace LeoGalleguillos\YouTubeTest\Model\Table;

use LeoGalleguillos\YouTube\Model\Table as YouTubeTable;
use LeoGalleguillos\Test\TableTestCase;
use Zend\Db\Adapter\Exception\InvalidQueryException;

class ChannelTest extends TableTestCase
{
    protected function setUp()
    {
        $this->channelTable = new YouTubeTable\Channel(
            $this->getAdapter()
        );

        $this->dropTable('channel');
        $this->createTable('channel');
    }

    public function testInsert()
    {
        $this->assertSame(
            $this->channelTable->insert('name', 'youtube user id', 'youtube channel id'),
            1
        );

        $this->assertSame(
            $this->channelTable->insert('name', 'youtube user id', 'youtube channel id'),
            2
        );
    }
}
