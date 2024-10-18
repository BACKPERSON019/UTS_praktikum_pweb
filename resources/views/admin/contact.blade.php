@extends('admin.layouts.app')

@section('content')
   
   <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
   <table class="w-full text-left table-auto min-w-max">
       <thead>
       <tr class="border-b border-slate-300 bg-slate-50">
           <th class="p-4 text-sm font-normal leading-none text-slate-500">Nama</th>
           <th class="p-4 text-sm font-normal leading-none text-slate-500">NIM</th>
           <th class="p-4 text-sm font-normal leading-none text-slate-500">Jurusan</th>
           <th class="p-4 text-sm font-normal leading-none text-slate-500">Kontak</th>
       </tr>
       </thead>
       <tbody>
       @php
           $mahasiswas = [
               ['nama' => 'Andi', 'nim' => '12345678', 'jurusan' => 'Informatika', 'kontak' => 'andi@gmail.com'],
               ['nama' => 'Budi', 'nim' => '87654321', 'jurusan' => 'Sistem Informasi', 'kontak' => 'budi@yahoo.com'],
               ['nama' => 'Cici', 'nim' => '11223344', 'jurusan' => 'Teknik Elektro', 'kontak' => 'cici@outlook.com'],
               ['nama' => 'Dewi', 'nim' => '44332211', 'jurusan' => 'Teknik Sipil', 'kontak' => 'dewi@gmail.com'],
           ];
       @endphp
       @foreach ($mahasiswas as $mahasiswa)
       <tr class="hover:bg-slate-50">
           <td class="p-4 border-b border-slate-200 py-5">
               <p class="block font-semibold text-sm text-slate-800">{{ $mahasiswa['nama'] }}</p>
           </td>
           <td class="p-4 border-b border-slate-200 py-5">
               <p class="text-sm text-slate-500">{{ $mahasiswa['nim'] }}</p>
           </td>
           <td class="p-4 border-b border-slate-200 py-5">
               <p class="text-sm text-slate-500">{{ $mahasiswa['jurusan'] }}</p>
           </td>
           <td class="p-4 border-b border-slate-200 py-5">
               <p class="text-sm text-slate-500">{{ $mahasiswa['kontak'] }}</p>
           </td>
       </tr>
       @endforeach
       </tbody>
   </table>
   </div>

@endsection
