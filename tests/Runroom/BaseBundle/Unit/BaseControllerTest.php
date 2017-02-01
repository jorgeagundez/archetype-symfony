<?php

namespace Tests\Runroom\BaseBundle\Unit;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Runroom\BaseBundle\Controller\BaseController;

class BaseControllerTest extends TestCase
{
    public function setUp()
    {
        $this->renderer = $this->prophesize('Symfony\Bundle\FrameworkBundle\Templating\EngineInterface');
        $this->event_dispatcher = $this->prophesize('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $this->controller = new TestController(
            $this->renderer->reveal()
        );

        $this->controller->setEventDispatcher(
            $this->event_dispatcher->reveal()
        );
    }

    /**
     * @test
     */
    public function itDispatchEventsOnRenderResponse()
    {
        $expected_response = 'response';

        $this->renderer->renderResponse(TestController::TEMPLATE, Argument::type('array'), null)
            ->willReturn($expected_response);

        $response = $this->controller->renderSomething();

        $this->assertSame($expected_response, $response);
    }
}

class TestController extends BaseController
{
    const TEMPLATE = 'test.html.twig';

    public function renderSomething()
    {
        return $this->renderResponse(self::TEMPLATE);
    }
}
