<?php


use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['name' => 'Cat01'],
            ['name' => 'Cat02'],
            ['name' => 'Cat03'],
        ];

        $categories = $this->table('categories');
        $categories->insert($data)
            ->saveData();
    }
}
