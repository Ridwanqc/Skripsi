@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>

{!! Form::open(array('url'=>'pengajuanpinjaman?return='.$return, 'class'=>'form-horizontal validated sximo-form','files'
=> true ,'id'=> 'FormTable' )) !!}
<div class="toolbar-nav">
    <div class="row">

        <div class="col-md-6 ">
            <div class="submitted-button">
                <button name="apply" class="tips btn btn-sm   " title="{{ __('core.btn_back') }}"><i
                        class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
                <button name="save" class="tips btn btn-sm " id="saved-button" title="{{ __('core.btn_back') }}"><i
                        class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
            </div>
        </div>
        <div class="col-md-6 text-right ">
            <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "
                title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>
        </div>
    </div>
</div>


<div class="p-5">
    <ul class="parsley-error-list">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend> Pengajuan Pinjaman</legend>
                {!! Form::hidden('id', $row['id']) !!}
                <div class="form-group row  ">
                    <label for="Id Karyawan" class=" control-label col-md-4 text-left"> Id Karyawan <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">
                        <select name='id_karyawan' rows='5' id='id_karyawan' class='select2 ' required></select>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Tgl Pengajuan" class=" control-label col-md-4 text-left"> Tgl Pengajuan <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <div class="input-group input-group-sm m-b" style="width:150px !important;">
                            {!! Form::text('tgl_pengajuan', $row['tgl_pengajuan'],array('class'=>'form-control
                            form-control-sm date')) !!}
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Angsuran" class=" control-label col-md-4 text-left"> Angsuran <span class="asterix"> *
                        </span></label>
                    <div class="col-md-6">
                        <input type='text' name='angsuran' id='angsuran' value='{{ $row['angsuran'] }}' required
                            class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Jumlah Pinjaman" class=" control-label col-md-4 text-left"> Jumlah Pinjaman <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">
                        <input type='text' name='jumlah_pinjaman' id='jumlah_pinjaman'
                            value='{{ $row['jumlah_pinjaman'] }}' required class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
				<div class="form-group row  ">
                    <label for="Jenis Jaminan" class=" control-label col-md-4 text-left"> Jenis Jaminan <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <?php $jenis_jaminan = explode(',',$row['jenis_jaminan']);
					$jenis_jaminan_opt = array( 'Kartu Karyawan' => 'Kartu Karyawan' ,  'BPKB Motor' => 'BPKB Motor' ,  'BPKB Mobil' => 'BPKB Mobil' , ); ?>
                        <select name='jenis_jaminan' rows='5' required class='select2 '>
                            <?php 
						foreach($jenis_jaminan_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['jenis_jaminan'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </fieldset>
        </div>

    </div>

    <input type="hidden" name="action_task" value="save" />

</div>
</div>
{!! Form::close() !!}

<script type="text/javascript">
    $(document).ready(function () {



        $("#id_karyawan").jCombo(
            "{!! url('pengajuanpinjaman/comboselect?filter=tb_karyawan:id:nama_karawan') !!}", {
                selected_value: '{{ $row["id_karyawan"] }}'
            });



        $('.removeMultiFiles').on('click', function () {
            var removeUrl = '{{ url("pengajuanpinjaman/removefiles?file=")}}' + $(this).attr('url');
            $(this).parent().remove();
            $.get(removeUrl, function (response) {});
            $(this).parent('div').empty();
            return false;
        });

    });

</script>
@stop
