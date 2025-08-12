@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('css')
   
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Dashboard</li> --}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row widget-grid">
        <div class="col-md-3">
          <div class="card small-widget"> 
            <div class="card-body primary"> <span class="f-light">New Orders</span>
              <div class="d-flex align-items-end gap-1">
                <h4>2,435</h4><span class="font-primary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
              </div>
              <div class="bg-gradient font-primary"> 
                <i data-feather="gift"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card small-widget"> 
            <div class="card-body warning"> <span class="f-light">New Orders</span>
              <div class="d-flex align-items-end gap-1">
                <h4>2,435</h4><span class="font-warning f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
              </div>
              <div class="bg-gradient font-warning"> 
                <i data-feather="gift"></i>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection