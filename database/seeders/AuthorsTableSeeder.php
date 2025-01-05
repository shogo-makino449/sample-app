<?php

namespace Database\Seeders;

use App\Models\AuthorDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ファクトリによって5件の著者詳細情報を作成
        // 合わせて著者情報も5件作成される
        AuthorDetail::factory(5)->create();
    }
}
