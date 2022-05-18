<?php


use Phinx\Seed\AbstractSeed;

class ProductSeeder extends AbstractSeed
{
    public function getDependencies()
    {
        return [
            'CategorySeeder',
        ];
    }

    public function run()
    {
        $data = [
            [
                'category_id' => 1,
                'name' => 'Teclado',
                'price' => 50.00,
            ],
            [
                'category_id' => 2,
                'name' => 'Mouse',
                'price' => 30.00,
            ],
        ];

        $products = $this->table('products');
        $products->insert($data)
            ->saveData();

    }
}
