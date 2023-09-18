<?php
        
// Start Routes for manager 
Route::resource('services/manager','Services\ManagerController');
// End Routes for manager 

                    
// Start Routes for finance 
Route::resource('services/finance','Services\FinanceController');
// End Routes for finance 

                    
// Start Routes for karyawan 
Route::resource('services/karyawan','Services\KaryawanController');
// End Routes for karyawan 

                    
// Start Routes for pengajuanpinjaman 
Route::resource('services/pengajuanpinjaman','Services\PengajuanpinjamanController');
// End Routes for pengajuanpinjaman 

                    
// Start Routes for laporan 
Route::resource('services/laporan','Services\LaporanController');
// End Routes for laporan 

                    
// Start Routes for dataset 
Route::resource('services/dataset','Services\DatasetController');
// End Routes for dataset 

                    
// Start Routes for hasilprediksi 
Route::resource('services/hasilprediksi','Services\HasilprediksiController');
// End Routes for hasilprediksi 

                    ?>