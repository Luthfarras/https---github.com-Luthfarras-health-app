@extends('template')
@section('main')
<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Biodata Diri</h5>
          <form class="">
            <div class="mb-3">
              <label for="" class="form-label">Nama</label>
              <input type="text" id="nama" name="" value="" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Tinggi Badan <sub>(cm)</sub> </label>
              <input type="number" id="tinggi" name="" value="" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Berat Badan <sub>(kg)</sub> </label>
              <input type="number" id="berat" name="" value="" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Hobi</label>
              <input type="text" id="hobi" name="" value="" class="form-control mb-2">
              <input type="text" id="hobi2" name="" value="" class="form-control mb-2">
              <input type="text" id="hobi3" name="" value="" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Tahun Lahir</label>
              <input type="number" id="tahun" name="" value="" class="form-control">
            </div>
            <button type="button" onclick="cek()" class="btn btn-info">Cek</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Hasil</h5>
          <table class="table text-center">
            <thead>
              <tr>
                <th>Data</th>
                <th>Hasil</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nama</td>
                <td id="name"></td>
              </tr>
              <tr>
                <td>Tinggi Badan</td>
                <td id="height"></td>
              </tr>
              <tr>
                <td>Berat Badan</td>
                <td id="weight"></td>
              </tr>
              <tr>
                <td>BMI</td>
                <td id="bmi"></td>
              </tr>
              <tr>
                <td>Status</td>
                <td id="stts"></td>
              </tr>
              <tr>
                <td>Hobi</td>
                <td id="hobby"></td>
              </tr>
              <tr>
                <td>Umur</td>
                <td id="umur"></td>
              </tr>
              <tr>
                <td>Konsultasi Gratis</td>
                <td id="konsul"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function cek() {
    let nama = document.getElementById('nama').value
    let tb = document.getElementById('tinggi').value
    let tinggi = document.getElementById('tinggi').value / 100
    let berat = document.getElementById('berat').value
    let hobi = document.getElementById('hobi').value
    let tahun = document.getElementById('tahun').value
    let today = new Date()

    let bmi = Math.floor(berat / (tinggi*tinggi))
    let status
    if (bmi < 18.5) {
      status = "Kurus"
    }else if (bmi <= 22.9) {
      status = "Normal"
    }else if (bmi <= 29.9) {
      status = "Gemuk"
    }else if (bmi == 30) {
      status = "Gemuk"
    }else if (bmi > 30) {
      status = "Obesitas"
    }else {
      return "isi data"
    }

    class Umur {
      constructor(tahun) {
        this.thn = tahun
      }
      hitungUmur() {
        return today.getFullYear() - this.thn
      }
    }
    class Konsultasi extends Umur {
      constructor(tahun, status) {
        super(tahun)
        this.stt = status
      }
      stats() {
        if (this.hitungUmur() >= 17) {
          return "Dewasa"
        }else {
          return "Belum Dewasa"
        }
      }
      konsul() {
        if (this.stats() == 'Dewasa' && this.stt == 'Obesitas') {
          return "Anda bisa mendapatkan konsultasi gratis."
        }else {
          return "Anda belum bisa mendapatkan konsultasi gratis."
        }
      }
    }

    let umurs = new Umur(tahun)
    let consul = new Konsultasi(tahun, status)

    document.getElementById('name').innerHTML = nama
    document.getElementById('height').innerHTML = tb + " cm"
    document.getElementById('weight').innerHTML = berat + " kg"
    document.getElementById('hobby').innerHTML = hobi
    document.getElementById('bmi').innerHTML = bmi
    document.getElementById('stts').innerHTML = status
    document.getElementById('umur').innerHTML = umurs.hitungUmur()
    document.getElementById('konsul').innerHTML = consul.konsul()
  }
</script>
@endsection
