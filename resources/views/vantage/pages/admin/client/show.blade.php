@extends('vantage.layout.main')
@section('page_title','Client')
@section('page_header','Client List')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Client</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">           

		<!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#pending" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">Pending</span></a></li>
              <li role="presentation" class=""><a href="#active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Active</span></a></li>
              <li role="presentation" class=""><a href="#blocked" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Blocked</span></a></li>              
            </ul>
			<!-- Tab panes -->
            <div class="tab-content">
			
              <div role="tabpanel" class="tab-pane active" id="pending">
                
            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Name</th>
                        <th style="text-align: center; ">Email</th>
                        <th style="text-align: center; ">Contact</th>
						<th style="text-align: center; ">Profession</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 12%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($client_pending as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            <img style="width:50px; height:50px; border-radius:50%"
                                 src="{{url('public/images/emp/'.$u->image)}}">
                        </td>
                        <td style="text-align: center;"><?= $u['name'] ?></td>
                        <td style="text-align: center;"><?= $u['mail'] ?></td>
                        <td style="text-align: center;"><?= $u['contact'] ?></td>
						<td style="text-align: center;"><?= $u['profession'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }elseif($u['status'] == 0){ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }elseif($u['status'] == 2){?>
								<span class="label label-inverse">Pending</span>
							<?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
							<a href="{{url('client/status_change/1/')}}/{{$u->id}}" class="">
                                <span data-toggle="tooltip" data-placement="top" title="Active this client"
                                      class="label label-success">Active</span>
                            </a><br><br>
							<a href="{{url('client/status_change/0/')}}/{{$u->id}}" class="">
                                <span data-toggle="tooltip" data-placement="top" title="Blocked this client"
                                      class="label label-danger">Blocked</span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
                <div class="clearfix"></div>
              </div>
			  
              <div role="tabpanel" class="tab-pane" id="active">
                
            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Name</th>
                        <th style="text-align: center; ">Email</th>
                        <th style="text-align: center; ">Contact</th>
						<th style="text-align: center; ">Profession</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 12%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($client_active as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            <img style="width:50px; height:50px; border-radius:50%"
                                 src="{{url('public/images/emp/'.$u->image)}}">
                        </td>
                        <td style="text-align: center;"><?= $u['name'] ?></td>
                        <td style="text-align: center;"><?= $u['mail'] ?></td>
                        <td style="text-align: center;"><?= $u['contact'] ?></td>
						<td style="text-align: center;"><?= $u['profession'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }elseif($u['status'] == 0){ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }elseif($u['status'] == 2){?>
								<span class="label label-inverse">Pending</span>
							<?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
							<a href="{{url('client/status_change/0/')}}/{{$u->id}}" class="">
                                <span data-toggle="tooltip" data-placement="top" title="Blocked this client"
                                      class="label label-danger">Blocked</span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
                <div class="clearfix"></div>
              </div>
			  
              <div role="tabpanel" class="tab-pane" id="blocked">
                
            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Name</th>
                        <th style="text-align: center; ">Email</th>
                        <th style="text-align: center; ">Contact</th>
						<th style="text-align: center; ">Profession</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 12%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($client_blocked as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            <img style="width:50px; height:50px; border-radius:50%"
                                 src="{{url('public/images/emp/'.$u->image)}}">
                        </td>
                        <td style="text-align: center;"><?= $u['name'] ?></td>
                        <td style="text-align: center;"><?= $u['mail'] ?></td>
                        <td style="text-align: center;"><?= $u['contact'] ?></td>
						<td style="text-align: center;"><?= $u['profession'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }elseif($u['status'] == 0){ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }elseif($u['status'] == 2){?>
								<span class="label label-inverse">Pending</span>
							<?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
						<a href="{{url('client/status_change/1/')}}/{{$u->id}}" class="">
                                <span data-toggle="tooltip" data-placement="top" title="Active this client"
                                      class="label label-success">Active</span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
                <div class="clearfix"></div>
              </div>              
            </div>
			
        </div>
    </div>
@endsection
