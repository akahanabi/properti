<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Properti_model extends CI_Model{
    private $_table="properti";

    public $id;
    public $tipe;
    public $id_proyek;
    public $id_subkategori;
    public $alamat;
    public $id_kelurahan;
    public $deskripsi;
    public $harga;
    public $tersedia_ejak;
    public $luas_bangunan;
    public $luas_tanah;
    public $jumlah_kamar_mandi;
    public $jumlah_kamar_tidur;
    public $watt;
    public $status="pending";
    public $latitude;
    public $longitude;

    public function rules(){
        return [
            ['field' => 'tipe',
            'label' => 'Tipe',
            'rules' => 'required'],

            ['field' => 'id_proyek',
            'label' => 'ID Proyek',
            'rules' => ''],

            ['field' => 'id_subkategori',
            'label' => 'ID Subkategori',
            'rules' => 'required'],

            ['field'=> 'alamat',
            'label' => 'Label',
            'rules' => 'required'],

            ['field' => 'id_kelurahan',
            'label' => 'ID Kelurahan',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required'],

            ['field' => 'tersedia_sejak',
            'label' => 'Tersedia Sejak',
            'rules' => 'required'],

            ['field' => 'luas_bangunan',
            'label' => 'Luas Bangunan',
            'rules' => ''],

            ['field' => 'luas_tanah',
            'label' => 'Luas Tanah',
            'rules' => 'required'],

            ['field' => 'jumlah_kamar_mandi',
            'label' => 'Jumlah Kamar Mandi',
            'rules' => ''],

            ['field' => 'jumlah_kamar_tidur',
            'label' => 'Jumlah Kamar Tidur',
            'rules' => ''],

            ['field' => 'watt',
            'label' => 'Watt',
            'rules' => ''],

            ['field' => 'latitude',
            'label' => 'Latitude',
            'rules' => 'required'],

            ['field' => 'longitude',
            'label' => 'Longitude',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table,["id" => $id])->row();
    }

    public function save(){
        $post=$this->input->post();
        $this->id=uniqid();
        $this->tipe=$post["tipe"];
        $this->id_proyek=$post["id_proyek"];
        $this->id_subkategori=$post["id_subkategori"];
        $this->alamat=$post["alamat"];
        $this->id_kelurahan=$post["id_kelurahan"];
        $this->deskripsi=$post["deskripsi"];
        $this->harga=$post["harga"];
        $this->tersedia_sejak=$post["tersedia_sejak"];
        $this->luas_bangunan=$post["luas_bangunan"];
        $this->luas_tanah=$post["luas_tanah"];
        $this->jumlah_kamar_mandi=$post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur=$post["jumlah_kamar_tidur"];
        $this->watt=$post["watt"];
        $this->status=$post["status"];
        $this->latitude=$post["latitude"];
        $this->longitude=$post["longitude"];
        $this->db->insert($this->_table,$this);
    }

    public function update(){
        $post=$this->input->post();
        $this->id=uniqid();
        $this->tipe=$post["tipe"];
        $this->id_proyek=$post["id_proyek"];
        $this->id_subkategori=$post["id_subkategori"];
        $this->alamat=$post["alamat"];
        $this->id_kelurahan=$post["id_kelurahan"];
        $this->deskripsi=$post["deskripsi"];
        $this->harga=$post["harga"];
        $this->tersedia_sejak=$post["tersedia_sejak"];
        $this->luas_bangunan=$post["luas_bangunan"];
        $this->luas_tanah=$post["luas_tanah"];
        $this->jumlah_kamar_mandi=$post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur=$post["jumlah_kamar_tidur"];
        $this->watt=$post["watt"];
        $this->status=$post["status"];
        $this->latitude=$post["latitude"];
        $this->longitude=$post["longitude"];
        $this->db->update($this->_table,$this,array('id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table,array('id' => $id));
    }
}