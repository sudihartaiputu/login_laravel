<?php

namespace App\Imports;

use App\Siswaskl;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswasklImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Siswaskl([
            'name' => $row['nama'],
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'tempat_lahir' => $row['tempatlahir'],
            'tanggal_lahir' => $row['tanggallahir'],
            'jk' => $row['jk'],
            'level' => $row['role'],
            'email' => $row['email'],
            'password' => bcrypt($row['pass']),
            'sandi' => $row['pass'],
            'foto' => $row['foto'],
            'nopes' => $row['nopes'],
            'kelas' => $row['kelas'],
            'jurusan' => $row['jurusan'],
            'keterangan' => $row['ket'],
            'n_agama' => $row['agama'],
            'n_pkn' => $row['pkn'],
            'n_bindo' => $row['bindo'],
            'n_basing' => $row['basing'],
            'n_mtk' => $row['mtk'],
            'n_sejindo' => $row['sejindo'],
            'n_pjs' => $row['pjs'],
            'n_sbud' => $row['sbud'],
            'n_prakarya' => $row['prak'],
            'n_minat1' => $row['sej_mtk'],
            'n_minat2' => $row['fis_eko'],
            'n_minat3' => $row['kim_sos'],
            'n_minat4' => $row['bio_geo'],
            'n_minat5' => $row['lm'],
            'n_minat6' => $row['rata'],
        ]);
    }
}
