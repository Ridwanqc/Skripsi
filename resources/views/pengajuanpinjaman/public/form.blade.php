

		 {!! Form::open(array('url'=>'pengajuanpinjaman', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Pengajuan Pinjaman</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Id Karyawan" class=" control-label col-md-4 text-left"> Id Karyawan <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <select name='id_karyawan' rows='5' id='id_karyawan' class='select2 ' required  ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tgl Pengajuan" class=" control-label col-md-4 text-left"> Tgl Pengajuan <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('tgl_pengajuan', $row['tgl_pengajuan'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Angsuran" class=" control-label col-md-4 text-left"> Angsuran <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='angsuran' id='angsuran' value='{{ $row['angsuran'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jumlah Pinjaman" class=" control-label col-md-4 text-left"> Jumlah Pinjaman <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='jumlah_pinjaman' id='jumlah_pinjaman' value='{{ $row['jumlah_pinjaman'] }}' 
						required     class='form-control form-control-sm ' /> 
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
		
		
		$("#id_karyawan").jCombo("{!! url('pengajuanpinjaman/comboselect?filter=tb_karyawan:id:nama_karawan') !!}",
		{  selected_value : '{{ $row["id_karyawan"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
