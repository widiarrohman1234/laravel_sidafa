@if ((request()->user()->level1) == 'putra')
	@if ((request()->user()->level2) == 'superadmin')
    	@include('admin.layouts.sidebarsuperadmin')
    @elseif ((request()->user()->level2) == 'bendahara')
    	@include('admin.layouts.sidebarbendahara')
    @elseif ((request()->user()->level2) == 'pengabsen')
    	@include('admin.layouts.sidebarpengabsen')
    @endif
@elseif((request()->user()->level1) == 'putri')
   	@if ((request()->user()->level2) == 'superadmin')
    	@include('admin.layouts.sidebarsuperadmin')
    @elseif ((request()->user()->level2) == 'bendahara')
    	@include('admin.layouts.sidebarbendahara')
    @elseif ((request()->user()->level2) == 'pengabsen')
    	@include('admin.layouts.sidebarpengabsen')
    @endif
@endif