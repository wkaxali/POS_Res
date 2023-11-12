<div class="page-container">
    <div class="left-content">
        <div class="inner-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style="font-size:45px;" class="mainHeadings">Walk In Customer</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" id="selectFirst">
                    <div class="col-xl-4  col-lg-7 col-md-7   okay-invo">
                        <label for="invo-1">Invoice Number</label>
                        <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                            name="invo-1" id="InvoiceID">
                        <button class="btn" style="height: 25px; margin-top: -5px; background-color:#0a549d;"
                            ></button>
                        <br class="hideBr"> <label for="prod-1">Product Number</label>
                        <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                            name="invo-1" id="invo-1">
                        <button type="button" class="btn"
                            style="height: 25px; margin-top: -5px; background-color: #e61d2f;" data-toggle="modal"
                            data-target=".bd-example-modal-xl"></button>

                        </button>

                        <div class="modal fade bd-example-modal-x2" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-xl">
                                <div class="modal-content" style="margin: 0 auto; width: 74%;">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Menu</h2>
                                      </div>
                                    

                                    <div class="container">
                                        <div class="row">
                                            <div class="overFlowingTable"
                                                style="padding: 10px;  width: 608px !important; margin: 5px auto !important; ">

                                                <h3 style="text-align: center">Category</h3>
                                                <table class="table table-bordered " id="categories">
                                                    <thead>
                                                        <tr>
                                                           <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="overFlowingTable"
                                                style="padding: 0px; overflow: auto !important; width: 800px !important; margin: 5px auto !important; ">

                                                <h3 style="text-align: center">Products</h3>
                                                <table class="table table-bordered " id="products">
                                                    <thead>
                                                        <tr>
                                                            <td ></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                                <button type="button" class="btn btn-org-1"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" data-dismiss="modal"
                                                    class="btn btn-org-1">Okay</button>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                        <!-- Sample -->
                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-xl">
                                <div class="modal-content" style="margin: 0 auto; width: 70%;">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Forland Modern Motors</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    <div class="container">
                                        <div class="row">

                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="overFlowingTable"
                                                style="padding: 20px; overflow: auto !important; width: 908px !important; margin: 15px auto !important; ">


                                                <table class="table table-bordered " id="searchProductTable">
                                                    <thead>
                                                        <tr>

                                                            <th>Product Id</th>

                                                            <th>Product Name</th>
                                                            <th>Price</th>
                                                            <th>Stock</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                                <button type="button" class="btn btn-org-1"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" data-dismiss="modal"
                                                    class="btn btn-org-1">Okay</button>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <label style="visibility: hidden;" for="prod-hour">Product Number</label>
                        <!-- <input type="text" class="form-control" style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="invo-1"> -->

                        <div class="centhour">
                            <button class="btn" style="background-color: #13579a;" data-toggle="modal"
                            data-target=".bd-example-modal-x2">Products</button>
                            
                        </div>
                        <!-- <button class="btn btn-danger ctrl-1">Delete Invoice</button> -->
                    </div>

                    <div class="col-md-6  okay-invo-1">
                        <div class="o-inv">
                            <label for="invo-1">Customer Id</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="CID" readonly>
                            <button class="btn"
                                style="height: 25px; margin-top: -5px; background-color: #e61d2f;"></button>
                            <br>
                            <label for="prod-1">Last Balance</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="LastBalance" readonly>
                            <button class="btn"
                                style="height: 25px; margin-top: -5px;background-color: #13579a;"></button> <br>
                            <label for="prod-1">Current Balance</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="CurrentBalance" readonly>

                        </div>
                        <div class="o-inv-2">


                            <label for="issue-3">Customer Name</label>
                            <select class="selectpicker" data-live-search="true" tabindex="null" id="CustomerName"
                                onchange="getCurrentCustomerInfo()">
                                <!-- from database -->
                            </select>


                            </button>

                            <br>
                            <label for="prod-1">Contact Number</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 107px; height: 30px;" name="invo-1" id="CNO" readonly>
                            <br>
                            <label for="prod-1">Category</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 107px; height: 30px;" name="invo-1"
                                id="CustomerCategory" readonly>
                            <br>
                        </div>
                        <div class="clear">

                        </div>
                        <div class="inv-bor-btns">
                            <button class="btn" style="background-color: #e61d2f;" data-toggle="modal"
                                data-target="#staticBackdrop">Add</button>



                            <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div class="registration-form" >
                                                <h2>Add New Customer</h2>
                                                <div class="form-group-1">
                                                    <form>
                                                    <input type="text" style="width:232px;" class="form-control item" name="name" id="addCustomerName"
                                                        placeholder="Customer Name" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="title" id="address"
                                                        placeholder="Address" required />

                                                    <input type="number" style="width:232px;" class="form-control item" name="tel" id="addContact"
                                                        placeholder="Contact" required />
                                                    <input type="number" style="width:232px;" class="form-control item" name="title" id="addCNIC" placeholder="ID Card"
                                                        required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="phone_number" id="refID"
                                                        placeholder="Refferal ID" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="phone_number" id="rank"
                                                        placeholder="Rank" required />
                                                        </form>
                                                </div>

                                                <div class="form-submit">
                                                    <button style="width: 124px;" onclick="addCustomer()" class="btn  create-account" name="submit" id="submit"
                                                        class="submit" value="">Add</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-org-1"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 okay-invo okay-invo-hide">
                        <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png" class="img-fluid"
                            alt="">

                    </div>



                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 myGoggle" style="overflow-x: auto; overflow-y: auto;">
                        <div>
                            <table style="border:1px solid rgb(196, 218, 243); width:100%;  margin-top:10px;  "
                                id="ProductSaleTable">

                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product Name</th>
                                       
                                        <th>Sale Price</th>
                                        <th>Quantity</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- this will be populated from database -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-3 okay-invo-3">
                        <label for="invo-1" style="width: 130px;">Total</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="Total">

                        <label for="prod-1" style="width: 130px;">Discount</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                            id="DiscountOverall" onchange="calc()">
                        <label for="invo-1" style="width: 130px;">Gross Total</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="grossTotal">
                        <label for="prod-1" style="width: 130px;"> Tax %</label>
                        <input type="text" class="form-control" value=0
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="tax"
                            onchange="calc()">
                        <label for="prod-1" style="width: 130px;">Net Total</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="NetTotal">
                        <label for="invo-1" style="width: 130px; font-weight: 500;">Amount Paid</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="AmountPaid"
                            onchange="calcForBalance()">
                        <label for="prod-1" style="width: 130px; font-weight: 500;">Remaining Balance</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                            id="RemainingBalance">

                        <label id="paidme" for="">Paid From</label>
                        <select class="selectpicker form-control" data-live-search="true" id="accounts">

                        </select>
                        <div class="total-buttons" id="hideme">
                            <button class="btn" style="background-color: #e61d2f;" id="saveBtn"
                                onclick="insertInSales()">Save</button>
                            <button class="btn" style="background-color: #0a549d;" onclick="print()">Print</button>
                            <!-- <button class="btn" style="background-color: #e61d2f;">Edit</button>
                            <button class="btn" style="background-color: #0a549d;">Hold</button> -->
                            <button class="btn" style="background-color: #e61d2f;" id="updateBtn"
                                onclick="UpdateSaleInvoice()">Update</button>
                            <!-- <button class="btn" style="background-color: #0a549d;">Delete</button> -->
                        </div>





                    </div>
                </div>
            </div>

            <section>
                <div class="total-buttons mb-5" id="holdPlz" style="text-align: center;">
                    <button class="btn btn-info">Save</button>
                    <button class="btn btn-info">Hold</button>
                    <button class="btn btn-info">Save</button>

                    <button class="btn btn-info">Save</button>
                    <button class="btn btn-info">Hold</button>
                    <button class="btn btn-info">Save</button>
                </div>
            </section>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
