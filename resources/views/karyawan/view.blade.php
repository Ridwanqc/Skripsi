@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('karyawan/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('karyawan?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('karyawan/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('karyawan/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Rekening', (isset($fields['no_rekening']['language'])? $fields['no_rekening']['language'] : array())) }}</td>
						<td>{{ $row->no_rekening}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jumlah Gaji', (isset($fields['jumlah_gaji']['language'])? $fields['jumlah_gaji']['language'] : array())) }}</td>
						<td>{{ $row->jumlah_gaji}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
