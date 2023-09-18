<?php
        
// Start Routes for manager 
Route::resource('manager','ManagerController');
// End Routes for manager 

                    
// Start Routes for finance 
Route::resource('finance','FinanceController');
// End Routes for finance 

                    
// Start Routes for karyawan 
Route::resource('karyawan','KaryawanController');
// End Routes for karyawan 

                    
// Start Routes for pengajuanpinjaman 
Route::resource('pengajuanpinjaman','PengajuanpinjamanController');
// End Routes for pengajuanpinjaman 

                    
// Start Routes for laporan 
Route::resource('laporan','LaporanController');
// End Routes for laporan 

                    
// Start Routes for dataset 
Route::resource('dataset','DatasetController');
// End Routes for dataset 

                    
// Start Routes for hasilprediksi 
Route::resource('hasilprediksi','HasilprediksiController');
// End Routes for hasilprediksi 

                    ?>