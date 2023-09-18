<?php $sidebar = SiteHelpers::menus('sidebar') ;
$active = Request::segment(1);
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="{{ url('dashboard') }}">
            <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
        <ul class="treeview-menu ">
            <li>
                <a href="{{ url('dashboard') }}">
                    <i class="fa fa-home"></i> Dashboard</a></li>
        </ul>
    </li>


    @foreach ($sidebar as $menu)
    @foreach ($menu['childs'] as $menu2)

    <li class=" @if(Session::get('menu') == $menu2['menu_name']) active @endif">
        <a href="{{ url($menu2['module'])}}" onclick="session('{{$menu2['menu_name']}}')">
            <i class="{{$menu2['menu_icons']}}"></i> <span>{{$menu2['menu_name']}}</span>
        </a>

    </li>
    @endforeach


    @endforeach


    @if( session('gid') =='11' )
    <li class="treeview">
        <a href="#">
            <i class="fa fa-gear"></i>
            <span>Applications</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('') }}/sximo/config"><i class="fa fa-ellipsis-v"></i>@lang('core.t_generalsetting')</a>
            </li>
            <li>
                <a href="{{ url('sximo/module')}}"><i class="fa fa-ellipsis-v"></i>@lang('core.m_codebuilder') </a>
            </li>
            <li>
                <a href="{{ url('sximo/tables')}}"><i class="fa fa-ellipsis-v"></i>@lang('core.m_database')</a>
            </li>
            <li>
                <a href="{{ url('sximo/form')}}"><i class="fa fa-ellipsis-v"></i> @lang('core.m_formbuilder')</a>
            </li>
            <li>
                <a href="{{ url('sximo/menu')}}"><i class="fa fa-ellipsis-v"></i> @lang('core.m_menu')</a>
            </li>
            <li>
                <a href="{{ url('sximo/code')}}"><i class="fa fa-ellipsis-v"></i> @lang('core.m_sourceeditor') </a>
            </li>
            <li>
                <a href="{{ url('sximo/config/clearlog')}}" class="clearCache"><i class="fa fa-ellipsis-v"></i>
                    @lang('core.m_clearcache')</a>
            </li>



        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-gear"></i>
            <span>Users and Activities </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('core/users')}}"><i class="lni-users"></i> @lang('core.m_users') <br /></a> </li>
            <li><a href="{{ url('core/groups')}}"><i class="lni-network"></i> @lang('core.m_groups') </a> </li>
            <li><a href="{{ url('core/users/blast')}}"><i class="lni-envelope"></i> @lang('core.m_blastemail') </a></li>
            <li><a href="{{ url('core/elfinder')}}"><i class="fa fa-picture-o"></i> Files & Media </a> </li>
            <li> <a href="{{ url('core/logs')}}"><i class="fa fa-bookmark-o"></i> @lang('core.m_logs') </a> </li>



        </ul>
    </li>
    @endif







</ul>

<script>
    function session(sess) {


        csrf_token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('set_active_menu') }}",
            type: "POST",
            data: {
                '_token': csrf_token,
                'menu': sess,
            },

            success: function (res) {
                console.log(res.status);

            },
            error: function (xhr) {
                //alert('Data gagal disimpan!')
            }
        });
    }

</script>
