<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'created' => date('Y-m-d H:i:s'),
                'username' => 'tester1',
                'password' => 'hashed',
        
            ],
            [
                'id'    => 2,
                'created' => date('Y-m-d H:i:s'),
                'username' => 'tester2',
                'password' => 'hashed',
        
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
              ->saveData();
    }
}
