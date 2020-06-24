 <?php

use Illuminate\Database\Seeder;
use App\Omini;
class OminoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Omini::class, 20) -> create();
    }
}
