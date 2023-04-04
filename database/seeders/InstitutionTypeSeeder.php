<?php

namespace Database\Seeders;

use App\Models\InstitutionType;
use Illuminate\Database\Seeder;

class InstitutionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \loadCsvDataBySeederName(self::class);
        $keys = $data[0];
        array_shift($data);
        $values = [];

        foreach ($data as $item) {
            $row = array_combine($keys, $item);
            $values[] = $row;
        }

        $idColumns = [$keys[0]];

        InstitutionType::upsert(
            $values,
            $idColumns,
            \array_diff($keys, $idColumns),
        );
    }
}
