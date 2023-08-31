<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
        .cancel{text-decoration: none}.bg-pay{background-color: #eee;border-radius: 2px}.com-color{color: #8f37aa!important}.radio{cursor: pointer}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio div{padding: 7px 14px;border: 2px solid #8f37aa;display: inline-block;color: #8f37aa;border-radius: 3px;text-transform: uppercase;width: 100%;margin-bottom: 10px}label.radio input:checked+div{border-color: #8f37aa;background-color: #8f37aa;color: #fff}.fw-500{font-weight: 400}.lh-16{line-height: 16px}
    </style>
</head>
<body>
    <div class="container mt-3 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex flex-row align-items-center">
                <h4 class="text-uppercase mt-1">BitCapital</h4> <span class="ml-2">Pay</span>
            </div> <a href="#" class="cancel com-color">Cancel</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-3">Conform Your Payment Details</h5>
                
            </div>
            <div class="col-md-12">
                <div class="bg-pay p-3"> <span class="font-weight-bold">Order Recap</span>
                    <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Amount</span> <span>$186.86</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Gateway Charges</span> <span>+ $0.0</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Admin Charges</span> <span>+ $0.0</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Promotional Discount</span> <span>- $40.00</span> </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-2"> <span class="lh-16 fw-500">Total Payable</span> <span>$40.00</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <span class="lh-16 fw-500">Total Discount</span> <span>- $40.00</span> </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Total </span> <span class="text-success">$85.00</span> </div>
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <h5 class="mb-3">Make Payment Using Below Details</h5>
                <div class="about">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row mt-1">
                            <h6>Status : </h6>
                            <h6 class="text-success font-weight-bold ml-1">Pending</h6>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex flex-column"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked>
                        </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE">
                            <div class="btn"> <span>Copy</span></div>
                        </label> </div>
                    <div class="buttons"> <button class="btn btn-success btn-block">Check Status</button> </div>
                </div>
            </div>
            <div class="col-md-2"> </div>
        </div>
    </div>
</body>
</html>