<?php

namespace Database\Factories;

use App\Models\MasterItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MasterItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kode = MasterItem::count('id');
        $kode = $kode + 1;
        $kode = str_pad($kode, 5, '0', STR_PAD_LEFT);
        $supplier = ['Tokopaedi', 'Bukulapuk', 'TokoBagas', 'E Commurz', 'Blublu'];
        $jenis = ['Obat', 'Alkes', 'Matkes', 'Umum', 'ATK'];
        return [
            'kode' => $kode,
            'nama' => $this->faker->word(),
            'harga_beli' => $this->faker->numberBetween(1000, 100000),
            'laba' => $this->faker->numberBetween(100, 5000),
            'supplier' => $supplier[array_rand($supplier)],
            'jenis' => $jenis[array_rand($jenis)],
        ];
    }
}
