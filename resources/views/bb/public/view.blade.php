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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	