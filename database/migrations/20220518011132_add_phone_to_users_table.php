<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddPhoneToUsersTable extends AbstractMigration
{
    public function change(): void
    {
        $users = $this->table('users');

        $users->addColumn('phone', 'string', ['null' => true, 'after' => 'password'])
            ->update();
    }
}
