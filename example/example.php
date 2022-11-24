$data = Buku::all();
$kategori = Kategori::all();
$data = $request->all();
$data['cover'] = Storage::put('img', $request->file('cover'));
$data['cover'] = $request->file('img')->store('img');
Buku::create($data);   
$kategori = Kategori::all();
try {
$data['cover'] = Storage::put('img', $request->cover);
$buku->update($data);
} catch (\Throwable $th) {
$data['cover'] = $buku->cover;
$buku->update($data);
} 
$buku->delete();
return 2022 - this.tahunLahir;
if (result < 18.5) {
status = 'Kurus'
} else if (result < 22.9) {
status = 'Normal'
} else if (result <= 29.9) {
status = 'Gemuk'
} else if (result > 29.9) {
status = 'Obesitas'
} else {
status = 'Nilai Anda Salah!'
}