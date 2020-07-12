@if(session('thongbaothanhcong'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>

    <ul style="text-align: left;">
      {{ session('thongbaothanhcong') }}
    </ul>

  </div>
@endif
