@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>Admin</h1>
   <ol class="breadcrumb">
      <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Admin</li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
               <li class="active"><a href="#general-tab" data-toggle="tab">General <i class="fa"></i></a></li>
               <li><a href="#address-tab" data-toggle="tab">Volume Information <i class="fa"></i></a></li>
               <li><a href="#info-tab" data-toggle="tab">Container Information <i class="fa"></i></a></li>
               <li><a href="#address-tab" data-toggle="tab">Pickup and Delivery Information <i class="fa"></i></a></li>
            </ul>
            <form id="accountForm" method="post" class="form-horizontal">
               <div class="tab-content">
                  <div class="tab-pane active" id="general-tab">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Cust:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Shpr:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Cnee:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Group of Commodity:</label>
                           <div class="col-xs-9">
                              <select class="form-control select2" style="width: 100%;">
                                 <option selected="selected">Alabama</option>
                                 <option>Alaska</option>
                                 <option>California</option>
                                 <option>Delaware</option>
                                 <option>Tennessee</option>
                                 <option>Texas</option>
                                 <option>Washington</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Pickup From:</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-7">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">POL:</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-7">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Via:</label>
                           <div class="col-xs-9">
                              <select class="form-control select2" style="width: 100%;">
                                 <option selected="selected">Alabama</option>
                                 <option>Alaska</option>
                                 <option>California</option>
                                 <option>Delaware</option>
                                 <option>Tennessee</option>
                                 <option>Texas</option>
                                 <option>Washington</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">POD:</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-7">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Final Dlv:</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-7">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Schedule:</label>
                           <div class="col-xs-8">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <button type="button" class="btn btn-default">+</button>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Vessel:</label>
                           <div class="col-xs-7">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="row">
                           <label class="col-xs-1 control-label">20':</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <label class="col-xs-1 control-label">40':</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <label class="col-xs-1 control-label">45':</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <label class="col-xs-1 control-label">HC:</label>
                           <div class="col-xs-2">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Carrier:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Dlv Agt:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Where:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Desc of Goods:</label>
                           <div class="col-xs-9">
                              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">ETD POL:</label>
                           <div class="col-xs-4">
                              <div class="input-group date">
                                 <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                 </div>
                                 <input type="text" class="form-control pull-right" id="datepicker">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">ETD VIA:</label>
                           <div class="col-xs-3">
                              <div class="input-group date">
                                 <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                 </div>
                                 <input type="text" class="form-control pull-right" id="datepicker">
                              </div>
                           </div>
                           <label class="col-xs-3 control-label">ETA VIA:</label>
                           <div class="col-xs-3">
                              <div class="input-group date">
                                 <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                 </div>
                                 <input type="text" class="form-control pull-right" id="datepicker">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">ETA:</label>
                           <div class="col-xs-4">
                              <div class="input-group date">
                                 <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                 </div>
                                 <input type="text" class="form-control pull-right" id="datepicker">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">MBL#:</label>
                           <div class="col-xs-3">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                           <div class="col-xs-6">
                              <input type="text" class="form-control" name="fullName" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-xs-3 control-label">Remarks:</label>
                           <div class="col-xs-9">
                              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="address-tab">
                     <div class="form-group">
                        <label class="col-xs-3 control-label">Address</label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="address" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-3 control-label">City</label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="city" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-3 control-label">Country</label>
                        <div class="col-xs-5">
                           <select class="form-control" name="country">
                              <option value="">Select a country</option>
                              <option value="FR">France</option>
                              <option value="DE">Germany</option>
                              <option value="IT">Italy</option>
                              <option value="JP">Japan</option>
                              <option value="RU">Russian</option>
                              <option value="US">United State</option>
                              <option value="GB">United Kingdom</option>
                              <option value="other">Other</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="info-tab">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="col-sm-1">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Truck#</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                           <div class="col-sm-1">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Truck Type:</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                           <div class="col-sm-1">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Driver:</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">.</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Driver Phone:</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                           <div class="col-sm-1">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">.</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                           <div class="col-sm-2">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Vendor:</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="box box-primary">
                           <div class="box-header with-border">
                              <h3 class="box-title">1. Pickup Information</h3>
                           </div>
                           <div class="box-body">
                             <div class="form-group">
                                <label class="col-xs-3 control-label">Plan:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                                <label class="col-xs-3 control-label">Suffering:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-3 control-label">In Whse:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                                <label class="col-xs-3 control-label">Out Whse:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-3 control-label">Pickup:</label>
                                <div class="col-xs-9">
                                <select class="form-control select2" style="width: 100%;">
                                 <option selected="selected">Alabama</option>
                                 <option>Alaska</option>
                                 <option>California</option>
                                 <option>Delaware</option>
                                 <option>Tennessee</option>
                                 <option>Texas</option>
                                 <option>Washington</option>
                              </select>
                                </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-xs-3 control-label">Place:</label>
                                 <div class="col-xs-9">
                                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                 </div>
                               </div>
                               <div class="form-group">
                                  <label class="col-xs-3 control-label">Remarks:</label>
                                  <div class="col-xs-9">
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                  </div>
                                </div>
                           </div>
                           <!-- /.box-body -->
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="box box-primary">
                           <div class="box-header with-border">
                              <h3 class="box-title">1. Pickup Information</h3>
                           </div>
                           <div class="box-body">
                             <div class="form-group">
                                <label class="col-xs-3 control-label">Plan:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                                <label class="col-xs-3 control-label">Suffering:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-3 control-label">In Whse:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                                <label class="col-xs-3 control-label">Out Whse:</label>
                                <div class="col-xs-3">
                                  <div class="input-group date">
                                     <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="text" class="form-control pull-right" id="datepicker">
                                  </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-3 control-label">Pickup:</label>
                                <div class="col-xs-9">
                                <select class="form-control select2" style="width: 100%;">
                                 <option selected="selected">Alabama</option>
                                 <option>Alaska</option>
                                 <option>California</option>
                                 <option>Delaware</option>
                                 <option>Tennessee</option>
                                 <option>Texas</option>
                                 <option>Washington</option>
                              </select>
                                </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-xs-3 control-label">Place:</label>
                                 <div class="col-xs-9">
                                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                 </div>
                               </div>
                               <div class="form-group">
                                  <label class="col-xs-3 control-label">Remarks:</label>
                                  <div class="col-xs-9">
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                  </div>
                                </div>
                           </div>
                           <!-- /.box-body -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group" style="margin-top: 15px;">
                  <div class="col-xs-5 col-xs-offset-3">
                     <button type="submit" class="btn btn-default"></button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('scripts')
@endsection
