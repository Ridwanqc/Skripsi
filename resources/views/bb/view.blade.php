@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('bb/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('bb?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('bb/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('bb/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Menu Id', (isset($fields['menu_id']['language'])? $fields['menu_id']['language'] : array())) }}</td>
						<td>{{ $row->menu_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Parent Id', (isset($fields['parent_id']['language'])? $fields['parent_id']['language'] : array())) }}</td>
						<td>{{ $row->parent_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Module', (isset($fields['module']['language'])? $fields['module']['language'] : array())) }}</td>
						<td>{{ $row->module}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Url', (isset($fields['url']['language'])? $fields['url']['language'] : array())) }}</td>
						<td>{{ $row->url}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Menu Name', (isset($fields['menu_name']['language'])? $fields['menu_name']['language'] : array())) }}</td>
						<td>{{ $row->menu_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Menu Type', (isset($fields['menu_type']['language'])? $fields['menu_type']['language'] : array())) }}</td>
						<td>{{ $row->menu_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Role Id', (isset($fields['role_id']['language'])? $fields['role_id']['language'] : array())) }}</td>
						<td>{{ $row->role_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Deep', (isset($fields['deep']['language'])? $fields['deep']['language'] : array())) }}</td>
						<td>{{ $row->deep}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ordering', (isset($fields['ordering']['language'])? $fields['ordering']['language'] : array())) }}</td>
						<td>{{ $row->ordering}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Position', (isset($fields['position']['language'])? $fields['position']['language'] : array())) }}</td>
						<td>{{ $row->position}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Menu Icons', (isset($fields['menu_icons']['language'])? $fields['menu_icons']['language'] : array())) }}</td>
						<td>{{ $row->menu_icons}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Active', (isset($fields['active']['language'])? $fields['active']['language'] : array())) }}</td>
						<td>{{ $row->active}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Access Data', (isset($fields['access_data']['language'])? $fields['access_data']['language'] : array())) }}</td>
						<td>{{ $row->access_data}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Allow Guest', (isset($fields['allow_guest']['language'])? $fields['allow_guest']['language'] : array())) }}</td>
						<td>{{ $row->allow_guest}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Menu Lang', (isset($fields['menu_lang']['language'])? $fields['menu_lang']['language'] : array())) }}</td>
						<td>{{ $row->menu_lang}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
