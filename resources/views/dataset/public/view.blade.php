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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Usia', (isset($fields['usia']['language'])? $fields['usia']['language'] : array())) }}</td>
						<td>{{ $row->usia}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status Perkawinan', (isset($fields['status_perkawinan']['language'])? $fields['status_perkawinan']['language'] : array())) }}</td>
						<td>{{ $row->status_perkawinan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lama Bekerja', (isset($fields['lama_bekerja']['language'])? $fields['lama_bekerja']['language'] : array())) }}</td>
						<td>{{ $row->lama_bekerja}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jaminan', (isset($fields['jaminan']['language'])? $fields['jaminan']['language'] : array())) }}</td>
						<td>{{ $row->jaminan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jangka Waktu', (isset($fields['jangka_waktu']['language'])? $fields['jangka_waktu']['language'] : array())) }}</td>
						<td>{{ $row->jangka_waktu}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jumlah Pinjaman', (isset($fields['jumlah_pinjaman']['language'])? $fields['jumlah_pinjaman']['language'] : array())) }}</td>
						<td>{{ $row->jumlah_pinjaman}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gaji Pokok', (isset($fields['gaji_pokok']['language'])? $fields['gaji_pokok']['language'] : array())) }}</td>
						<td>{{ $row->gaji_pokok}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Limit Pinjaman', (isset($fields['limit_pinjaman']['language'])? $fields['limit_pinjaman']['language'] : array())) }}</td>
						<td>{{ $row->limit_pinjaman}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	