<div class="page-container">

<div class="left-content">
    <div class="inner-block">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Add New Product</h2>
                    </div>
                </div>
                <br>
                <div class="myContentInputs">
                    <div class="inputField-1">
                        <label for="prodName">Category</label> <br>

                        <select 
                            class="selectpicker form-control" data-live-search="true" id="category">

                        </select>
                    </div>
                    <div class="inputField-1">
                        <label for="prodName">Product Name</label>
                        <input type="text" id="productName" class="form-control">
                    </div>
                    <div class="inputField-1">
                        <label for="cost">Cost</label>
                        <input type="text" class="form-control" id="cost">
                    </div>
                   
                    <div class="inputField-1">
                        <label for="prodName">Sale Price</label>
                        <input type="text" class="form-control" id="salePrice">

                    </div>
                    <div class="inputField-1">
                        <label for="prodName">Description</label>
                        <input type="text" class="form-control" id="description">

                    </div>
                    <div class="input-Btn-1">
                        <button class="btn btn-success" style="margin-top: 30px !important;"
                            onclick="AddItemInGrid()">Add
                            Stock</button>

                    </div>
                </div>





            </div>


        </header>

        <section class="mt-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ent-table" style="overflow: auto;">
                            <table class="table table-bordered table-striped " id="MenuTable">
                                <thead>
                                    <tr>
                                        <th>Product Name </th>
                                        <th>Category</th>

                                        <th>Sale Price</th>
                                        <th>Cost</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody id="contact-list">


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 offset-md-10 text-right">
                        <button class="btn btn-success  mt-1"
                            style="height: 40px;width: 120px;  color: #ffffff;"
                            onclick="insertProducts()">Update Stock</button>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

<div class="clearfix"></div>
</div>