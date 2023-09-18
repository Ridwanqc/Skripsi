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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Pengajuan', (isset($fields['tgl_pengajuan']['language'])? $fields['tgl_pengajuan']['language'] : array())) }}</td>
						<td>{{ $row->tgl_pengajuan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Angsuran', (isset($fields['angsuran']['language'])? $fields['angsuran']['language'] : array())) }}</td>
						<td>{{ $row->angsuran}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Pinjaman', (isset($fields['total_pinjaman']['language'])? $fields['total_pinjaman']['language'] : array())) }}</td>
						<td>{{ $row->total_pinjaman}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	