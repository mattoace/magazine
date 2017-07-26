homenewsApp.controller("articlesController", function ($scope) {
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
                    },pageSize: 5
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

});