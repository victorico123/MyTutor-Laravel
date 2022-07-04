<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'title' => 'how to not be JOMBLO',
            'description' => 'One Piece Two Piece Mom Piece',
            'price' => '225.5',
            'learning_hour' => '25',
            'tutor_id' => '1',
        ]);

        Subject::create([
            'title' => 'how to cook INDOMIE',
            'description' => 'indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie indomie ',
            'price' => '5.5',
            'learning_hour' => '100',
            'tutor_id' => '1',
        ]);
    }
}
