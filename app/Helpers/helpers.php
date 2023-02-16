<?php

use Illuminate\Support\Str;

if (! function_exists('loadCsvDataBySeederName')) {
    function loadCsvDataBySeederName($seederFile): array
    {
        $fileName = Str::plural(Str::replace(
            '_seeder',
            '',
            Str::snake(
                Str::remove(
                    'Database\Seeders\\',
                    $seederFile,
                ),
            )
        ));

        if (! \file_exists(database_path("csvs/$fileName.csv"))) {
            // factory
            return [];
        }

        $file = file(\database_path("csvs/$fileName.csv"));

        return array_map('str_getcsv', $file);
    }
}
