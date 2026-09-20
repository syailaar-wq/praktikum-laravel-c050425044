<form action="/matakuliah/store" method="POST">
    @csrf

    <input type="text" name="kode_mk" placeholder="Kode MK"><br><br>

    <input type="text" name="nama_mk" placeholder="Nama Mata Kuliah"><br><br>

    <input type="number" name="sks" placeholder="SKS"><br><br>

    <input type="number" name="semester" placeholder="Semester"><br><br>

    <input type="number" name="dosen_id" placeholder="ID Dosen"><br><br>

    <button type="submit">Simpan</button>
</form>