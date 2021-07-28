@extends('admin.admin_master')
@section('admin')

@section('title')
Product List
@endsection

  

    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.cs')}}">
    


 
        <div class="main-menu-content">
 <!-- Add rows table -->
                <section id="add-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product Manage</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">New rows can be added to a DataTable very easily using the ( row.add() ) API method. Simply call the API function with the data that is to be used for the new row (be it an array or object). Multiple rows can be added using the ( rows.add() ) method (note the plural). Data can be likewise be updated with the ( row().data() and row().remove() methods. )
                                        </p>
                                        <a href="{{route('product.store')}}" id="addRow" class="btn btn-success mb-2"><i class="feather icon-plus"></i>&nbsp; Add new Product</a>
                                        <div class="table-responsive">
                                            <table class="table add-rows">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Product image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>ALAA</th>
                                                        <th>Product Img</th>
                                                        <th>
  <a href="{{route('product.edit')}}" class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="{{route('product.delete')}}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>

  

                                                        </th>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                      <th>Product Name</th>
                                                        <th>Product image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                 </div>
                <!--/ Add rows table -->




    <!-- BEGIN Vendor JS-->
  <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/ui/data-list-view.js')}}"></script>


@endsection