<?php
namespace LeoGalleguillos\YouTubeTest;

use LeoGalleguillos\YouTube\Module;
use LeoGalleguillos\Test\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(
            Module::class,
            $this->module
        );
    }
}
