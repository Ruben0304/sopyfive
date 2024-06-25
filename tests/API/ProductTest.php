<?php

namespace Tests\API;

use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testProduct()
    {
        $response = $this->get('/api/v1/product');

        $response->assertStatus(200);
    }

}
