@extends('layouts.app') {{-- Gunakan layout utama --}}

@section('content') {{-- Mulai bagian konten --}}
{{-- Link ke file CSS kustom --}}
<link rel="stylesheet" href="{{ asset('assets/css/custom-profile.css') }}">

<div class="container my-5">
  
  <div class="profile-header-card text-center shadow-sm">
    <div class="profile-image-wrapper mb-3">
      {{-- Ganti dengan gambar profil user --}}
      <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="Profile Picture" class="profile-image">
    </div>
    <h2 class="profile-name">Nama Pengguna</h2>
    <p class="profile-email text-muted">email@pengguna.com</p>
    <button class="btn btn-primary btn-sm mt-2">Edit Profil</button>
  </div>
  
  <div class="profile-stats-card d-flex justify-content-around text-center shadow-sm">
    <div class="stat-item">
      <h4 class="stat-number">12</h4>
      <p class="stat-label text-muted">Pesanan</p>
    </div>
    <div class="stat-item">
      <h4 class="stat-number">5</h4>
      <p class="stat-label text-muted">Wishlist</p>
    </div>
    <div class="stat-item">
      <h4 class="stat-number">2</h4>
      <p class="stat-label text-muted">Alamat</p>
    </div>
  </div>

  <div class="profile-content-card shadow-sm">
    <ul class="nav nav-tabs nav-fill mb-4" id="profileTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">Detail Akun</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">Riwayat Pesanan</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">Alamat Saya</button>
      </li>
    </ul>
    
    <div class="tab-content" id="profileTabContent">
      <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
        <h5 class="mb-3">Informasi Pribadi</h5>
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="fullName" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="fullName" value="Nama Pengguna">
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email" value="email@pengguna.com">
            </div>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="phone" value="081234567890">
          </div>
          <hr class="my-4">
          <h5 class="mb-3">Ubah Password</h5>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="newPassword" class="form-label">Password Baru</label>
              <input type="password" class="form-control" id="newPassword">
            </div>
             <div class="col-md-6 mb-3">
              <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control" id="confirmPassword">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
        </form>
      </div>
      
      <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
        <h5 class="mb-3">Pesanan Terbaru</h5>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID Pesanan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#ABC-12345</td>
                <td>15 Juli 2025</td>
                <td>Rp 350.000</td>
                <td><span class="badge bg-success">Selesai</span></td>
                <td><a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a></td>
              </tr>
              <tr>
                <td>#XYZ-98765</td>
                <td>10 Juli 2025</td>
                <td>Rp 150.000</td>
                <td><span class="badge bg-success">Selesai</span></td>
                <td><a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a></td>
              </tr>
              <tr>
                <td>#DEF-54321</td>
                <td>02 Juli 2025</td>
                <td>Rp 500.000</td>
                <td><span class="badge bg-danger">Dibatalkan</span></td>
                <td><a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="m-0">Alamat Tersimpan</h5>
          <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/></svg> Tambah Alamat</button>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h6 class="mb-1">Alamat Rumah</h6>
              <span class="badge bg-primary rounded-pill">Utama</span>
            </div>
            <p class="mb-1">Jl. Merdeka No. 17, Bandung, Jawa Barat, 40111</p>
            <small>John Doe | 081234567890</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h6 class="mb-1">Alamat Kantor</h6>
            </div>
            <p class="mb-1">Jl. Digital No. 101, Gedung Cyber, Lt. 5, Bandung, Jawa Barat, 40222</p>
            <small>John Doe | 081234567890</small>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection