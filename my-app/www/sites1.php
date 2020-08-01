<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <!-- <meta http-equiv="Content-Security-Policy"
        content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" /> -->


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="dist/css/dropdown.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <title>Telco</title>
    <style>
        .logout {
            text-align: right;
        }

        .per_task {
            display: list-item;
            margin-left: 10px;
        }

        .l {
            position: absolute;
            top: 25%;
            left: 35px;
            margin-left: 10px;
            transform: translate(-25%);
            top: 15px;
            width: 100px;
        }

        #upload_battery_styling {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #div_upload_photo_styling {
            position: relative;
        }

        .edit_sub_content_style {
            width: 80%;
            margin-left: 10%;
        }

        .input_image {
            margin: 0;
            margin-top: 4px;
            margin-bottom: 4px;
        }

        .flex_add_site_buttons {
            display: flex;

        }

        .choosefile_style {
            display: flex;
            margin-left: 4px;
        }

        .import_excel_file_text {
            padding: 6px;
        }

        .site_grid_btn {
            display: grid;
            grid-template-columns: auto auto auto auto;
            width: fit-content;
        }

        .site_btn {
            padding: 4px;
        }

        @media only screen and (max-width: 898px) {

            .flex_add_site_buttons {
                display: block;
            }

            .choosefile_style {
                display: block;
                margin: 0;
                margin-top: 4px;
            }

            .btn-import {
                margin-top: 4px;
            }



        }

        @media only screen and (max-width: 767px) {

            .flex_add_site_buttons {
                display: block;
            }

            .choosefile_style {
                display: block;
                margin: 0;
                margin-top: 4px;
            }

            .btn-import {
                margin-top: 4px;
            }

            .site_grid_btn {
                grid-template-columns: auto;
            }

        }
    </style>

</head>


<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header" style="position:relative;">
            <b class="l" style="color:#0981b5;">YOLO-TELCO</b>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">


        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                    </li>
                    <li>
                        <a href="admin_users_view.html"><i class="fa fa-users fa-fw"></i> Employees Details</a>
                    </li>
                    <li>
                        <a href="force_logout.html" class="force_logout"><i class="fa fa-user fa-fw"></i> Logged-in
                            Employees</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-globe fa-fw"></i>Sites</a>
                    </li>
                    <li>
                        <a href="site_task_status.html"><i class="fa fa-tasks fa-fw"></i> Manage Tasks</a>
                    </li>

                    <li>
                        <a href="task.html"><i class="fa fa-list fa-fw"></i> Manage Team</a>
                    </li>


                    <li>
                        <a href="admin_map_view.html"><i class="fa fa-map-marker fa-fw"></i> Map</a>
                    </li>


                    <li>
                        <a href="invoice.html"><i class="fa fa-money fa-fw"></i> Invoice</a>
                    </li>

                    <li>
                        <a href="#" id="logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Site Details</h2>
            </div>
            <!-- /.col-lg-12 -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="flex_add_site_buttons">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_site_detailes_modal">Add New Site</button>
                            <form method="post" id="import_form" enctype="multipart/form-data">
                                <div class="choosefile_style">
                                    <span class="import_excel_file_text">Import Excel File &nbsp;</span>
                                    <input type='file' name='file' id='file' class='btn btn-info' required accept='.xls, .xlsx' size="60">
                                    <button type="submit" name="import" class="btn btn-info btn-import">Import</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-sites">
                            <thead>
                                <tr>
                                    <th>Site ID</th>
                                    <th>Site Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->





<div class="modal fade" id="add_site_detailes_modal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Add Site</h5>
            </div>
            <div class="modal-body">
                <form id="add_site_form">
                    <table class="table table-bordered">

                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="add_site_name" id="add_site_name" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>ATTUID</td>
                            <td><input type="text" name="add_attuid" id="add_attuid" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>Email Address</td>
                            <td><input type="text" name="add_email_address" id="add_email_address" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>Group Mailbox/Email Addresses</td>
                            <td><input type="text" name="add_group_mailbox" id="add_group_mailbox" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>Region</td>
                            <td><input type="text" name="add_region1" id="add_region1" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>Corporate EH&S</td>
                            <td><input type="text" name="add_corporate" id="add_corporate" class="form-control"></td>
                        </tr>

                    </table>

                    <h4>Facility/Site Information</h4>

                    <table class="table table-bordered">

                        <tr>
                            <td>Region</td>
                            <td><input type="text" name="add_region2" id="add_region2" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Market</td>
                            <td><input type="text" name="add_market" id="add_market" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Site ID & Name</td>
                            <td><input type="text" name="add_site_id_and_name" id="add_site_id_and_name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>USID</td>
                            <td><input type="text" name="add_usid" id="add_usid" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>FA Location Code</td>
                            <td><input type="text" name="add_fa_location_code" id="add_fa_location_code" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Oracle Project Tracking Number</td>
                            <td><input type="text" name="add_oracle_project_tracking_number" id="add_oracle_project_tracking_number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>PACE Project Tracking Number</td>
                            <td><input type="text" name="add_pace_project_tracking_number" id="add_pace_project_tracking_number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>AT&T Construction Manager</td>
                            <td><input type="text" name="add_at_and_t_construction_manager" id="add_at_and_t_construction_manager" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Street Address</td>
                            <td><input type="text" name="add_street_address" id="add_street_address" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" name="add_city" id="add_city" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>County</td>
                            <td><input type="text" name="add_country" id="add_country" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><input type="text" name="add_state" id="add_state" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Zip Code</td>
                            <td><input type="text" name="add_zip_code" id="add_zip_code" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Site Type</td>
                            <td><input type="text" name="add_site_type" id="add_site_type" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Site Located On</td>
                            <td><input type="text" name="add_site_located_on" id="add_site_located_on" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Project Type</td>
                            <td><input type="text" name="add_project_type" id="add_project_type" class="form-control">
                            </td>
                        </tr>

                    </table>
                    <span>Hazardous Material Changes reported on this form: Please Check all that apply</span>
                    <table class="table table-bordered">
                        <tr>
                            <td><span>Battery </span><input type="checkbox" value="Battery" id="Battery"></td>
                            <td><span>Tank </span><input type="checkbox" value="Tank" id="Tank"></td>
                            <td><span>Generator </span><input type="checkbox" value="Generator"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span>Start Up Battery </span><input type="checkbox" value="Start Up Battery"></td>
                            <td><span>Cylinder </span><input type="checkbox" value="Cylinder"></td>
                            </td>
                        </tr>
                    </table>
                    <i>Other Hazardous Materials</i>
                    <table class="table table-bordered">
                        <textarea name="add_other_hazardous_materials" id="add_other_hazardous_materials" placeholder="Enter any other comments that might pertain to other hazardous materials changes" style="width:100%;height:100px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                    </table>
                    <h4>Battery Information</h4>
                    <table class="table table-bordered">

                        <tr>
                            <td>Battery manufacturer</td>
                            <td><input type="text" name="add_battery_manufacturer" id="add_battery_manufacturer" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>Battery model</td>
                            <td><input type="text" name="add_battery_model" id="add_battery_model" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>Battery manufacturer date</td>
                            <td><input type="date" name="add_battery_manufacturer_date" id="add_battery_manufacturer_date" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>Added Quantity (Individual batteries/units)</td>
                            <td><input type="text" name="add_added_quantity" id="add_added_quantity" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>Battery Status</td>
                            <td><input type="text" name="add_battery_status" id="add_battery_status" class="form-control"></td>
                        </tr>
                    </table>

                    <span>Location Description (Must include the area, floor, and room as applicable as well as the
                        direction)</span>
                    <table class="table table-bordered">
                        <textarea name="battery_location_discription" id="battery_location_discription" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                    </table>

                    <table class="table table-bordered">
                        <tr>
                            <td>Cabinet Type</td>
                            <td><input type="text" name="add_cabinet_type" id="add_cabinet_type" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Cabinet Number</td>
                            <td><input type="text" name="add_cabinet_number" id="add_cabinet_number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Battery DELIVERY Date</td>
                            <td><input type="date" name="add_battery_delivery_date" id="add_battery_delivery_date" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Battery INSTALLATION Date</td>
                            <td><input type="date" name="add_battery_installation_date" id="add_battery_installation_date" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Vendor Completing Installation</td>
                            <td><input type="text" name="add_battery_vendor_completing_installation" id="add_battery_vendor_completing_installation" class="form-control"></td>
                        </tr>
                    </table>

                    <h5>Removed</h5>
                    <table class="table table-bordered">
                        <tr>
                            <td>Battery Manufacturer</td>
                            <td><input type="text" name="add_removed_battery_manufacturer" id="add_removed_battery_manufacturer" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Battery Model</td>
                            <td><input type="text" name="add_removed_battery_model_battery_info" id="add_removed_battery_model_battery_info" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Battery List Number</td>
                            <td><input type="text" name="add_removed_battery_list_number" id="add_removed_battery_list_number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Battery Manufacturer Date</td>
                            <td><input type="date" name="add_removed_battery_manufacturer_date" id="add_removed_battery_manufacturer_date" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Battery Status</td>
                            <td><input type="text" name="add_remove_battery_status" id="add_remove_battery_status" class="form-control"></td>
                        </tr>
                    </table>

                    <span>Location Description (Must include the area, floor, and room as applicable as well as the
                        direction)</span>
                    <table class="table table-bordered">
                        <textarea name="add_removed_battery_location_discription" id="add_removed_battery_location_discription" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                    </table>

                    <table class="table table-bordered">
                        <table class="table table-bordered">
                            <tr>
                                <td>Cabinet Type</td>
                                <td><input type="text" name="add_removed_cabinet_type" id="add_removed_cabinet_type" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Cabinet Number</td>
                                <td><input type="text" name="add_removed_cabinet_number" id="add_removed_cabinet_number" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Battery REMOVAL Date</td>
                                <td><input type="date" name="add_removed_battery_removal_date" id="add_removed_battery_removal_date" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor Completing Removal</td>
                                <td><input type="text" name="add_removed_vendor_completing_removal" id="add_removed_vendor_completing_removal" class="form-control"></td>
                            </tr>
                        </table>

                        <h5>Existing (not added or removed as part of the project)</h5>
                        <table class="table table-bordered">
                            <tr>
                                <td>Battery manufacturer</td>
                                <td><input type="text" name="add_battery_existing_battery_manufacturer" id="add_battery_existing_battery_manufacturer" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Battery Model</td>
                                <td><input type="text" name="add_battery_existing_battery_model" id="add_battery_existing_battery_model" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Battery List Number</td>
                                <td><input type="text" name="add_battery_existing_battery_list_number" id="add_battery_existing_battery_list_number" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Battery Manufacturer Date</td>
                                <td><input type="date" name="battery_existing_battery_manufacturer_date" id="battery_existing_battery_manufacturer_date" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Existing Quantity (Individual batteries/units)</td>
                                <td><input type="text" name="add_battery_existing_quantity" id="add_battery_existing_quantity" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Battery Status</td>
                                <td><input type="text" name="add_battery_existng_battery_status" id="add_battery_existng_battery_status" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <span>Location Description (Must include the area, floor, and room as applicable as well as the
                            direction)</span>
                        <table class="table table-bordered">
                            <textarea name="add_battery_existing_location_discription" id="add_battery_existing_location_discription" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <table class="table table-bordered">
                            <tr>
                                <td>Cabinet Type</td>
                                <td><input type="text" name="add_battery_existing_cabinet_type" id="add_battery_existing_cabinet_type" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Cabinet Number</td>
                                <td><input type="text" name="add_battery_existing_cabinet_number" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <span>Total number of battery units on-site before installation and/or removal </span>
                        <table class="table table-bordered">
                            <textarea name="add_battery_existing_total_number_of_battery_units_on_site_before_installation" id="add_battery_existing_total_number_of_battery_units_on_site_before_installation" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <span>Total number of battery units on-site after installation and/or removal work</span>
                        <table class="table table-bordered">
                            <textarea name="add_battery_existing_total_number_of_battery_units_on_site_after_installation" id="add_battery_existing_total_number_of_battery_units_on_site_after_installation" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <h4>Battery Information - California Proposition 65 Signage</h4>

                        <span>Is the Proposition 65 sign posted for the presence of lead-acid batteries (California
                            Only)?</span>
                        <table class="table table-bordered">
                            <textarea name="add_battery_existing_is_the_proposition_65_posted_for_the_presence_of_lead_acid" id="add_battery_existing_is_the_proposition_65_posted_for_the_presence_of_lead_acid" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <span>Enter any other comments that might pertain to these batteries or the California
                            Proposition 65 Signage</span>
                        <table class="table table-bordered">
                            <textarea name="add_battery_existing_enter_any_other_comments_that_might_pertain_to_these_batteries" id="add_battery_existing_enter_any_other_comments_that_might_pertain_to_these_batteries" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <h4>Required Battery Photos</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <h4>THE FOLLOWING BATTERY PHOTOS ARE REQUIRED:</h4>
                                </td>
                            </tr>

                            <tr>
                                <td> 1 - Close-up photo(s) clearly showing the battery manufacturer, model, and list
                                    number</td>
                            </tr>

                            <tr>
                                <td> 2 - Photo(s) clearly showing the total number of battery "Units"</td>
                            </tr>

                            <tr>
                                <td> 3 - Photo(s) clearly showing the location of the battery cabinet or rack within the
                                    equipment location as follows:</td>
                            </tr>

                            <tr>
                                <td>FOR INDOOR SITES: Photo(s) showing the location of the battery cabinet/rack for
                                    added and existing batteries in relation to the equipment room/shelter entry/doorway
                                </td>
                            </tr>

                            <tr>
                                <td>FOR OUTDOOR SITES: Photo(s) showing the location of the battery cabinet/rack for
                                    added and existing batteries in relation to the compound entry/gateway and/or the
                                    antenna support structure/tower</td>
                            </tr>

                            <tr>
                                <td> 4 - Photo(s) showing the location of the Proposition 65 sign (California Only)</td>
                            </tr>

                            <tr>
                                <td>
                                    <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE NECESSARY
                                    </h5>
                                </td>
                            </tr>
                        </table>

                        <h4>Battery Photos - Added Batteries</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) of the added batteries including: Battery Manufacture - Model - List Number
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_1" id="add_battery_photo_1"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the total Number of batteries added</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_2" id="add_battery_photo_2"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the location of the battery cabinet or rack within the
                                    equipment/site location</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_3" id="add_battery_photo_3"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <h4>Battery Photos - Removed Batteries</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) of the removed batteries including: Battery Manufacture - Model - List
                                    Number
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_4"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the total number of batteries removed</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_5"></i>
                                    </div>
                                </td>
                            </tr>

                        </table>

                        <h4>Battery Photos - Existing Batteries</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) of existing batteries including: Battery Manufacture - Model - List Number
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_6"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the total number of existing batteries</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_7" id="add_battery_photo_7"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the location of the battery cabinet or rack within the
                                    equipment/site location</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_8" id="add_battery_photo_8"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <h5>Proposition 65 Sign Photos (California Only)</h5>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) clearly showing the proposition 65 sign on the cabinet, shelter door, site
                                    access door, or compound fence
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_9" id="add_battery_photo_9"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the proposition 65 sign for the site in relation to the
                                    entrance </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="add_battery_photo_10" id="add_battery_photo_10"></i>
                                    </div>
                                </td>
                            </tr>

                        </table>

                        <h4>Generator Start-up Battery Information</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Battery manufacturer</td>
                                <td><input type="text" name="add_generator_battery_manufacturer" id="add_generator_battery_manufacturer" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Battery Model</td>
                                <td><input type="text" name="add_generator_battery_model" id="add_generator_battery_model" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Battery List Number</td>
                                <td><input type="text" name="add_generator_battery_list_number" id="add_generator_battery_list_number" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Added Quantity (Individual batteries/units)</td>
                                <td><input type="text" name="add_generator_added_quanitity" id="add_generator_added_quanitity" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Battery Status</td>
                                <td><input type="text" name="add_generator_battery_status" id="add_generator_battery_status" class="form-control"></td>
                            </tr>
                        </table>
                        <span>Is the Proposition 65 sign posted for the presence of lead-acid batteries (California
                            Only)?</span>
                        <table class="table table-bordered">
                            <textarea name="add_generator_is_the_position_65" id="add_generator_is_the_position_65" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <td>Battery DELIVERY Date</td>
                                <td><input type="date" name="add_generator_battery_delivery_date" id="add_generator_battery_delivery_date" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Battery INSTALLATION Date</td>
                                <td><input type="date" name="add_generator_battery_installation_date" id="add_generator_battery_installation_date" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Vendor Completing Installation</td>
                                <td><input type="text" name="add_generator_vendor_completing_installation" id="add_generator_vendor_completing_installation" class="form-control"></td>
                            </tr>
                        </table>
                        <h4>Removed</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Battery manufacturer</td>
                                <td><input type="text" name="add_removed_generator_battery_manufactoruer" id="add_removed_generator_battery_manufactoruer" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Battery model</td>
                                <td><input type="text" name="add_removed_battery_model_generator" id="add_removed_battery_model_generator" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Battery list number</td>
                                <td><input type="text" name="add_removed_generator_battery_list_number" id="add_removed_generator_battery_list_number" class="form-control"></td>
                            </tr>


                            <tr>
                                <td>Removed Quantity (Individual batteries)</td>
                                <td><input type="text" name="add_removed_generator_removed_quantity" id="add_removed_generator_removed_quantity" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Battery Status</td>
                                <td><input type="text" name="add_removed_generator_battery_status" id="add_removed_generator_battery_status" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <span>Location Description (Must include the area, floor, and room as applicable as well as the
                            direction)</span>
                        <table class="table table-bordered">
                            <textarea name="add_removed_generator_location_discription" id="add_removed_generator_location_discription" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <table class="table table-bordered">
                            <tr>
                                <td>Date battery REMOVED from site</td>
                                <td><input type="text" name="add_removed_generator_date_battery_removed_from_site" id="add_removed_generator_date_battery_removed_from_site" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Vendor Completing Removal</td>
                                <td><input type="text" name="add_removed_generator_vendor_completing_removal" id="add_removed_generator_vendor_completing_removal" class="form-control"></td>
                            </tr>
                        </table>

                        <h4>Existing (not added or removed as part of the project)</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Battery manufacturer</td>
                                <td><input type="text" name="add_removed_generator_existing_not_added_or_removed_as_part_of_the_project" id="add_removed_generator_existing_not_added_or_removed_as_part_of_the_project" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Battery model</td>
                                <td><input type="text" name="add_existing_generator_battery_model" id="add_existing_generator_battery_model" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Battery list number</td>
                                <td><input type="text" name="add_existing_generator_battery_list_number" id="add_existing_generator_battery_list_number" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Existing Quantity (Individual batteries)</td>
                                <td><input type="text" name="add_existing_generator_existing_quantity" id="add_existing_generator_existing_quantity" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Battery Status</td>
                                <td><input type="text" name="add_existing_generator_battery_status" id="add_existing_generator_battery_status" class="form-control"></td>
                            </tr>

                        </table>

                        <span>Location Description (Must include the area, floor, and room as applicable as well as the
                            direction)</span>
                        <table class="table table-bordered">
                            <textarea name="add_existing_generator_location_discription" id="add_existing_generator_location_discription" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <i>Battery Comments</i>
                        <table class="table table-bordered">
                            <textarea name="add_existing_generator_battey_comments" id="add_existing_generator_battey_comments" placeholder="Enter any other comments that might pertain to these batteries" style="width:100%;height:100px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <h4>REQUIRED BATTERY PHOTOS </h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <h4>THE FOLLOWING BATTERY PHOTOS ARE REQUIRED:</h4>
                                </td>
                            </tr>

                            <tr>
                                <td> 1 - Close-up photo(s) clearly showing the battery manufacturer, model, and list
                                    number</td>
                            </tr>

                            <tr>
                                <td> 2 - Photo(s) clearly showing the total number of battery "Units"</td>
                            </tr>

                            <tr>
                                <td> 3 - Photo(s) showing the location of the added and existing batteries in relation
                                    to the generator/engine</td>
                            </tr>

                            <tr>
                                <td>
                                    <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE NECESSARY
                                    </h5>
                                </td>
                            </tr>
                        </table>

                        <h4>Generator Start-up Battery Photos - Added Batteries</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) of the batteries including: Battery Manufacture - Model - List Number
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_1" id="generator_battery_photo_1"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the total number of batteries added</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_2" id="generator_battery_photo_2"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the location of added batteries</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_3" id="generator_battery_photo_3"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <h4>Generator Start-up Battery Photos - Removed Batteries</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) of the removed batteries including: Battery Manufacture - Model - List
                                    Number
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_4" id="generator_battery_photo_4"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the total number of batteries removed </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_5" id="generator_battery_photo_5"></i>
                                    </div>
                                </td>
                            </tr>

                        </table>

                        <h4>Generator Start-up Battery Photos - Existing Batteries</h4>
                        <table class="table table-bordered">
                            <tr>
                                <td>Photo(s) of the batteries including: Battery Manufacture - Model - List Number
                                </td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_6" id="generator_battery_photo_6"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the total number of existing batteries</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_7" id="generator_battery_photo_7"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Photo(s) clearly showing the location of existing batteries</td>
                            </tr>

                            <tr>
                                <td style="height:250px;">
                                    <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling"><i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling"><input type="file" name="generator_battery_photo_8" id="generator_battery_photo_8"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <h4>Fuel Tank Information</h4>
                        <h5>90 DAYS PRIOR TO INSTALLATION, MODIFICATION, AND/OR REMOVAL, THE AT&T EH&S TANK TEAM MUST BE
                            NOTIFIED OF THE PROJECT FOR APPLICABLE PERMITTING OR SPILL PREVENTION REQUIREMENTS </h5>
                        <table class="table table-bordered">

                            <tr>
                                <td>Tank Added, Removed, or Existing</td>
                                <td><input type="text" name="fuel_tank_tank_added_removed_or_existing" id="fuel_tank_tank_added_removed_or_existing" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Status</td>
                                <td><input type="text" name="fuel_tank_tank_status" id="fuel_tank_tank_status" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Type</td>
                                <td><input type="text" name="fuel_tank_tank_type" id="fuel_tank_tank_type" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Portable or Fixed</td>
                                <td><input type="text" name="fuel_tank_portable_or_fixed" id="fuel_tank_portable_or_fixed" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Type of Fuel </td>
                                <td><input type="text" name="fuel_tank_type_of_fuel" id="fuel_tank_type_of_fuel" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Total Storage Capacity of Tank (gallons)</td>
                                <td><input type="text" name="fuel_tank_total_storage_capacity" id="fuel_tank_total_storage_capacity" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Tank Description</td>
                                <td><input type="text" name="fuel_tank_description" id="fuel_tank_description" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Manufacturer</td>
                                <td><input type="text" name="fuel_tank_manufacturer" id="fuel_tank_manufacturer" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Serial Number</td>
                                <td><input type="text" name="fuel_tank_serial_number" id="fuel_tank_serial_number" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Manufacture Date MM/DD/YYYY</td>
                                <td><input type="date" name="fuel_tank_manufactorer_date" id="fuel_tank_manufactorer_date" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Delivery Date MM/DD/YYYY</td>
                                <td><input type="date" name="fuel_tank_delivery_date" id="fuel_tank_delivery_date" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Install Date MM/DD/YYYY</td>
                                <td><input type="date" name="fuel_tank_install_date" id="fuel_tank_install_date" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Vendor Completing Installation</td>
                                <td><input type="text" name="fuel_tank_vendor_completing_installation" id="fuel_tank_vendor_completing_installation" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Usage</td>
                                <td><input type="text" name="fuel_tank_usage" id="fuel_tank_usage" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Tank Usage Status</td>
                                <td><input type="text" name="fuel_tank_usage_status" id="fuel_tank_usage_status" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Is the tank indoor or outdoor?</td>
                                <td><input type="text" name="fuel_tank_is_the_tank_indoor_or_outdoor" class="form-control"></td>
                            </tr>

                        </table>

                        <span>Location Description (Must include the area, floor, and room as applicable as well as the
                            direction)</span>
                        <table class="table table-bordered">
                            <textarea name="fuel_tank_location_description" id="fuel_tank_location_description" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                        </table>

                        <table class="table table-bordered">

                            <tr>
                                <td>Tank Structure</td>
                                <td><input type="text" name="fuel_tank_structure" id="fuel_tank_structure" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Exterior Wall Structure</td>
                                <td><input type="text" name="fue_tank_exterior_wall_structure" id="fue_tank_exterior_wall_structure" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Tank Ownership</td>
                                <td><input type="text" name="fuel_tank_ownership" id="fuel_tank_ownership" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Owner Name</td>
                                <td><input type="text" name="fuel_tank_owner_name" id="fuel_tank_owner_name" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>First Fuel Date </td>
                                <td><input type="date" name="fuel_tank_first_fuel_date" id="fuel_tank_first_fuel_date" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Tank Removal Date MM/DD/YYYY</td>
                                <td><input type="date" name="fuel_tank_removal_date" id="fuel_tank_removal_date" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Vendor Completing Removal</td>
                                <td><input type="text" name="fuel_tank_completing_removal" id="fuel_tank_completing_removal" class="form-control"></td>
                            </tr>
                        </table>

                        <h5>Tank Installation Projects</h5>
                        <table class="table table-bordered">

                            <tr>
                                <td style="font-size:12px;">Was approval received from EH&S through a Notice to Proceed
                                    (NTP) issued by Trinity
                                    Consultants or EBI Consulting prior to delivery/installation?</td>
                                </td>
                                <td>
                                    Yes <input type="checkbox" name="tank_installation_was_approved" id="tank_installation_was_approved" value="Yes">&nbsp;
                                    No <input type="checkbox" name="tank_installation_was_approved" id="tank_installation_was_approved" value="No">
                                </td>
                            </tr>
                            <tr>
                                <td>Date of NTP Approval</td>
                                <td><input type="date" name="tank_installation_date_of_ntp_approval" class="form-control"></td>
                            </tr>

                            <tr>
                                <td style="font-size:12px;">Is the tank permitted?
                                    (NTP AND PERMITS MUST BE UPLOADED TO CCN/FILENET UNDER CONTENT/DOCUMENT ID EH309)
                                </td>
                                <td>Yes <input type="checkbox" name="tank_istallation_is_tank_permitted" id="tank_istallation_is_tank_permitted" value="Yes">&nbsp;
                                    No <input type="checkbox" name="tank_istallation_is_tank_permitted" id="tank_istallation_is_tank_permitted" value="No"></td>
                            </tr>

                            <tr>
                                <td>Permit Type</td>
                                <td><input type="text" name="tank_installation_permit_type" id="tank_installation_permit_type" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Permitting Agency (If Applicable)</td>
                                <td><input type="text" name="tank_installation_permitting_agency" id="tank_installation_permitting_agency" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>Permit Number (If Applicable)</td>
                                <td><input type="text" name="tank_installation_permit_number" id="tank_installation_permit_number" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Permit Expiration (Month/Year)</td>
                                <td><input type="text" name="tank_installation_permit_expiration" id="tank_installation_permit_expiration" class="form-control"></td>
                            </tr>
                        </table>
                </form>

                <h4>Does the tank have the following?</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Spill Kit (Required by local jurisdiction or for spill prevention plan)</td>
                        <td><input type="text" name="tank_spill_kit" id="tank_spill_kit" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Spill Bucket</td>
                        <td>Yes <input type="checkbox" name="tank_spill_bucket" id="tank_spill_bucket" value="Yes">&nbsp;
                            No <input type="checkbox" name="tank_spill_bucket" id="tank_spill_bucket" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>Secondary Containment</td>
                        <td><input type="text" name="tank_secondary_containment" id="tank_secondary_containment" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tank Leak Detection</td>
                        <td>Yes <input type="checkbox" name="tank_leak_detection" id="tank_leak_detection" value="Yes">&nbsp;
                            No <input type="checkbox" name="tank_leak_detection" id="tank_leak_detection" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>Overfill Protection</td>
                        <td><input type="text" name="tank_overfill_protection" id="tank_overfill_protection" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Cathodic Protection Present</td>
                        <td><input type="text" name="tank_cathodic_protection_present" id="tank_cathodic_protection_present" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Safety Post/Traffic Bollard Protection</td>
                        <td>Yes <input type="checkbox" name="tank_safety_post" id="tank_safety_post" value="Yes">&nbsp;
                            No <input type="checkbox" name="tank_safety_post" id="tank_safety_post" value="No"></td>
                    </tr>
                    <tr>
                        <td>Proper labeling/marking for contents (i.e. Diesel, Propane, etc.)</td>
                        <td>Yes <input type="checkbox" name="tank_proper_labeling" id="tank_proper_labeling" value="Yes">&nbsp;
                            No <input type="checkbox" name="tank_proper_labeling" id="tank_proper_labeling" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>Tertiary Containment</td>
                        <td>Yes <input type="checkbox" name="tank_tertiary_containment" id="tank_tertiary_containment" value="Yes">&nbsp;
                            No <input type="checkbox" name="tank_tertiary_containment" id="tank_tertiary_containment" value="No"></td>
                    </tr>
                </table>
                <b><i>Tank Comments</i></b>
                <table class="table table-bordered">
                    <textarea name="tank_comments" id="tank_comments" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" placeholder="Enter any other comments that might pertain to these tanks"></textarea>
                </table>

                <h4>REQUIRED TANK PHOTOS </h4>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <h4>THE FOLLOWING BATTERY PHOTOS ARE REQUIRED:</h4>
                        </td>
                    </tr>

                    <tr>
                        <td> 1 - Close-up photo(s) clearly showing the plate(s) on the tank (information plate on the
                            tank indicates manufacturer, model, serial number, capacity/size, manufacture date, etc.)
                        </td>
                    </tr>

                    <tr>
                        <td> 2 - Photo(s) clearly showing the label(s) on the tank, identifying the contents, fire
                            hazard, and AT&T EH&S Hotline</td>
                    </tr>

                    <tr>
                        <td> 3 - Photo(s) clearly showing the location of the tank within the compound entry/gateway
                            and/or the antenna support structure/tower (If separate from the generator) </td>
                    </tr>

                    <tr>
                        <td>4 - Photo(s) clearly showing the tank piping, venting, and spill kit with location, if
                            applicable</td>
                    </tr>

                    <tr>
                        <td>
                            <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE NECESSARY
                            </h5>
                        </td>
                    </tr>
                </table>

                <h5>Tank Photos</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Close up photo(s) of the tank information plate(s) including: Manufacturer - Model - Serial
                            Number - Capacity/Size - Manufacture Date - Etc.
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="tank_photo_1" id="tank_photo_1">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) of the tank labels and signage</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="tank_photo_2" id="tank_photo_2">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <table class=" table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the location of the tank
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="tank_photo_3" id="tank_photo_3">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) of the tank piping </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="tank_photo_4" id="tank_photo_4">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) of the tank venting
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="tank_photo_5" id="tank_photo_5">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the spill kit and location</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="tank_photo_6" id="tank_photo_6">
                                </i>
                            </div>
                        </td>
                    </tr>

                </table>


                <h5>Generator and Engine Information</h5>
                <h4>90 DAYS PRIOR TO INSTALLATION, MODIFICATION, AND/OR REMOVAL, THE AT&T EH&S AIR TEAM MUST BE NOTIFIED
                    OF THE PROJECT FOR PERMITTING APPLICABLE REQUIREMENTS </h4>
                <table class="table table-bordered">

                    <tr>
                        <td>Generator Added, Removed, or Existing</td>
                        <td><input type="text" name="generator_and_engine_generator_added_removed_or_existing" id="generator_and_engine_generator_added_removed_or_existing" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Generator Status</td>
                        <td><input type="text" name="generator_and_engine_generator_status" id="generator_and_engine_generator_status" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Generator Type</td>
                        <td><input type="text" name="generator_and_engine_generator_type" id="generator_and_engine_generator_type" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Generator Manufacturer</td>
                        <td><input type="text" name="generator_and_engine_generator_manufacturer" id="generator_and_engine_generator_manufacturer" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Generator Model</td>
                        <td><input type="text" name="generator_and_engine_generator_model" id="generator_and_engine_generator_model" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Generator Serial Number</td>
                        <td><input type="text" name="generator_and_engine_generator_serial_number" id="generator_and_engine_generator_serial_number" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Output Rating Value (in kW)</td>
                        <td><input type="text" name="generator_and_engine_output_rating_value_1st" id="generator_and_engine_output_rating_value_1st" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Portable or Fixed</td>
                        <td><input type="text" name="generator_and_engine_portable_or_fixed" id="generator_and_engine_portable_or_fixed" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Output Rating Value (in kW)</td>
                        <td><input type="text" name="generator_and_engine_output_rating_value_2nd" id="generator_and_engine_output_rating_value_2nd" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Generator Delivery Date (MM/DD/YYYY)</td>
                        <td><input type="date" name="generator_and_engine_generator_delivery_date" id="generator_and_engine_generator_delivery_date" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Generator Installation Date (MM/DD/YYYY)</td>
                        <td><input type="date" name="generator_and_engine_generator_installation_date" id="generator_and_engine_generator_installation_date" class="form-control"></td>
                    </tr>

                    <tr>
                        ``
                        <td><input type="text" name="generator_and_engine_vendor_completing_installation" id="generator_and_engine_vendor_completing_installation" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Generator Removal Date (MM/DD/YYYY)</td>
                        <td><input type="date" name="generator_and_engine_generator_removal_date" id="generator_and_engine_generator_removal_date" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Vendor Completing Removal</td>
                        <td><input type="text" name="generator_and_engine_vendor_completing_removal" id="generator_and_engine_vendor_completing_removal" class="form-control"></td>
                    </tr>

                </table>

                <h4>Cell Site Power and Generator Operation</h4>

                <table class="table table-bordered">
                    <tr>
                        <td>Is Generator Prime power?</td>
                        <td>
                            Yes <input type="checkbox" name="cell_site_is_generator_prime_power" id="cell_site_is_generator_prime_power" value="Yes">
                            No <input type="checkbox" name="cell_site_is_generator_prime_power" id="cell_site_is_generator_prime_power" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>Is commercial power used at site?</td>
                        <td>
                            Yes <input type="checkbox" name="cell_site_is_commercial_power_used_at_site" id="cell_site_is_commercial_power_used_at_site">
                            No <input type="checkbox" name="cell_site_is_commercial_power_used_at_site" id="cell_site_is_commercial_power_used_at_site">
                        </td>
                    </tr>
                    <tr>
                        <td>Non-Resettable Hour Meter?</td>
                        <td>
                            Yes <input type="checkbox" name="cell_site_none_resettable_hour_meter" id="cell_site_none_resettable_hour_meter" value="Yes"> No
                            <input type="checkbox" name="cell_site_none_resettable_hour_meter" id="cell_site_none_resettable_hour_meter" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>Current Hour Meter Reading?</td>
                        <td><input type="text" name="cell_site_current_hour_meter_reader" id="cell_site_current_hour_meter_reader" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date of Hour Meter Reading?</td>
                        <td><input type="date" name="cell_site_date_of_hour_meter_reader" id="cell_site_date_of_hour_meter_reader" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date of first start-up/first fire</td>
                        <td><input type="date" name="cell_site_date_of_first_start_up" id="cell_site_date_of_first_start_up" class="form-control"></td>
                    </tr>
                </table>
                <span>Is there a generator on site used for emergency power not belonging to AT&T Mobility?</span>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            Yes <input type="checkbox" name="cell_site_is_there_generator_on_site_used_for_emergency_power" id="cell_site_is_there_generator_on_site_used_for_emergency_power" value="Yes">&nbsp;
                            No <input type="checkbox" name="cell_site_is_there_generator_on_site_used_for_emergency_power" id="cell_site_is_there_generator_on_site_used_for_emergency_power" value="No">
                        </td>
                    </tr>
                </table>

                <b><i>Generator Comments</i></b>
                <table class="table table-bordered">
                    <textarea name="generator_comments" id="generator_comments" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" placeholder="Enter any other comments that might pertain to these generators"></textarea>
                </table>

                <h4>Engine Information</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Engine Manufacturer</td>
                        <td><input type="text" name="engine_manufacturer" id="engine_manufacturer" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Model</td>
                        <td><input type="text" name="engine_model" id="engine_model" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Serial Number</td>
                        <td><input type="text" name="engine_serial_number" id="engine_serial_number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Type</td>
                        <td><input type="text" name="engine_type" id="engine_type" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Type of Fuel</td>
                        <td><input type="text" name="engine_type_of_fuel" id="engine_type_of_fuel" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Manufacture Date (MM/DD/YYYY)</td>
                        <td><input type="date" name="engine_manufacturer_date" id="engine_manufacturer_date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Install Date (MM/DD/YYYY)</td>
                        <td><input type="date" name="engine_install_date" id="engine_install_date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Number of Cylinders</td>
                        <td><input type="text" name="engine_number_of_cylinders" id="engine_number_of_cylinders" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Max Engine kilowatts (kW)</td>
                        <td><input type="text" name="engine_max_engine_kilowatts" id="engine_max_engine_kilowatts" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Rated Horsepower (HP)</td>
                        <td><input type="text" name="engine_rated_horsepower" id="engine_rated_horsepower" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Engine Max Brake Horsepower (BHP)</td>
                        <td><input type="text" name="engine_max_brake_horsepower" id="engine_max_brake_horsepower" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Displacement (Liters) or (Cubic Inches)</td>
                        <td><input type="text" name="engine_displacement_liters_or_cubic_inches" id="engine_displacement_liters_or_cubic_inches" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>EPA Family Number</td>
                        <td><input type="text" name="engine_epa_family_number" id="engine_epa_family_number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Diameter of stack outlet (inches)</td>
                        <td><input type="text" name="engine_diameter_of_stack_outlet" id="engine_diameter_of_stack_outlet" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Exhaust stack height from ground (feet)</td>
                        <td><input type="text" name="engine_exhaust_stack_height_from_ground" id="engine_exhaust_stack_height_from_ground" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Direction of exhaust outlet (Horizontal or Vertical)</td>
                        <td><input type="text" name="engine_direction_of_exhaust_outlet" id="engine_direction_of_exhaust_outlet" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>End of stack (Open or Capped)</td>
                        <td>Open <input type="checkbox" name="end_of_stack_open_or_capped" id="end_of_stack_open_or_capped" value="Open"> Capped <input type="checkbox" name="end_of_stack_open_or_capped" id="end_of_stack_open_or_capped" value="Capped">`
                        </td>
                    </tr>
                </table>
                <h4>Generator Installation Projects</h4>
                <span>Was approval received from EH&S through a Notice to Proceed (NTP) issued by Trinity
                    Consultants or EBI Consulting prior to delivery/installation?</span>
                <table class="table table-bordered">
                    <tr>
                        <td>Yes <input type="checkbox" name="general_installation_was_approval_received" value="Yes">&nbsp; No <input type="checkbox" name="general_installation_was_approval_received" id="general_installation_was_approval_received" value="No"></td>
                    </tr>
                </table>


                <table class="table table-bordered">
                    <tr>
                        <td>Date of NTP Approval</td>
                        <td><input type="date" name="general_installation_date_of_ntp_approval" id="general_installation_date_of_ntp_approval" class="form-control">
                        </td>
                    </tr>
                </table>

                <span>Is the generator/engine permitted?
                    (NTP AND PERMITS MUST BE UPLOADED TO CCN/FILENET UNDER CONTENT/DOCUMENT ID EH309)</span>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            Yes <input type="checkbox" name="generator_installation_is_the_generator_or_engine_permitted" id="generator_installation_is_the_generator_or_engine_permitted" value="Yes">&nbsp;
                            No
                            <input type="checkbox" name="generator_installation_is_the_generator_or_engine_permitted" id="generator_installation_is_the_generator_or_engine_permitted" value="No"></td>
                    </tr>
                </table>

                <table class="table table-bordered">

                    <tr>
                        <td>Permit Type</td>
                        <td><input type="text" name="generator_installation_permit_type" id="generator_installation_permit_type" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Permitting Agency (If Applicable)</td>
                        <td><input type="text" name="generator_installation_permitting_agency" id="generator_installation_permitting_agency" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Permit Number (If Applicable)</td>
                        <td><input type="text" name="generator_installation_permit_number" id="generator_installation_permit_number" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Engine Install Date (MM/DD/YYYY)</td>
                        <td><input type="date" name="generator_installation_engine_install_date" id="generator_installation_engine_install_date" class="form-control">
                        </td>
                    </tr>

                </table>

                <h4>Generator Distance (California Only)</h4>
                <table class="table bordered">
                    <tr>
                        <td>Distance from engine to nearest fence line (feet)</td>
                        <td><input type="text" class="form-control" name="general_distance_distance_from_engine_to_nearest_fence_line">
                        </td>
                    </tr>
                    <tr>
                        <td>Distance from engine to nearest residence (feet)</td>
                        <td><input type="text" class="form-control" name="general_distance_distance_from_engine_to_nearest_residence" id="general_distance_distance_from_engine_to_nearest_residence">
                        </td>
                    </tr>
                    <tr>
                        <td>Distance from engine to nearest business (feet)</td>
                        <td><input type="text" class="form-control" name="general_distance_from_engine_to_nearest_business" id="general_distance_from_engine_to_nearest_business">
                        </td>
                    </tr>
                    <tr>
                        <td>Is engine located within 500 feet of a school, daycare, hospital, or care
                            facility?</td>
                        <td>Yes <input type="text" name="generator_distance_is_engine_located_within_500_feet" id="generator_distance_is_engine_located_within_500_feet" value="Yes">
                            No <input type="checkbox" name="generator_distance_is_engine_located_within_500_feet" id="generator_distance_is_engine_located_within_500_feet" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>If yes, name of facility</td>
                        <td><input type="text" class="form-control" name="generator_distance_if_yes_name_of_facility" id="generator_distance_if_yes_name_of_facility">
                        </td>
                    </tr>
                    <tr>
                        <td>If yes, distance</td>
                        <td><input type="text" class="form-control" name="generator_distance_if_yes_distance" id="generator_distance_if_yes_distance"></td>
                    </tr>
                </table>

                <h4>Where applicable, does the engine have the following?</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            Direct Injection
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_direct_injection" id="where_applicable_direct_injection" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_direct_injection" id="where_applicable_direct_injection" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Diesel Particulate Filter
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_diesel_particulate_filter" id="where_applicable_diesel_particulate_filter" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_diesel_particulate_filter" id="where_applicable_diesel_particulate_filter" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Injection Time Retard
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_injection_time_retard" id="where_applicable_injection_time_retard" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_injection_time_retard" id="where_applicable_injection_time_retard" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Other Emission Controls
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_other_emission_controls" id="where_applicable_other_emission_controls" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_other_emission_controls" id="where_applicable_other_emission_controls" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Turbo Charger
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_turbo_charger" id="where_applicable_turbo_charger" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_turbo_charger" id="where_applicable_turbo_charger" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Diesel oxidation catalyst
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_diesel_oxidation_catalyst" id="where_applicable_diesel_oxidation_catalyst" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_diesel_oxidation_catalyst" id="where_applicable_diesel_oxidation_catalyst" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Catalytic Converter
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_catalytic_converter" id="where_applicable_catalytic_converter" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_catalytic_converter" id="where_applicable_catalytic_converter" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Intercooler
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_intercooler" id="where_applicable_intercooler" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_intercooler" id="where_applicable_intercooler" value="No">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Aftercooler
                        </td>
                        <td>
                            Yes <input type="checkbox" name="where_applicable_after_cooler" id="where_applicable_after_cooler" value="Yes">&nbsp;
                            No <input type="checkbox" name="where_applicable_after_cooler" id="where_applicable_after_cooler" value="No">
                        </td>
                    </tr>
                </table>

                <b><i>Engine Comments</i></b>
                <table class="table table-bordered">
                    <textarea name="engine_commets" id="engine_commets" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" placeholder="Enter any other comments that might pertain to these engines"></textarea>
                </table>

                <h5>REQUIRED GENERATOR AND ENGINE PHOTOS</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <h4>THE FOLLOWING GENERATOR AND ENGINE PHOTOS ARE REQUIRED: </h4>
                        </td>
                    </tr>

                    <tr>
                        <td> 1 - Close-up Photo(s) clearly showing the plates(s) on (1) the Generator and
                            (2) Engine
                            (Information plate on both the Generator and Engine lists EPA Information,
                            manufacturer,
                            model, serial number, manufacture date, etc.)
                        </td>
                    </tr>

                    <tr>
                        <td> 2 - Photo(s) clearly showing the location of the generator within the compound
                            entry/gateway</td>
                    </tr>

                    <tr>
                        <td> 3 - Photo(s) clearly showing the left and right side of the engine compartment
                        </td>
                    </tr>

                    <tr>
                        <td> 4 - Photo(s) clearly showing the exhaust stack and hour meter with the current
                            reading</td>
                    </tr>

                    <tr>
                        <td> 5 - Photo or generator/engine specification document clearly showing the engine
                            Horsepower
                            (HP) and Brake Horsepower (BHP)</td>
                    </tr>

                    <tr>
                        <td>
                            <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE
                                NECESSARY
                            </h5>
                        </td>
                    </tr>
                </table>

                <h5>Generator and Engine Photos</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Close up photo(s) of the generator information plate(s) including: Manufacturer
                            - Model -
                            Serial Number - Size - Manufacture Date - Etc.
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="generator_and_engine_photo_1" name="generator_and_engine_photo_1">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Close up photo(s) of the engine information plate(s) including: Manufacturer -
                            Model -
                            Serial Number - Size - Manufacture Date - Etc.</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="generator_and_engine_photo_2" id="generator_and_engine_photo_2">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the location of the generator
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="generator_and_engine_photo_3" id="generator_and_engine_photo_3">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) of the left and right side of the engine compartment</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="generator_and_engine_photo_4" id="generator_and_engine_photo_4">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) of the exhaust stack
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="generator_and_engine_photo_5" id="generator_and_engine_photo_5">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo of the hour meter with the current reading</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="generator_and_engine_photo_6" id="generator_and_engine_photo_6">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <h5>Generator/engine specification document to identify the engine Horsepower (HP) and Brake
                    Horsepower
                    (BHP)</h5>

                <h4>Cylinder Information</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Cylinder Status</td>
                        <td><input type="text" name="cylinder_status" id="cylinder_status" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Cylinder Contents</td>
                        <td><input type="text" name="cylinder_contents" id="cylinder_contents" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Number of Cylinder(s) Installed</td>
                        <td><input type="text" name="cylinder_number_of_cylinders_installsed" id="cylinder_number_of_cylinders_installsed" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Total Cylinder Volume (ft3 or lbs.)</td>
                        <td><input type="text" name="cylinder_total_cylinder_volume" id="cylinder_total_cylinder_volume" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Largest Cylinder Volume (ft3 or lbs.)</td>
                        <td><input type="text" name="cylinder_largest_cylinder_volume" id="cylinder_largest_cylinder_volume" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date Cylinder(s) DELIVERED</td>
                        <td><input type="date" name="cylinder_date_cylinders_delivered" id="cylinder_date_cylinders_delivered" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date Cylinder(s) INSTALLED</td>
                        <td><input type="date" name="cylinder_date_cylinders_installed" id="cylinder_date_cylinders_installed" class="form-control"></td>
                    </tr>
                </table>
                <span>Location of Cylinders (Must include the area, floor, and room as applicable as well as the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" name="location_cylinders" id="location_cylinders"></textarea>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Vendor Completing Installation</td>
                        <td><input type="text" name="vendor_completing_installation" id="vendor_completing_installation" class="form-control"></td>
                    </tr>
                </table>
                <h4>Removed</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Cylinder Status</td>
                        <td><input type="text" name="cylinder_removed_cylinder_status" id="cylinder_removed_cylinder_status" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Cylinder Contents</td>
                        <td><input type="text" name="cylinder_removed_cylinder_contents" id="cylinder_removed_cylinder_contents" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Total Cylinder Volume (ft3 or lbs.)</td>
                        <td><input type="text" name="cylinder_removed_total_cylinder_volume" id="cylinder_removed_total_cylinder_volume" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Largest Cylinder Volume (ft3 or lbs.)</td>
                        <td><input type="text" name="cylinder_removed_largest_cylinder_volume" id="cylinder_removed_largest_cylinder_volume" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Removed Quantity (Individual cylinders/units)</td>
                        <td><input type="text" name="cylinder_removed_quantity" id="cylinder_removed_quantity" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date Cylinder(s) REMOVED</td>
                        <td><input type="date" name="cylinder_removed_date_cylinders_removed" id="cylinder_removed_date_cylinders_removed" class="form-control"></td>
                    </tr>
                </table>
                <span>Location of Cylinders (Must include the area, floor, and room as applicable as well as
                    the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea name="cylinder_removed_location_of_cylinders" id="cylinder_removed_location_of_cylinders" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Vendor Completing Removal</td>
                        <td><input type="text" name="cylinder_removed_vendor_completing_removal" id="cylinder_removed_vendor_completing_removal" class="form-control">
                        </td>
                    </tr>
                </table>

                <h4>Existing (not added or removed as part of the project)</h4>
                <table>
                    <tr>
                        <td>Cylinder Status</td>
                        <td><input type="text" name="cylinder_existing_cylinder_status" id="cylinder_existing_cylinder_status" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Cylinder Contents</td>
                        <td><input type="text" name="cylinder_existing_cylinder_contents" id="cylinder_existing_cylinder_contents" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Total Cylinder Volume (ft3 or lbs.)</td>
                        <td><input type="text" name="cylinder_existing_total_cylinder_volume" id="cylinder_existing_total_cylinder_volume" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Largest Cylinder Volume (ft3 or lbs.)</td>
                        <td><input type="text" name="cylinder_existing_largest_cylinder_volume" id="cylinder_existing_largest_cylinder_volume" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Existing Quantity (Individual cylinders/units)</td>
                        <td><input type="text" name="cylinder_existing_quantity" id="cylinder_existing_quantity" class="form-control"></td>
                    </tr>
                </table>

                <span>Location of Cylinders (Must include the area, floor, and room as applicable as well as
                    the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea name="cylinder_existing_location_of_cylinder" id="cylinder_existing_location_of_cylinder" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <span>Total number of Cylinder units on-site before installation and/or removal work</span>
                <table class="table table-bordered">
                    <textarea name="cylinder_existing_total_number_of_cylinder_units" id="cylinder_existing_total_number_of_cylinder_units" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <span>Total number of Cylinder units on-site after installation and/or removal work</span>
                <table class="table table-bordered">
                    <textarea name="cylinder_existing_total_number_of_cylinder_units_on_site" id="cylinder_existing_total_number_of_cylinder_units_on_site" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <b><i>Cylinder Comments</i></b>
                <table class="table table-bordered">
                    <textarea name="cylinder_comments" id="cylinder_comments" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" placeholder="Enter any other comments that might pertain to these cylinders:"></textarea>
                </table>

                <h5>REQUIRED CYLINDER PHOTOS </h5>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <h4>THE FOLLOWING CYLINDER PHOTOS ARE REQUIRED: </h4>
                        </td>
                    </tr>

                    <tr>
                        <td> 1 - Close-up photo(s) clearly showing the information label on the cylinder
                            cabinet/rack
                        </td>
                    </tr>

                    <tr>
                        <td> 2 - Photo(s) clearly showing the label stamped on the cylinder</td>
                    </tr>

                    <tr>
                        <td> 3 - Photo(s) clearly showing the number of cylinders and the cylinder location
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE
                                NECESSARY
                            </h5>
                        </td>
                    </tr>
                </table>

                <h5>Cylinder Photos - Added Cylinders</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the information label on the cylinder cabinet/rack
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_1" id="cylinder_photo_1">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the label stamped on the cylinder</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_2" id="cylinder_photo_2">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the number of cylinders and the cylinder location</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_3" id="cylinder_photo_3">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>
                <h5>Cylinder Photos - Removed Cylinders</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the label stamped on the cylinder
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_4" id="cylinder_photo_4">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the number of cylinders removed</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_5" id="cylinder_photo_5">
                                </i>
                            </div>
                        </td>
                    </tr>

                </table>

                <h4>Cylinder Photos - Existing Cylinders</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Close-up photo(s) clearly showing the information label on the cabinet/rack
                        </td>
                    </tr>
                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_6" id="cylinder_photo_6">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the label stamped on the cylinder</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_7" id="cylinder_photo_7">
                                </i>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>Photo(s) clearly showing the number of cylinders and the cylinder location</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="cylinder_photo_8" id="cylinder_photo_8">
                                </i>
                            </div>
                        </td>
                    </tr>

                </table>

                <h4>Fuel Cell Information</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Fuel Cell Status</td>
                        <td><input type="text" name="fuel_cell_status" id="fuel_cell_status" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Fuel Cell Manufacturer</td>
                        <td><input type="text" name="fuel_cell_manufacturer" id="fuel_cell_manufacturer" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Fuel Cell Model</td>
                        <td><input type="text" name="fuel_cell_model" id="fuel_cell_model" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Fuel Cell Cabinet Serial Number</td>
                        <td><input type="text" name="fuel_cell_cabinet_serial_number" id="fuel_cell_cabinet_serial_number" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Date Fuel Cell DELIVERED to site</td>
                        <td><input type="date" name="fuel_cell_date_fuel_cell_delivered_to_site" id="fuel_cell_date_fuel_cell_delivered_to_site" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Date Fuel Cell INSTALLED</td>
                        <td><input type="date" name="fuel_cell_date_fuel_cell_installed" id="fuel_cell_date_fuel_cell_installed" class="form-control"></td>
                    </tr>

                </table>
                <span>Location Description (Must include the area, floor, and room as applicable as well as
                    the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea name="fuel_cell_location_discription" id="fuel_cell_location_discription" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Vendor Completing Installation</td>
                        <td><input type="text" name="fuel_cell_vendor_completing_installation" id="fuel_cell_vendor_completing_installation" class="form-control">
                        </td>
                    </tr>
                </table>

                <h5>Removed</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Fuel Cell Status</td>
                        <td><input type="text" name="fuel_cell_removed_fuel_cell_status" id="fuel_cell_removed_fuel_cell_status" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Fuel Cell Manufacturer</td>
                        <td><input type="text" name="fuel_cell_removed__manufacturer" id="fuel_cell_removed__manufacturer" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Fuel Cell Model</td>
                        <td><input type="text" name="fuel_cell_removed_fuel_cell_model" id="fuel_cell_removed_fuel_cell_model" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Fuel Cell Cabinet Serial Number</td>
                        <td><input type="text" name="fuel_cell_removed_fuel_cell_cabinet_serial_number" id="fuel_cell_removed_fuel_cell_cabinet_serial_number" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Date Fuel Cell REMOVED from site</td>
                        <td><input type="date" name="fuel_cell_removed_date_fuel_cell_removed_from_site" id="fuel_cell_removed_date_fuel_cell_removed_from_site" class="form-control"></td>
                    </tr>

                </table>
                <span>Location Description (Must include the area, floor, and room as applicable as well as
                    the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea name="fuel_cell_removed_location_description" id="fuel_cell_removed_location_description" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <td>Vendor Completing Removal</td>
                        <td><input type="type" name="fuel_cell_removed_vendor_completing_removal" id="fuel_cell_removed_vendor_completing_removal" class="form-control">
                        </td>
                    </tr>
                </table>

                <h4>Existing (not added or removed as part of the project)</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Fuel Cell Status</td>
                        <td><input type="text" name="fuel_cell_existing_fuel_cell_status" id="fuel_cell_existing_fuel_cell_status" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Fuel Cell Manufacturer</td>
                        <td><input type="text" name="fuel_cell_existing_fuel_cell_manufacturer" id="fuel_cell_existing_fuel_cell_manufacturer" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Fuel Cell model</td>
                        <td><input type="text" name="fuel_cell_existing_fuel_cell_model" id="fuel_cell_existing_fuel_cell_model" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Fuel Cell Cabinet serial number</td>
                        <td><input type="text" name="fuel_cell_existing_fuel_cell_cabinet_serial_number" id="fuel_cell_existing_fuel_cell_cabinet_serial_number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Gas Cylinder Cabinet serial number</td>
                        <td><input type="text" name="fuel_cell_existing_gas_cylinder_cabinet_serial_number" id="fuel_cell_existing_gas_cylinder_cabinet_serial_number" class="form-control"></td>
                    </tr>
                </table>

                <span>Location Description (Must include the area, floor, and room as applicable as well as
                    the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea name="fuel_cell_existing_location_description" id="fuel_cell_existing_location_description" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>

                <b><i>Fuel Cell Comments</i></b>
                <table class="table table-bordered">
                    <textarea name="fuel_cell_comments" id="fuel_cell_comments" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" placeholder="Enter any other comments that might pertain to these fuel cells"></textarea>
                </table>

                <h5>REQUIRED FUEL CELL PHOTOS </h5>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <h4>THE FOLLOWING FUEL CELL PHOTOS ARE REQUIRED: </h4>
                        </td>
                    </tr>

                    <tr>
                        <td> 1- Close-up photo(s) clearly showing the fuel cell label including
                            manufacturer/model
                        </td>
                    </tr>

                    <tr>
                        <td> 2 - Photo(s) clearly showing the fuel cell cabinet location</td>
                    </tr>

                    <tr>
                        <td> 3 - Photo(s) clearly showing the fuel cell cabinet and chassis serial numbers
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE
                                NECESSARY
                            </h5>
                        </td>
                    </tr>
                </table>

                <h5>Fuel Cell Photos - Added Fuel Cells</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the fuel cell label including manufacturer/model
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_1" id="fueLcell_photo_1">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the fuel cell cabinet location</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_2" id="fueLcell_photo_2">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the fuel cell cabinet and chassis serial numbers</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_3" id="fueLcell_photo_3">
                                </i>
                            </div>
                        </td>
                    </tr>

                </table>

                <h5>Fuel Cell Photos - Removed Fuel Cells</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the removed fuel cell label including
                            manufacturer/model
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_4" id="fueLcell_photo_4">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the removed fuel cell cabinet and chassis serial
                            numbers</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_5" id="fueLcell_photo_5">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <h5>Fuel Cell Photos - Existing Fuel Cells</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the existing fuel cell label including
                            manufacturer/model
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_6" id="fueLcell_photo_6">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the existing fuel cell cabinet location</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_7" id="fueLcell_photo_7">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the existing fuel cell cabinet and chassis serial
                            numbers</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="fueLcell_photo_8" id="fueLcell_photo_8">
                                </i>
                            </div>
                        </td>
                    </tr>

                </table>

                <h4>Other Hazardous Materials Information</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Other HazMat Added, Removed, or Existing</td>
                        <td><input type="text" name="other_hazarous_other_hazmat_added_removed_or_existing" id="other_hazarous_other_hazmat_added_removed_or_existing" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Hazardous Material</td>
                        <td><input type="text" name="other_hazarous_hazardous_material" id="other_hazarous_hazardous_material" class="form-control"></td>
                    </tr>
                </table>
                <span>Location Description (Must include the area, floor, and room as applicable as well as
                    the
                    direction)</span>
                <table class="table table-bordered">
                    <textarea name="other_hazarous_location_description" id="other_hazarous_location_description" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)"></textarea>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td>Container Type</td>
                        <td><input name="other_hazarous_container_type" id="other_hazarous_container_type" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Container Size</td>
                        <td><input type="text" name="other_hazarous_container_size" id="other_hazarous_container_size" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Inventory Delivery Date</td>
                        <td><input type="date" name="other_hazarous_inventory_delivery" id="other_hazarous_inventory_delivery" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Inventory Installation Date</td>
                        <td><input type="date" name="other_hazarous_inventory_installation_date" id="other_hazarous_inventory_installation_date" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Inventory Removal Date</td>
                        <td><input type="date" name="other_hazarous_inventory_removal_date" id="other_hazarous_inventory_removal_date" class="form-control"></td>
                    </tr>
                </table>

                <h4>Refrigerants</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Does this site have Freon?</td>
                        <td>
                            Yes <input type="checkbox" name="refrigerants_does_this_site_have_freon" id="refrigerants_does_this_site_have_freon" value="Yes">
                            No <input type="checkbox" name="refrigerants_does_this_site_have_freon" id="refrigerants_does_this_site_have_freon" value="No"></td>
                    </tr>

                    <tr>
                        <td>If so, how much total Freon is at the location (lbs.)</td>
                        <td><input type="text" name="refrigerants_if_so_how_much_total_freon_is_at_the_location" id="refrigerants_if_so_how_much_total_freon_is_at_the_location" class="form-control"></td>
                    </tr>
                </table>
                <b><i>Other HazMat Comments</i></b>
                <table class="table table-bordered">
                    <textarea name="refrigerants_other_hazmat_comments" id="refrigerants_other_hazmat_comments" style="width:100%;height:50px;border: 1px solid rgba(0,0,0,0.1)" placeholder="Describe other on-site HazMat modifications"></textarea>
                </table>


                <h5>REQUIRED HAZARDOUS MATERIALS PHOTOS
                    (One set required for each type) </h5>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <h4>THE FOLLOWING HAZARDOUS MATERIALS PHOTOS ARE REQUIRED: </h4>
                        </td>
                    </tr>

                    <tr>
                        <td> 1 - Close-up photo(s) clearly showing the information label on the hazardous
                            material
                            container
                        </td>
                    </tr>

                    <tr>
                        <td> 2 - Photo(s) clearly showing the number of hazardous materials containers and
                            the container
                            locations</td>
                    </tr>

                    <tr>
                        <td>
                            <h5>ADD PHOTOS IN THE SECTION BELOW AND VERTICALLY EXPAND THE CELLS, WHERE
                                NECESSARY
                            </h5>
                        </td>
                    </tr>
                </table>

                <h5>Hazardous Materials Photos - Existing Containers</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Photo(s) clearly showing the information label on the hazardous material
                            container
                        </td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="other_hazardous_material_photo_1" id="other_hazardous_material_photo_1">
                                </i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Photo(s) clearly showing the number of hazardous materials containers and the
                            container
                            locations</td>
                    </tr>

                    <tr>
                        <td style="height:250px;">
                            <div style="width:100%;height:100%;background-color:#E8F0FE;" id="div_upload_photo_styling">
                                <i class="fa fa-plus" aria-hidden="true" id="upload_battery_styling">
                                    <input type="file" name="other_hazardous_material_photo_2" id="other_hazardous_material_photo_2">
                                </i>
                            </div>
                        </td>
                    </tr>
                </table>

                <h4>Certification (Required for all inventory changes)</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Name (Please Print)</td>
                        <td><input type="text" name="certification_name" id="certification_name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Signature</td>
                        <td>
                            <div class="pad">
                                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="certification_signature"></canvas>
                                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear_certification_signature" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>AT&T Project Manager</td>
                        <td><input type="text" name="certification_at_and_t_manager" id="certification_at_and_t_manager" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Company/Vendor Responsible for Work</td>
                        <td><input type="text" name="certification_company_vendor" id="certification_company_vendor" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Telephone Number and/or Email </td>
                        <td><input type="text" name="certification_telephone_number_and_or_email" id="certification_telephone_number_and_or_email" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><input type="text" name="certification_date" id="certification_date" class="form-control"></td>
                    </tr>
                </table>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="add_site" class="btn btn-primary">Save Site</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- edit site static content -->
<div class="modal fade" id="edit_site_detailes_modal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg role document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Edit Site</h5>
            </div>
            <div class="modal-body">
                <form action="POST" id="edit_site_form">

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="update_site" class="btn btn-primary">Update Site</button>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="site_details_view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header" style=" background-color: #0981b5;border-radius: 6px 6px 0 0;color:#fff;">
                <button type="button" data-dismiss="modal" class="close" data-number="2" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff;">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Site Details</h4>
            </div>
            <div class="modal-body">
                <div class="pull-right">
                    <button class="btn btn-success btn-sm" name="export" id="export"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Expert Table to Excel</button>
                </div><br /><br />
                <div class="site_detailes_wrapper">
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="export" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Expert Table to Excel</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="report_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style=" background-color: #0981b5;border-radius: 6px 6px 0 0;color:#fff;">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close close_edit_site_modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="modal_header"></h5>
            </div>
            <div class="modal-body">

                <div style="margin-bottom: 10px;" class="input-group custom-search-form">
                    <div><input style="width:50%;" onfocus="(this.type='date')" onfocusout="(this.type='text')" id="search_site" class="form-control report_date_from" value="" placeholder="From"><input style="width:50%;" onfocus="(this.type='date')" onfocusout="(this.type='text')" id="search_site" class="form-control report_date_to" value="" placeholder="To"></div>
                    <span class="input-group-btn">
                        <button class="btn btn-default" id="report_date_btn" type="button" site_id="">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>

                <div class="appender_reports"></div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default pull-left close_edit_site_modal">Close</button>
                <div id="download_link_pdf" style="margin-bottom:4px;"></div>
                <button type="button" id="print" class="btn btn-info" site_id="" from="" to="">Print</button>
                <button type="button" id="sendToEmail" class="btn btn-info" site_id="" data-site_id="" from="" to="" data-toggle="modal" data-target="#email_modal">Send To Email</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade sm" id="email_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style=" background-color: #0981b5;border-radius: 6px 6px 0 0;color:#fff;">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close close_edit_site_modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="modal_header">Please Input Email</h5>
            </div>
            <div class="modal-body">
                <input style="margin-top:4px;" type="email" class="form-control" id="email" name="email" email>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default pull-left close_edit_site_modal">Close</button>
                <button type="button" id="confirm_email" class="btn btn-info" site_id="">Confirm</button>
            </div>
        </div>
    </div>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/sweetalert/sweetalert2.all.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
<script src="dist/js/jquery.table2excel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script>
    function today() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!

        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = "0" + mm;
        }
        today = yyyy + '-' + mm + '-' + dd;
        return today;
    }

    $(document).ready(function() {

        var submit = document.querySelector("[data-action=submit]");
        var clear = document.querySelector("[data-action=clear]");

        var certification_signature_canvas = document.getElementById('certification_signature');

        var certification_signature = new SignaturePad(certification_signature_canvas);

        $(document).on("click", "#clear_certification_signature", function(event) {
            var canvas = document.getElementById('certification_signature');
            var certification_signature = new SignaturePad(certification_signature_canvas);
            certification_signature.clear();
        });

        $(document).on('click', '#add_site', function(e) {
            e.preventDefault()

        })


        $(document).on('click', '#report_date_btn', function(e) {
            e.preventDefault();
            var site_id = $(this).attr('site_id');
            var from = $('.report_date_from').val();
            var to = $('.report_date_to').val();


            if (from == '' || to == '') {
                swal(
                    'Warning',
                    'Please input correct date.',
                    'warning'
                );
                return;
            }

            if (from > to) {
                swal(
                    'Warning',
                    'Please input Valid date.',
                    'warning'
                );
                return;
            }

            $('#print').attr('from', from);
            $('#print').attr('to', to);
            $('#sendToEmail').attr('from', from);
            $('#sendToEmail').attr('to', to);
            $.ajax({
                url: "http://34.74.113.124/telco/authentication/json_report",
                method: "POST",
                data: {
                    site_id: site_id,
                    from: from,
                    to: to
                },
                success: function(data) {
                    if (data == '[]') {
                        $('.appender_reports').html('There No Reports On This Date Range.');
                    } else {
                        var reports = `<table style="background-color:#D4D5D6;border-radius:6px;border:none;" class="table table-bordered" cellspacing="10">
                            <tbody>`;
                        var parsed = $.parseJSON(data);
                        $.each(parsed, function(i, jsondata) {
                            reports += `<tr>
                                            <td>From: `;
                            if (jsondata.user_id != 0) {
                                reports += `${jsondata.first_name} ${jsondata.last_name}`;
                            } else {
                                reports += `${jsondata.team_name}`;
                            }
                            reports += `    </td>
                                            <td>${jsondata.text_report}</td>
                                            <td>${jsondata.report_date}</td> 
                                        </tr>`;
                        });
                        reports += `</tbody>
                        </table>`;
                        $('.appender_reports').html(reports);
                    }
                }
            });
        });

        var site_table = $('#dataTables-sites').DataTable({
            "ajax": "http://34.74.113.124/telco/authentication/display_site_name_in_table",
            "columns": [{
                    'data': "site_id"
                },
                {
                    'data': "site_name"
                },
                {
                    'data': null,
                    'render': function(data, type, row) {
                        return `<div class="site_grid_btn">
                                    <div class="site_btn"><button style="color:#fff;background-color:#5BC0DE;border:none;border-radius:4px;font-size:11px;" data-toggle="modal" class="" data-target="#site_details_view" data-site_id="${row.site_id}">View Detailes</button></div>
                                    <div class="site_btn"><button style="color:#fff;background-color:#F0AD4E;border:none;border-radius:4px;outline:none;" data-site_id="${row.site_id}" data-site_name="${row.site_name}" data-toggle="modal" data-target="#report_modal">Reports</button></div>
                                    <div class="site_btn"><button style="color:#fff;background-color:#337AB7;border:none;border-radius:4px;outline:none;" class="edit_site " data-site_id="${row.site_id}" data-site_name="${row.site_name}" data-toggle="modal" data-target="#edit_site_detailes_modal">Edit</button></div>
                                    <div class="site_btn"><button style="color:#fff;background-color:#771919;border:none;border-radius:4px;outline:none;" class="delete_site " site_id="${row.site_id}">Delete</button></div>
                                </div>`;
                        //<div class="site_btn"><a data-toggle="modal" class="btn btn-success" data-target="#site_add_task_modal" style="background-color:#0C7554;border:#0C7554" data-site_name="${row.site_name}" data-site_id="${row.site_id}">Manage Task</a></div>
                    }
                }
            ],
            responsive: true,
            "order": [
                [0, "desc"]
            ],
            retrieve: true
        });

        //==================================================================================================================================================================================================================================================


        $('#site_details_view').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var site_id = button.data('site_id'); // Extract info from data-* attributes

            $.ajax({
                url: "http://34.74.113.124/telco/authentication/get_site_detailes_by_id",
                method: 'POST',
                data: {
                    site_id: site_id
                },
                success: function(data) {

                    var site_detailes = "";
                    var parsed = $.parseJSON(data);
                    $.each(parsed, function(i, jsondata) {
                        site_detailes += `
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-sites">
                                            <tbody>
                                            </tbody>
                                    </table>
                        `;
                    });
                    $('.site_detailes_wrapper').html(site_detailes)
                }
            });
            $.ajax({

                url: "http://34.74.113.124/telco/authentication/site_exported_detailes",
                method: 'POST',
                data: {
                    site_id: site_id
                },
                success: function(data) {
                    $("#excel-table").html(data);

                }
            });


        });
        // ============================Export Excel==================================================//
        $(document).on('click', '#export', function(e) {
            $('#site_details_view').modal('hide');
            $("#export_table_to_excel").table2excel({

                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "Yolo-Telco Sites" + new Date().toISOString().replace(/[\-\:\.]/g, ""),
                fileext: ".xlsx"
            });


        });

        //=========Eit_modal _sites==============================================================================================================================================================================================
        $('#edit_site_detailes_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var site_id = button.data('site_id');
            var site_name = button.data('site_name');

            $('#edit_site_id').val(site_id);
            $('#edit_site_name').val(site_name);

            $.ajax({
                url: "http://34.74.113.124/telco/authentication/get_detailes_of_selected_sites",
                method: 'POST',
                data: {
                    site_id: site_id
                },
                success: function(data) {
                    var site_detailes = "";
                    var parsed = $.parseJSON(data);
                    $.each(parsed, function(i, jsondata) {
                        site_detailes += ``;
                    });
                    $('.site_detailes_edit').html(site_detailes)
                    // alert(data);
                }
            });

            $(document).on('click', '#update_site', function(e) {
                e.preventDefault();
                var site = $('#edit_site_form').serialize();
                if ($('#edit_site_name').val() == '') {
                    swal(
                        'Warning!',
                        'Reciever site name is required!',
                        'warning'
                    );
                    return;
                }

                $.ajax({
                    url: "http://34.74.113.124/telco/authentication/update_selected_sites",
                    method: 'POST',
                    data: site,
                    success: function(data) {
                        swal(
                            'Success!',
                            'Sites and Site Details Updated Successfully!',
                            'success'
                        ).then(function() {
                            $('#edit_site_form')[0].reset();
                            $('#edit_site_detailes_modal').modal('hide');
                            site_table.ajax.reload();
                        });
                    }
                });

            });

        });
        //=========Delete_modal _sites==================================================================================================================================================================================================================================================

        $(document).on('click', '.delete_site', function(e) {
            e.preventDefault();
            var site_id = $(this).attr('site_id');


            var val0 = $(this).val();

            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.value) {
                    $.post('http://34.74.113.124/telco/authentication/delete_selected_sites', {
                        site_id: site_id
                    }, function(data) {

                        swal(
                            'Deleted!',
                            'Invoice has been deleted.',
                            'success'
                        ).then(function(data) {
                            site_table.ajax.reload();
                        });
                    });
                }
            });
        });

        $('#import_form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "http://34.74.113.124/telco/excel_import/import",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    swal(
                        'Success!!',
                        'Successfully Imported!',
                        'success'
                    ).then(function() {
                        $('#file').val('');
                        site_table.ajax.reload();
                    });

                }
            });
        });

        $('#site_add_task_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var site_id = button.data('site_id'); // Extract info from data-* attributes 
            var site_name = button.data('site_name');
            $('.append_site_name').html(site_name);
            $('#site_id').val(site_id);
            get_site_task(site_id);
        });


        $('#report_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var site_id = button.data('site_id');
            var site_name = button.data('site_name');
            $('#print').attr('site_id', site_id);
            $('#sendToEmail').attr('site_id', site_id);
            $('#confirm').attr('site_id', site_id);
            $('#report_date_btn').attr('site_id', site_id);
            $('#modal_header').html(`Site Reports for ${site_name}`);
            $.ajax({
                url: "http://34.74.113.124/telco/authentication/json_report",
                method: "POST",
                data: {
                    site_id: site_id
                },
                success: function(data) {
                    if (data == '[]') {
                        $('.appender_reports').html('There No Reports On This Site Yet.');
                    } else {
                        var reports = `<table style="background-color:#D4D5D6;border-radius:6px;border:none;" class="table table-bordered" cellspacing="10">
                            <tbody>`;
                        var parsed = $.parseJSON(data);
                        $.each(parsed, function(i, jsondata) {
                            reports += `<tr>
                                            <td>From: `;
                            if (jsondata.user_id != 0) {
                                reports += `${jsondata.first_name} ${jsondata.last_name}`;
                            } else {
                                reports += `${jsondata.team_name}`;
                            }
                            reports += `    </td>
                                            <td>${jsondata.text_report}</td>
                                            <td>${jsondata.report_date}</td> 
                                        </tr>`;
                        });
                        reports += `</tbody>
                        </table>`;
                        $('.appender_reports').html(reports);
                    }
                }
            });
        });
        $('#report_modal').on('hide.bs.modal', function(event) {
            $('.report_date_from').val('');
            $('.report_date_to').val('');
            $('#print').attr('from', '');
            $('#print').attr('to', '');
            $('#sendToEmail').attr('from', '');
            $('#sendToEmail').attr('to', '');
        });
        $('#print').click(function(e) {
            e.preventDefault();
            var data = $('.appender_reports').html();
            var site_id = $(this).attr('site_id');
            var from = $(this).attr('from');
            var to = $(this).attr('to');
            // alert(site_id);
            if (from !== "" && to !== "") {
                var url = `http://34.74.113.124/telco/authentication/print_pdf/${site_id}/${from}/${to}`;
                // alert(url);
            } else {
                var url = `http://34.74.113.124/telco/authentication/print_pdf/${site_id}`;
                // alert(url);
            }
            swal(
                'Your Pdf is ready',
                'copy the link and paste in your browser \n http://34.74.113.124/telco/uploads/reports.pdf',
                'success'

            );
            //$('#download_link_pdf').html('<a class="btn btn-success" href="http://34.74.113.124/telco/uploads/reports.pdf" download> Download PDF </a>');

            window.open(url, '_blank');
        });

        $('#confirm_email').click(function(e) {
            var button = $(e.relatedTarget);
            e.preventDefault();
            var data = $('.appender_reports').html();
            var site_id = $('#sendToEmail').attr('site_id');
            var from = $('#sendToEmail').attr('from');
            var to = $('#sendToEmail').attr('to');
            var email = $('#email').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (email == "") {
                swal('Error!!', 'Please input email!', 'error');
                return;
            }
            if (!filter.test(email)) {
                swal('Warning', 'Please provide a valid email address', 'warning');
                return;
            }
            // alert(email);
            if (from !== "" && to !== "") {
                var url = `${from}/${to}`;
            } else {
                var url = ``;
            }
            $.ajax({
                url: `http://34.74.113.124/telco/authentication/email_reports/${site_id}/${url}`,
                method: "POST",
                data: {
                    email: email
                },
                success: function(data) {
                    if (data == 'ok') {
                        swal('Success', 'Successfully Sent', 'success');
                    } else {

                    }
                }
            });
        });

        $(document).on('click', '#logout', function() {
            var video_id = $(this).attr('id');
            swal({
                title: 'Are you sure?',
                text: "You want logout?",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Logout'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "index.html";
                }
            });
        });
    });
</script>
<!-- Custom Theme JavaScript -->