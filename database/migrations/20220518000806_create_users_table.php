<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table

            ->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('is_active', 'boolean', ['default' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENTE_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENTE_TIMESTAMP'])

            ->addIndex(['email'], ['unique' => true])

            ->create();
    }
}
