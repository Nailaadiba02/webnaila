<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Provinsi extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => '',
            ],
            'Provinsi' => [
                'title' => 'Provinsi',
                'link' => base_url() . '/Provinsi',
                'icon' => 'fa-solid fa-users',
                'aktif' => 'active',
            ],
            'sekolah' => [
                'title' => 'sekolah',
                'link' => base_url() .'/sekolah',
                'icon' => 'fa-solid fa-address-card',
                'aktif' => '',
            ],
            'Status' => [
                'title' => 'Status',
                'link' => base_url() . '/Status',
                'icon' => 'fa-solid fa-list',
                'aktif' => '',
            ],
        ];

        $this->rules = [
            'Id_provinsi' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'Id_provinsi tidak boleh kosong',
                ]
            ],
            'profinsi' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'profinsi tidak boleh kosong',
                ]
            ],
            'kota' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'kota tidak boleh kosong',
                ]
            ],
            'kecamatan' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'kecamatan tidak boleh kosong',
                ]
            ],
        ];


        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Provinsi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="' . base_url() .'">Beranda</a></li>
                                <li class="breadcrumb-item active">Provinsi</li>
                            </ol>
                        </div>';    
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
            return view('Provinsi/content', $data);
    
    }
}