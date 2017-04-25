<?php

namespace Tests\Runroom\BaseBundle\Unit;

use PHPUnit\Framework\TestCase;
use Runroom\BaseBundle\Service\MetaInformationProvider\AbstractMetaInformationProvider;
use Tests\Runroom\BaseBundle\MotherObject\EntityMetaInformationMotherObject;
use Tests\Runroom\BaseBundle\MotherObject\MetaInformationMotherObject;

class AbstractMetaInformationProviderTest extends TestCase
{
    public function setUp()
    {
        $this->repository = $this->prophesize('Runroom\BaseBundle\Repository\MetaInformationRepository');

        $this->provider = new TestMetaInformationProvider(
            $this->repository->reveal()
        );

        $this->provider_with_entity = new TestWithEntityMetaInformationProvider(
            $this->repository->reveal()
        );
    }

    /**
     * @test
     */
    public function itDoesNotProvideAnyMetas()
    {
        $meta_routes = ['default', 'home'];

        foreach ($meta_routes as $meta_route) {
            $this->assertFalse($this->provider->providesMetas($meta_route));
        }
    }

    /**
     * @test
     */
    public function itFindsMetasForRouteAndReplacePlaceholders()
    {
        $meta_route = 'meta_route';

        $expected_metas = MetaInformationMotherObject::create('{title}', '{description}');

        $this->repository->findOneByRoute($meta_route)->willReturn($expected_metas);

        $metas = $this->provider->findMetasFor($meta_route, 'model');

        $this->assertSame('test_title', $metas->getTitle());
        $this->assertSame('test_description', $metas->getDescription());
    }

    /**
     * @test
     */
    public function itFindsMetasWithEntityForRoute()
    {
        $meta_route = 'meta_route';

        $expected_metas = MetaInformationMotherObject::createFilled();

        $this->repository->findOneByRoute($meta_route)
            ->willReturn($expected_metas);

        $metas = $this->provider_with_entity->findMetasFor($meta_route, 'model');

        $this->assertSame('meta_title', $metas->getTitle());
        $this->assertSame('meta_description', $metas->getDescription());
    }
}

class TestMetaInformationProvider extends AbstractMetaInformationProvider
{
    protected function getPlaceholders($model)
    {
        return [
            '{title}' => 'test_title',
            '{description}' => 'test_description',
        ];
    }

    protected function getModelMetaImage($model)
    {
    }
}

class TestWithEntityMetaInformationProvider extends AbstractMetaInformationProvider
{
    protected function getPlaceholders($model)
    {
        return [];
    }

    protected function getModelMetaImage($model)
    {
    }

    protected function getEntityMetaInformation($model)
    {
        return EntityMetaInformationMotherObject::createWithMetas();
    }
}