<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateWorkers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up(): void
    {
        $table = $this->table('test');

        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('email', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('mobile_no', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->create();
        $data = [
            [
                'name' => 'temi tope ',
                'email' => 'test@gmail.com',
                'mobile_no' => '1234567895',
            ],
            [
                'name' => 'john doe J',
                'email' => 'john@gmail.com',
                'mobile_no' => '7412589635',
            ],
            [
                'name' => 'babtunde tolulope',
                'email' => 'tolu@gmail.com',
                'mobile_no' => '9632587410',
            ],
            [
                'name' => 'anonnymous ',
                'email' => 'anon@gmail.com',
                'mobile_no' => '8529637410',
            ],
            [
                'name' => 'oyedele',
                'email' => 'oyedele@gmail.com',
                'mobile_no' => '9658741230',
            ],
            [
                'name' => 'koded',
                'email' => 'koded@gmail.com',
                'mobile_no' => '2635897410',
            ],
            [
                'name' => 'lorem ipsium',
                'email' => 'lorem@gmail.com',
                'mobile_no' => '8526937410',
            ],
            [
                'name' => 'asaolu',
                'email' => 'asaolu@gmail.com',
                'mobile_no' => '8974563210',
            ],
        ];
        $table->insert($data)->save();
    }
}
