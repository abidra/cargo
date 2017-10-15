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
              <li class="active"><a href="#info-tab" data-toggle="tab">General <i class="fa"></i></a></li>
              <li><a href="#address-tab" data-toggle="tab">Volume Information <i class="fa"></i></a></li>
              <li class="active"><a href="#info-tab" data-toggle="tab">Container Information <i class="fa"></i></a></li>
              <li><a href="#address-tab" data-toggle="tab">Pickup and Delivery Information <i class="fa"></i></a></li>
          </ul>
          <form id="accountForm" method="post" class="form-horizontal">
              <div class="tab-content">
                  <div class="tab-pane active" id="info-tab">
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
                          <label class="col-xs-6 control-label">Group of Commodity:</label>
                          <div class="col-xs-6">
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
              </div>

              <div class="form-group" style="margin-top: 15px;">
                  <div class="col-xs-5 col-xs-offset-3">
                      <button type="submit" class="btn btn-default">Validate</button>
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
