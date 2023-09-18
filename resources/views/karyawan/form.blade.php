@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>

{!! Form::open(array('url'=>'karyawan?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true
,'id'=> 'FormTable' )) !!}
<div class="toolbar-nav">
    <div class="row">

        <div class="col-md-6 ">
            <div class="submitted-button">
                <button name="apply" class="tips btn btn-sm   " title="{{ __('core.btn_back') }}"><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
                <button name="save" class="tips btn btn-sm " id="saved-button" title="{{ __('core.btn_back') }}"><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
            </div>
        </div>
        <div class="col-md-6 text-right ">
            <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>
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
                    <label for="Jenis Kelamin" class=" control-label col-md-4 text-left"> Jenis Kelamin <span class="asterix"> * </span></label>
                    <div class="col-md-6">


                        <input type='radio' name='jk' value='L' required @if($row['jk']=='L' ) checked="checked" @endif class='minimal-green'>
                        Laki - laki

                        <input type='radio' name='jk' value='P' required @if($row['jk']=='P' ) checked="checked" @endif class='minimal-green'>Perempuan
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="ktp" class=" control-label col-md-4 text-left"> KTP <span class="asterix"> * </span></label>
                    <div class="col-md-6">
                        <input type='text' name='ktp' id='ktp' value='{{ $row['ktp'] }}' required class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Tgl Lahir" class=" control-label col-md-4 text-left"> Tgl Lahir <span class="asterix"> *
                        </span></label>
                    <div class="col-md-6">

                        <div class="input-group input-group-sm m-b" style="width:150px !important;">
                            {!! Form::text('tgl_lahir', $row['tgl_lahir'],array('class'=>'form-control form-control-sm
                            date')) !!}
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>

                <div class="form-group row  ">
                    <label for="Alamat" class=" control-label col-md-4 text-left"> Alamat <span class="asterix"> *
                        </span></label>
                    <div class="col-md-6">
                        <input type='text' name='alamat' id='alamat' value='{{ $row['alamat'] }}' required class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="No Tlpn" class=" control-label col-md-4 text-left"> No Tlpn <span class="asterix"> *
                        </span></label>
                    <div class="col-md-6">
                        <input type='text' name='no_tlpn' id='no_tlpn' value='{{ $row['no_tlpn'] }}' required class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Status Pernikahan" class=" control-label col-md-4 text-left"> Status Pernikahan <span class="asterix"> * </span></label>
                    <div class="col-md-6">


                        <input type='radio' name='status_pernikahan' value='Menikah' required @if($row['status_pernikahan']=='Menikah' ) checked="checked" @endif class='minimal-green'>
                        Menikah

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
                    <label for="Departement" class=" control-label col-md-4 text-left"> Departement <span class="asterix"> * </span></label>
                    <div class="col-md-6">
                        <input type='text' name='departement' id='departement' value='{{ $row['departement'] }}' required class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Jabatan" class=" control-label col-md-4 text-left"> Jabatan <span class="asterix"> *
                        </span></label>
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
                            {!! Form::text('tgl_bergabung', $row['tgl_bergabung'],array('class'=>'form-control
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
                        <select name="status_karyawan" id="status_karyawan" class="form-control">
                            <option value="{{ $row['status_karyawan'] }}">{{ $row['status_karyawan'] }}</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="Parttime">Parttime</option>
                        </select>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Gaji Pokok" class=" control-label col-md-4 text-left"> Gaji Pokok <span class="asterix">
                            * </span></label>
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

    </div>

    <input type="hidden" name="action_task" value="save" />

</div>
</div>
{!! Form::close() !!}

<script type="text/javascript">
    $(document).ready(function() {





        $('.removeMultiFiles').on('click', function() {
            var removeUrl = '{{ url("karyawan/removefiles?file=")}}' + $(this).attr('url');
            $(this).parent().remove();
            $.get(removeUrl, function(response) {});
            $(this).parent('div').empty();
            return false;
        });

    });
</script>
@stop