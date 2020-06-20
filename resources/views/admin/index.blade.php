@extends('admin.layout.app')

@section('content')


        <div class="row">
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="inner">
                <h3>13</h3>

                <p>Total Post Company</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                <h3>10 User</h3>

                <p>Total Registrations</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                <h3> 10 clients</h3>

                <p>Total Clients</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
            
            </div>
            </div>
            
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                <h3>1</h3>

                <p>Applied Survey</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
            
            </div>
            </div>
            <!-- ./col -->
        </div>
        
    
@endsection


   