<!DOCTYPE html>  <!-- http://demos.telerik.com/kendo-ui/grid/angular -->
<html>
<head>
    <base href="/">
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>          
        <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/kendoui/kendo.common-office365.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/kendoui/kendo.office365.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/kendoui/kendo.office365.mobile.min.css') }}">
        <script type="text/javascript" src="{{ asset('/plugins/kendoui/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/plugins/kendoui/angular.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/plugins/kendoui/kendo.all.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/plugins/kendoui/pako_deflate.min.js') }}"></script>
            <script type="x/kendo-template" id="page-template">
              <div class="page-template">
                <div class="header">
                  <div style="float: right">Page #: pageNum # of #: totalPages #</div>
                  <br>
                </div>
                <div class="watermark">Core Ict Consultancy</div>
                <div class="footer">
                  Page #: pageNum # of #: totalPages #
                </div>
              </div>
            </script>


  <script id="template" type="text/x-kendo-template">
          <label class="search-label" for="searchBox">Search Grid:</label>
          <input type="search" id="searchBox" class="k-textbox" style="width: 250px"/>
          <input type="button" id="btnSearch" class="k-button" value="Search"/>
          <input type="button" id="btnReset" class="k-button" value="Reset"/>
    </script>

        <title>Data Manipulation</title>
</head>
<body>
<div id="example" ng-app="homenewsApp">
    <div ng-controller="GridController">
        <kendo-grid options="articleGridOptions">
            <div k-detail-template>
                <kendo-tabstrip>
                <ul>
                    <li class="k-state-active">Article Body</li>
                    <li>Category</li>
                </ul>
                <div>
                    <div kendo-grid k-options="detailGridOptions(dataItem)"></div>
                </div>
                <div>
                    <ul class="contact-info-form">
                        <li><label>Category:</label> <input class="k-textbox" ng-model="dataItem.categories_id" /></li>                       
                        <li><label>Article Body:</label> @{{dataItem.body}}</li>s                      
                    </ul>
                </div>
                </kendo-tabstrip>
            </div> 
        </kendo-grid>


    </div>
</div>
<style>
  .contact-info-form {
    list-style-type: none;
    margin: 30px 0;
    padding: 0;
  }

  .contact-info-form li {
    margin: 10px 0;
  }

  .contact-info-form label {
    display: inline-block;
    width: 100px;
    text-align: right;
    font-weight: bold;
  }
   /*
            Use the DejaVu Sans font for display and embedding in the PDF file.
            The standard PDF fonts have no support for Unicode characters.
    */
    .k-grid {
        font-family: "DejaVu Sans", "Arial", sans-serif;
    }
</style>

    <style>
        /* Page Template for the exported PDF */
        .page-template {
          font-family: "DejaVu Sans", "Arial", sans-serif;
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
        }
        .page-template .header {
          position: absolute;
          top: 30px;
          left: 30px;
          right: 30px;
          border-bottom: 1px solid #888;
          color: #888;
        }
        .page-template .footer {
          position: absolute;
          bottom: 30px;
          left: 30px;
          right: 30px;
          border-top: 1px solid #888;
          text-align: center;
          color: #888;
        }
        .page-template .watermark {
          font-weight: bold;
          font-size: 400%;
          text-align: center;
          margin-top: 30%;
          color: #aaaaaa;
          opacity: 0.1;
          transform: rotate(-35deg) scale(1.7, 1.5);
        }

        /* Content styling */
        .customer-photo {
          display: inline-block;
          width: 32px;
          height: 32px;
          border-radius: 50%;
          background-size: 32px 35px;
          background-position: center center;
          vertical-align: middle;
          line-height: 32px;
          box-shadow: inset 0 0 1px #999, inset 0 0 10px rgba(0,0,0,.2);
          margin-left: 5px;
        }
        kendo-pdf-document .customer-photo {
          border: 1px solid #dedede;
        }
        .customer-name {
          display: inline-block;
          vertical-align: middle;
          line-height: 32px;
          padding-left: 3px;
        }
    </style>

<script>

        kendo.pdf.defineFont({
            "DejaVu Sans"             : "{{ asset('/plugins/kendoui/fonts/DejaVu/DejaVuSans.ttf')}}",
            "DejaVu Sans|Bold"        : "{{ asset('/plugins/kendoui/fonts/DejaVu/DejaVuSans-Bold.ttf')}}",
            "DejaVu Sans|Bold|Italic" : "{{ asset('/plugins/kendoui/fonts/DejaVu/DejaVuSans-Oblique.ttf')}}",
            "DejaVu Sans|Italic"      : "{{ asset('/plugins/kendoui/fonts/DejaVu/DejaVuSans-Oblique.ttf')}}",
            "WebComponentsIcons"      : "{{ asset('/plugins/kendoui/fonts/glyphs/WebComponentsIcons.ttf')}}"
        });

   angular.module("homenewsApp", [ "kendo.directives" ])
        .controller("GridController", function($scope){ 
        myGrid =  $scope.articleGridOptions = {
                    dataSource: { 
                    offlineStorage: "offline-kendo-newsapp",                  
                    transport: {
                                read:  {
                                    url:"items",
                                    dataType: "json"
                                },
                                update: {
                                    url: "asave",
                                    dataType: "jsonp"
                                },
                                destroy: {
                                    url: "adestroy",
                                    dataType: "jsonp"
                                },
                                create: {
                                    url: "acreate"                                  
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                    },
                    batch: true,
                    serverFiltering: true,                 
                    schema: {
                        data: "data",
                        total: "total",
                            model: {
                                    id: "id",
                                    fields: {
                                        id: { editable: false, nullable: true },
                                        article: { validation: { required: true } },
                                        updated_at: { editable: false }                                     
                                    }
                                }
                    },pageSize: 10
                },

                serverPaging: true,
                filterable: true,
                navigatable: true,
                sortable: true,
                pageable: true,
                pageable: {
                    refresh: true,
                    pageSizes: true,
                    buttonCount: 5
                },
                dataBound: function() {
                    this.expandRow(this.tbody.find("tr.k-master-row").first());
                },
                toolbar: ["create","pdf" , {template: kendo.template($("#template").html()) }],
                pdf: {
                    allPages: true,
                    avoidLinks: true,
                    paperSize: "A4",
                    margin: { top: "2cm", left: "1cm", right: "1cm", bottom: "1cm" },
                    landscape: true,
                    repeatHeaders: true,
                    template: $("#page-template").html(),
                    scale: 0.8
                },
                columns: [
                {
                    field: "id", 
                    title: "No.",
                    width: "100px"
                },
                {
                    field: "article",
                    title: "Article",
                    width: "600px"
                },
                {
                    field: "updated_at",
                    title: "Updated At",
                },
                { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }
                ],
                 editable: "inline"
            };

//

          $scope.detailGridOptions = function(dataItem) { 
                return {
                    dataSource: {                       
                        transport: {
                            read: "items"
                        }, 
                      schema: {
                        data: "data",
                        total: "total"
                       },
                    filter: { field: "id", operator: "eq", value: dataItem.id },
                    pageSize: 1
                    },
                    serverPaging: true,
                    scrollable: false,
                    sortable: true,
                    pageable: true,
                    columns: [                   
                    { field: "updated_at", title:"Updated At", width: "110px" },
                    { field: "body", title:"Body" }
                    ]
                };
            };

            /*$scope.detailGridOptions = function(dataItem) {
                return {
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "https://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                        },
                        serverPaging: true,
                        serverSorting: true,
                        serverFiltering: true,
                        pageSize: 5,
                        filter: { field: "EmployeeID", operator: "eq", value: dataItem.EmployeeID }
                    },
                    scrollable: false,
                    sortable: true,
                    pageable: true,
                    columns: [
                    { field: "OrderID", title:"ID", width: "56px" },
                    { field: "ShipCountry", title:"Ship Country", width: "110px" },
                    { field: "ShipAddress", title:"Ship Address" },
                    { field: "ShipName", title: "Ship Name", width: "190px" }
                    ]
                };
            };*/


        });



$(document).ready(function () {
            //change event
           $("#searchBox").keyup(function (obj) {

        

           var ds = myGrid.dataSource;

          // var curr_filters = ds.filters();

          alert(ds.toSource());
          /* ds.filter({
                        logic  : "or",
                        filters: [
                          {
                            field   : "article",
                            operator: "contains",
                            value   : this.value
                          }
                        ]
                      });
*/


           });

    });
</script>


</body>
</html>
