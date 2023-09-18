@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('laporan/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('laporan?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('laporan/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('laporan/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Pengajuan', (isset($fields['no_pengajuan']['language'])? $fields['no_pengajuan']['language'] : array())) }}</td>
						<td>{{ $row->no_pengajuan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Karawan', (isset($fields['nama_karawan']['language'])? $fields['nama_karawan']['language'] : array())) }}</td>
						<td>{{ $row->nama_karawan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tanggal Pengajuan', (isset($fields['tanggal_pengajuan']['language'])? $fields['tanggal_pengajuan']['language'] : array())) }}</td>
						<td>{{ $row->tanggal_pengajuan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jangka Waktu', (isset($fields['angsuran']['language'])? $fields['angsuran']['language'] : array())) }}</td>
						<td>{{ $row->angsuran}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Angsuran Berjalan', (isset($fields['angsuran_berjalan']['language'])? $fields['angsuran_berjalan']['language'] : array())) }}</td>
						<td>{{ $row->angsuran_berjalan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Angsuran Per Bulan', (isset($fields['angsuran_per_bulan']['language'])? $fields['angsuran_per_bulan']['language'] : array())) }}</td>
						<td>{{ $row->angsuran_per_bulan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Pinjaman', (isset($fields['total_pinjaman']['language'])? $fields['total_pinjaman']['language'] : array())) }}</td>
						<td>{{ $row->total_pinjaman}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jaminan', (isset($fields['jenis_jaminan']['language'])? $fields['jenis_jaminan']['language'] : array())) }}</td>
						<td>{{ $row->jenis_jaminan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gaji Pokok', (isset($fields['gaji_pokok']['language'])? $fields['gaji_pokok']['language'] : array())) }}</td>
						<td>{{ $row->gaji_pokok}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
