

		 {!! Form::open(array('url'=>'dataset', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Data Set</legend>
									
									  <div class="form-group row  " >
										<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
										<div class="col-md-6">
										  <input  type='text' name='id' id='id' value='{{ $row['id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jumlah Pinjaman" class=" control-label col-md-4 text-left"> Jumlah Pinjaman </label>
										<div class="col-md-6">
										  <input  type='text' name='jumlah_pinjaman' id='jumlah_pinjaman' value='{{ $row['jumlah_pinjaman'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Usia" class=" control-label col-md-4 text-left"> Usia </label>
										<div class="col-md-6">
										  <input  type='text' name='usia' id='usia' value='{{ $row['usia'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Gaji Pokok" class=" control-label col-md-4 text-left"> Gaji Pokok </label>
										<div class="col-md-6">
										  <input  type='text' name='gaji_pokok' id='gaji_pokok' value='{{ $row['gaji_pokok'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status Perkawinan" class=" control-label col-md-4 text-left"> Status Perkawinan </label>
										<div class="col-md-6">
										  <input  type='text' name='status_perkawinan' id='status_perkawinan' value='{{ $row['status_perkawinan'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lama Bekerja" class=" control-label col-md-4 text-left"> Lama Bekerja </label>
										<div class="col-md-6">
										  <input  type='text' name='lama_bekerja' id='lama_bekerja' value='{{ $row['lama_bekerja'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jaminan" class=" control-label col-md-4 text-left"> Jaminan </label>
										<div class="col-md-6">
										  <input  type='text' name='jaminan' id='jaminan' value='{{ $row['jaminan'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Limit Pinjaman" class=" control-label col-md-4 text-left"> Limit Pinjaman </label>
										<div class="col-md-6">
										  <input  type='text' name='limit_pinjaman' id='limit_pinjaman' value='{{ $row['limit_pinjaman'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jangka Waktu" class=" control-label col-md-4 text-left"> Jangka Waktu </label>
										<div class="col-md-6">
										  <input  type='text' name='jangka_waktu' id='jangka_waktu' value='{{ $row['jangka_waktu'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <input  type='text' name='status' id='status' value='{{ $row['status'] }}' 
						     class='form-control form-control-sm ' /> 
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
