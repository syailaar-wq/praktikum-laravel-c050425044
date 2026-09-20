public function definition(): array
{
    return [
        'kode_mk' => 'MK' . fake()->unique()->numberBetween(100, 999),
        'nama_mk' => fake()->randomElement([
            'Pemrograman Web',
            'Basis Data',
            'Algoritma',
            'Jaringan Komputer',
            'Sistem Informasi',
            'IoT',
            'Smart City',
            'Pemrograman Mobile'
        ]),
        'sks' => fake()->numberBetween(1, 4),
        'semester' => fake()->numberBetween(1, 8),
        'dosen_id' => 1
    ];
}    