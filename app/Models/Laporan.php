<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class laporan extends Sximo  {
	
	protected $table = 'tb_laporan';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT
 tb_laporan.* ,
lpad(tb_pengajuan.id,4,'0') as no_pengajuan,
DATE_FORMAT(tb_pengajuan.tgl_pengajuan, '%d-%m-%Y') as tanggal_pengajuan,
tb_pengajuan.angsuran,
FORMAT(tb_pengajuan.jumlah_pinjaman, 0) as total_pinjaman,
tb_karyawan.nama_karawan,
tb_pengajuan.jenis_jaminan,
FORMAT(tb_karyawan.gaji_pokok, 0) as gaji_pokok,
FORMAT(tb_laporan.angsuran_bulanan, 0) as angsuran_per_bulan,
tb_karyawan.status_karyawan
FROM tb_laporan 
left join tb_pengajuan on tb_laporan.id_pengajuan = tb_pengajuan.id
left join tb_karyawan on tb_pengajuan.id_karyawan = tb_karyawan.id ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_laporan.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
