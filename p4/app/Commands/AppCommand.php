<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('p4', [
            'winner' => 'text',
            'roll' => 'int',
            'choiceA' => 'tinyint(1)',
            'choiceB' => 'tinyint(1)'
        ]);
        
        dump('Migration Complete');
    }

    public function seed()
    {
        # Set up fake data
        # Set up array of winner outcomes
     
        $winners = [
            'Player A and B both guessed correctly. Tie Game!',
            'Player A and B both guessed incorrectly. Its a Draw!',
            'Player A guessed correctly. They are the Winner!',
            'Player B guessed correctly. They are the Winner!'
        ];

        # Use a loop to create 10 rounds
        for ($i = 0; $i < 10; $i++) {

        # Set up a round
        $p4 = [
            'winner' => $winners[array_rand($winners)],
            'roll' => rand(2,12),
            'choiceA' => rand(0,1),
            'choiceB' => rand(0,1)
        ];

        # Insert the round
         $this->app->db()->insert('p4', $p4);
        }
        
        dump('Seed Complete');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
