public function create()
{
    return view('matakuliah.create');
}

public function store(Request $request)
{
    Matakuliah::create([
        'kode_mk' => $request->kode_mk,
        'nama_mk' => $request->nama_mk,
        'sks' => $request->sks,
        'semester' => $request->semester,
        'dosen_id' => $request->dosen_id,
    ]);

    return redirect('/matakuliah');
}