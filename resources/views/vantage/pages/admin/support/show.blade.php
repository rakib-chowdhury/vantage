@extends('vantage.layout.main')
@section('page_title','Support')
@section('page_header','Support List')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Support</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            @if(sizeof($support_info)<=($condition[0]->support-1))
                <div>
                    <a href="{{url('support/add')}}" class="btn btn-success btn-rounded">Add Support</a>
                    <hr>
                </div>
            @endif
            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Name</th>
                        <th style="text-align: center; ">Description</th>
                        <th style="text-align: center; ">Position</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 8%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($support_info as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;"><?= $u['name'] ?></td>
                        @if($u->type==1)
                            <td style="text-align: center; "><a style="cursor: pointer;" data-toggle="modal"
                                                                data-target="#myModal_<?=$u['id']?>">Details</a></td>
                            <!-- Modal -->
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?= $u['name']?> Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><?= $u['details']?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @else
                            <td>{{base_path()}}\{{$u->link}}</td>
                        @endif
                        <td style="text-align: center;"><?= $u['position'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }else{ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
                            @if($u->type==1)
                                <a href="{{url('support/edit')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                                </a>&nbsp;

                                <a href="{{url('support/delete')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                                </a>
                            @endif
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
