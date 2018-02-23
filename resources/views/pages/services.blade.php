@extends('layouts.app')

@section('content')
    <h1 style="text-align:center">{{$title}}</h1>
    <!-- Service -->
	<div id="service" class="section md-padding">
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="color fa fa-desktop hover" aria-hidden="true"></i>
                            <h3>Web Design</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    <!-- /service -->
    
                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-pencil"></i>
                            <h3>Programming</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    <!-- /service -->
    
                    <!-- service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-diamond"></i>
                            <h3>Graphics Design</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    <!-- /service -->
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Service -->
@endsection
    