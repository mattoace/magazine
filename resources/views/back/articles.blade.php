
<div ng-controller="articlesController">

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
<div style="float:right;">
  <label class="search-label" for="searchBox" style="margin-top:5px;">Search News Article:</label>
  <input type="search" id="searchBox" ng-enter="filter()" class="k-textbox" style="width: 250px"/>
  <input type="button" id="btnSearch"  ng-click="filter()" class="k-button" value="Search"/>
  <input type="button" id="btnReset" ng-click="reset()" class="k-button" value="Reset"/>
  </div>
</script>


  <!-- <kendo-grid options="articleGridOptions"> -->
  <div kendo-grid="articlesgrid" k-options="articleGridOptions">
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
 <!--  </kendo-grid> -->
</div> 
</div> 
