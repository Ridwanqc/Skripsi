<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Karawan', (isset($fields['nama_karawan']['language'])? $fields['nama_karawan']['language'] : array())) }}</td>
						<td>{{ $row->nama_karawan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Lahir', (isset($fields['tgl_lahir']['language'])? $fields['tgl_lahir']['language'] : array())) }}</td>
						<td>{{ $row->tgl_lahir}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Usia', (isset($fields['usia']['language'])? $fields['usia']['language'] : array())) }}</td>
						<td>{{ $row->usia}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat', (isset($fields['alamat']['language'])? $fields['alamat']['language'] : array())) }}</td>
						<td>{{ $row->alamat}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Tlpn', (isset($fields['no_tlpn']['language'])? $fields['no_tlpn']['language'] : array())) }}</td>
						<td>{{ $row->no_tlpn}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status Pernikahan', (isset($fields['status_pernikahan']['language'])? $fields['status_pernikahan']['language'] : array())) }}</td>
						<td>{{ $row->status_pernikahan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jenis Jaminan', (isset($fields['jenis_jaminan']['language'])? $fields['jenis_jaminan']['language'] : array())) }}</td>
						<td>{{ $row->jenis_jaminan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Departement', (isset($fields['departement']['language'])? $fields['departement']['language'] : array())) }}</td>
						<td>{{ $row->departement}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jabatan', (isset($fields['jabatan']['language'])? $fields['jabatan']['language'] : array())) }}</td>
						<td>{{ $row->jabatan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Bergabung', (isset($fields['tgl_bergabung']['language'])? $fields['tgl_bergabung']['language'] : array())) }}</td>
						<td>{{ $row->tgl_bergabung}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lama Bekerja', (isset($fields['lama_bekerja']['language'])? $fields['lama_bekerja']['language'] : array())) }}</td>
						<td>{{ $row->lama_bekerja}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status Karyawan', (isset($fields['status_karyawan']['language'])? $fields['status_karyawan']['language'] : array())) }}</td>
						<td>{{ $row->status_karyawan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gaji Pokok', (isset($fields['gaji_pokok']['language'])? $fields['gaji_pokok']['language'] : array())) }}</td>
						<td>{{ $row->gaji_pokok}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Rekening', (isset($fields['no_rekening']['language'])? $fields['no_rekening']['language'] : array())) }}</td>
						<td>{{ $row->no_rekening}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	