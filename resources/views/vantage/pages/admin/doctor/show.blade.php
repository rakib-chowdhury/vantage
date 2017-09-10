@extends('vantage.layout.main')
@section('page_title','Doctor')
@section('page_header','Doctor List')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Doctor</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <div>
                <a href="{{url('doctor/add')}}" class="btn btn-success btn-rounded">Add Doctor</a>
                <hr>
            </div>

            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Name</th>
                        <th style="text-align: center; ">Designation</th>
                        <th style="text-align: center; ">Contact</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 12%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($doctor_info as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            <img style="width:50px; height:50px; border-radius:50%"
                                 src="{{url('public/images/emp/'.$u->image)}}">
                        </td>
                        <td style="text-align: center;"><?= $u['name'] ?></td>
                        <td style="text-align: center;"><?= $u['designation'] ?></td>
                        <td style="text-align: center;"><?= $u['contact'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }else{ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal_<?=$u['id']?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                            </a>&nbsp;
                            <a href="{{url('doctor/edit')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <a href="{{url('doctor/delete')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <!-- Modal -->
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Doctor Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <img style="width:300px; height:150px;"
                                                             src="{{url('public/images/emp/'.$u->image)}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Name</td>
                                                    <td style="padding:5px;">{{$u->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Contact</td>
                                                    <td style="padding:5px;">{{$u->contact}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Profession</td>
                                                    <td style="padding:5px;">{{$u->profession}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Designation</td>
                                                    <td style="padding:5px;">{{$u->designation}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Working Place</td>
                                                    <td style="padding:5px;">{{$u->office}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Mail</td>
                                                    <td style="padding:5px;">{{$u->mail}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Facebook</td>
                                                    <td style="padding:5px;">{{$u->fb}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Twitter</td>
                                                    <td style="padding:5px;">{{$u->twitter}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Linkedin</td>
                                                    <td style="padding:5px;">{{$u->linkedin}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Google Plus</td>
                                                    <td style="padding:5px;">{{$u->googolePlus}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Youtube</td>
                                                    <td style="padding:5px;">{{$u->youtube}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Status</td>
                                                    <td style="padding:5px;">
                                                        @if($u->status==1)
                                                            {{'Active'}}
                                                        @else
                                                            {{'Blocked'}}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Registered At</td>
                                                    <td style="padding:5px;">{{explode(' ',$u->created_at)[0]}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
