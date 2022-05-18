<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProductsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('products');
        $table

            ->addColumn('category_id', 'integer')
            ->addColumn('name', 'string')
            ->addColumn('price', 'double', ['precision' => 9, 'scale' => 2])
            ->addColumn('is_active', 'boolean', ['default' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])

            ->addIndex(['name'], ['unique' => true])

            ->addForeignKey('category_id', 'categories', ['id'], [
                'delete' => 'NO_ACTION',
                'update' => 'NO_ACTION',
                'constraint' => 'fk_products_category_id',
            ])

            ->create();
    }
}
