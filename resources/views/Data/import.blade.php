@extends("Layouts.base")
@section("title")
Import Data
@endsection()
@section('stylesheet')
    @parent
    <link rel="stylesheet" href="{{asset("vendors/bootstrap-fileinput/css/fileinput.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/formelements.css")}}"/>
    <link rel="stylesheet" href="{{asset("vendors/datatables/css/dataTables.bootstrap.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/custom_css/datatables_custom.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/app.css")}}"/>
@endsection()
@section('page_title')
    <h3>New/
        <small>Data Import</small>
    </h3>
@endsection
@section('content')
<section>
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="new-task"></i> New Import
                    </h3>
                    <span class="pull-right hidden-xs">
                        <i class="fa fa-fw ti-angle-up clickable"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">
                                        Import Title
                                    </label>
                                    <input type="text" class="form-control" id="import_title" name="import_title">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">
                                        Import description
                                    </label>
                                    <textarea rows="4" class="form-control resize_vertical" placeholder="Basic" name="import_desc" id="import_desc"></textarea>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-10">
                                    <button type="button" class="btn btn-success btn-modify" id="save_import_btn">Save</button>
                                    <button type="button" class="btn btn-danger btn-modify">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
                <div class="panel ">
                    <input type="hidden" id="importId">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="new-task"></i> Upload File
                        </h3>
                        <span class="pull-right hidden-xs">
                        <i class="fa fa-fw clickable panel-collapsed ti-angle-down" id="uploadStep"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body" style="display: none;">
                        <div class="row">
                            <div class="col-sm-8">
                                <label class="control-label">
                                    Select File
                                </label>
                                <input id="input-41" type="file" class="file1" name="file_data1[]">
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="new-task"></i> Columns Configuration
                    </h3>
                    <span class="pull-right hidden-xs">
                        <i class="fa fa-fw clickable panel-collapsed ti-angle-down"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                                <table class="table table-striped table-bordered" id="columns_list">
                                    <thead>
                                    <tr>
                                        <th>Column Name</th>
                                        <th>Column Type</th>
                                        <th>Excluded</th>
                                        <th>Controles</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                        </div>


                    </div>
                    <!-- end of without progress bar  -->
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="new-task"></i> Import Preview
                    </h3>
                    <span class="pull-right hidden-xs">
                        <i class="fa fa-fw clickable panel-collapsed ti-angle-down"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered" id="preview_list">
                                <thead>
                                <tr>
                                    <th>Column Name</th>
                                    <th>Column Type</th>
                                    <th>Excluded</th>
                                    <th>Controles</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <!-- end of without progress bar  -->
                </div>
            </div>
        </div>

    </div>
</section>
@endsection()
@section('javascript')
  @parent
  <script type="text/javascript" src="{{asset('vendors/bootstrap-fileinput/js/fileinput.min.js')}}" ></script>
  <script type="text/javascript" src="{{asset('vendors/datatables/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/custom_js/datatables_custom.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/import.js')}}"></script>
@endsection()