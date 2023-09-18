{!! Form::open(array('url'=>'karyawan', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

@if(Session::has('messagetext'))

{!! Session::get('messagetext') !!}

@endif
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>


<div class="col-md-6">
	<fieldset>
		<legend> Informasi Karyawan</legend>
		{!! Form::hidden('id', $row['id']) !!}
		<div class="form-group row  ">
			<label for="Nama Karawan" class=" control-label col-md-4 text-left"> Nama Karawan <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='nama_karawan' id='nama_karawan' value='{{ $row['nama_karawan'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Tgl Lahir" class=" control-label col-md-4 text-left"> Tgl Lahir <span class="asterix"> * </span></label>
			<div class="col-md-6">

				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('tgl_lahir', $row['tgl_lahir'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
						<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					</div>
				</div>
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Usia" class=" control-label col-md-4 text-left"> Usia <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='usia' id='usia' value='{{ $row['usia'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Alamat" class=" control-label col-md-4 text-left"> Alamat <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='alamat' id='alamat' value='{{ $row['alamat'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="No Tlpn" class=" control-label col-md-4 text-left"> No Tlpn <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='no_tlpn' id='no_tlpn' value='{{ $row['no_tlpn'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Status Pernikahan" class=" control-label col-md-4 text-left"> Status Pernikahan <span class="asterix"> * </span></label>
			<div class="col-md-6">


				<input type='radio' name='status_pernikahan' value='Menikah' required @if($row['status_pernikahan']=='Menikah' ) checked="checked" @endif class='minimal-green'> Menikah

				<input type='radio' name='status_pernikahan' value='Belum Menikah' required @if($row['status_pernikahan']=='Belum Menikah' ) checked="checked" @endif class='minimal-green'> Belum Menikah
			</div>
			<div class="col-md-2">

			</div>
		</div>
	</fieldset>
</div>
<div class="col-md-6">
	<fieldset>
		<legend> Informasi Pekerjaan</legend>

		<div class="form-group row  ">
			<label for="Jenis Jaminan" class=" control-label col-md-4 text-left"> Jenis Jaminan <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='jenis_jaminan' id='jenis_jaminan' value='{{ $row['jenis_jaminan'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Departement" class=" control-label col-md-4 text-left"> Departement <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='departement' id='departement' value='{{ $row['departement'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Jabatan" class=" control-label col-md-4 text-left"> Jabatan <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='jabatan' id='jabatan' value='{{ $row['jabatan'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Tgl Bergabung" class=" control-label col-md-4 text-left"> Tgl Bergabung <span class="asterix"> * </span></label>
			<div class="col-md-6">

				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('tgl_bergabung', $row['tgl_bergabung'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
						<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					</div>
				</div>
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Lama Bekerja" class=" control-label col-md-4 text-left"> Lama Bekerja <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='lama_bekerja' id='lama_bekerja' value='{{ $row['lama_bekerja'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Status Karyawan" class=" control-label col-md-4 text-left"> Status Karyawan <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='status_karyawan' id='status_karyawan' value='{{ $row['status_karyawan'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Gaji Pokok" class=" control-label col-md-4 text-left"> Gaji Pokok <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='gaji_pokok' id='gaji_pokok' value='{{ $row['gaji_pokok'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="No Rekening" class=" control-label col-md-4 text-left"> No Rekening <span class="asterix"> * </span></label>
			<div class="col-md-6">
				<input type='text' name='no_rekening' id='no_rekening' value='{{ $row['no_rekening'] }}' required class='form-control form-control-sm ' />
			</div>
			<div class="col-md-2">

			</div>
		</div>
	</fieldset>
</div>

<div style="clear:both"></div>


<div class="form-group">
	<label class="col-sm-4 text-right">&nbsp;</label>
	<div class="col-sm-8">
		<button type="submit" name="apply" class="btn btn-default btn-sm"><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
		<button type="submit" name="submit" class="btn btn-default btn-sm"><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
	</div>

</div>
<input type="hidden" name="action_task" value="public" />
{!! Form::close() !!}

<script type="text/javascript">
	$(document).ready(function() {



		$('.removeCurrentFiles').on('click', function() {
			var removeUrl = $(this).attr('href');
			$.get(removeUrl, function(response) {});
			$(this).parent('div').empty();
			return false;
		});

	});
</script>