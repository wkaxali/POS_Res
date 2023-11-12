<div class="page-container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <h2>Admin</h2>
@include('adminNavbar') 
</nav>
        <div class="left-content">
            <div class="inner-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center" >
                            <h2  style="margin-left: 60px; ">Add Category</h2>
                        </div>
                    </div>
                    <br><br><br>
             <div class="row"  style="margin-left: 600px; ">
                    <div class="col-md12 text-center"  >
                        <div class="col-md-12 mainCat  text-center" >
                            <label for="">  Categories Name</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; width: 200px;" name="" id="cName">
                                 
                           <button style="  width: 90px; height: 40px; "  class="btn new" onclick="AddCategory()">Add  </button>
                           <br>  </div><br> 
                      </div>
                        
                      <br> 
                <div class="row">
                <div class="stock-table" 
                        style=" margin-left: -60px;  height: 450px; border: 2px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 663px;" id="stocktable" >
                            <thead>

                                <th>Category ID</th>
                                <th>Category Name</th>
                            
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>
                    </div>
                        </div>
                    </div>
            
                </div>

            </div>
        </div>
       

        