

		 {!! Form::open(array('url'=>'bb', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> aa</legend>
									
									  <div class="form-group row  " >
										<label for="Menu Id" class=" control-label col-md-4 text-left"> Menu Id </label>
										<div class="col-md-6">
										  <input  type='text' name='menu_id' id='menu_id' value='{{ $row['menu_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Parent Id" class=" control-label col-md-4 text-left"> Parent Id </label>
										<div class="col-md-6">
										  <input  type='text' name='parent_id' id='parent_id' value='{{ $row['parent_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Module" class=" control-label col-md-4 text-left"> Module </label>
										<div class="col-md-6">
										  <input  type='text' name='module' id='module' value='{{ $row['module'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Url" class=" control-label col-md-4 text-left"> Url </label>
										<div class="col-md-6">
										  <input  type='text' name='url' id='url' value='{{ $row['url'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Menu Name" class=" control-label col-md-4 text-left"> Menu Name </label>
										<div class="col-md-6">
										  <input  type='text' name='menu_name' id='menu_name' value='{{ $row['menu_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Menu Type" class=" control-label col-md-4 text-left"> Menu Type </label>
										<div class="col-md-6">
										  <input  type='text' name='menu_type' id='menu_type' value='{{ $row['menu_type'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Role Id" class=" control-label col-md-4 text-left"> Role Id </label>
										<div class="col-md-6">
										  <input  type='text' name='role_id' id='role_id' value='{{ $row['role_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Deep" class=" control-label col-md-4 text-left"> Deep </label>
										<div class="col-md-6">
										  <input  type='text' name='deep' id='deep' value='{{ $row['deep'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ordering" class=" control-label col-md-4 text-left"> Ordering </label>
										<div class="col-md-6">
										  <input  type='text' name='ordering' id='ordering' value='{{ $row['ordering'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Position" class=" control-label col-md-4 text-left"> Position </label>
										<div class="col-md-6">
										  <input  type='text' name='position' id='position' value='{{ $row['position'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Menu Icons" class=" control-label col-md-4 text-left"> Menu Icons </label>
										<div class="col-md-6">
										  <input  type='text' name='menu_icons' id='menu_icons' value='{{ $row['menu_icons'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Active" class=" control-label col-md-4 text-left"> Active </label>
										<div class="col-md-6">
										  <input  type='text' name='active' id='active' value='{{ $row['active'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Access Data" class=" control-label col-md-4 text-left"> Access Data </label>
										<div class="col-md-6">
										  <textarea name='access_data' rows='5' id='access_data' class='form-control form-control-sm '  
				           >{{ $row['access_data'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Allow Guest" class=" control-label col-md-4 text-left"> Allow Guest </label>
										<div class="col-md-6">
										  <input  type='text' name='allow_guest' id='allow_guest' value='{{ $row['allow_guest'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Menu Lang" class=" control-label col-md-4 text-left"> Menu Lang </label>
										<div class="col-md-6">
										  <textarea name='menu_lang' rows='5' id='menu_lang' class='form-control form-control-sm '  
				           >{{ $row['menu_lang'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
