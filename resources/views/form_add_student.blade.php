<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script !src="https://kit.fontawesome.com/a076d05399.js?fbclid=IwAR0JdE3rdMmZhGRsXRnUAHg_WkrC1e9tI6EwRWf96lJt8416f6KyJ5VODJg"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <title>Form add Student</title>
</head>
<body>

    <div class="container">
        <div class="dien_thong_tin col-lg-6 col-lg-offset-3 div_form">
            <h1 class="text-center anh_td">Add Student</h1>
            <form  role="form">


                <div class="form-group ">
                    <label for="exampleInputEmail1">Email address</label>
                    <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> -->
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Vui lòng nhập email" required>

                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Họ và Tên</label>
                    <!-- <input type="text" name="ten" class="form-control" id="exampleInputName1" placeholder="Họ và Tên"> -->
                    <input type="text" class="form-control" id="inputName" placeholder="Họ và Tên" data-error="Vui lòng nhập tên" required>

                </div>

                <div class="form-group">
                    <label for="exampleInputPhone1">Số điện thoại</label>
                    <!-- <input type="number" name="phone"class="form-control" id="exampleInputPhone1" placeholder="Số điện thoại"> -->
                    <input type="number" class="form-control" id="inputPhone" placeholder="Số điện thoại" data-error="Vui lòng nhập số điện thoại" required>

                </div>

                <div class="form-group ">
                    <label for="exampleInputDate1">Date of birth</label>
                    <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> -->
                    <input type="numbem" class="form-control" id="inputDate" placeholder="Date of birth" required>

                </div>

                <div class="form-group ">
                    <label for="exampleInputHometown">Hometown</label>
                    <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> -->
                    <input type="text" class="form-control" id="inputHometown" placeholder="Hometown" required>

                </div>

                <div class="form-group ">
                    <label for="exampleInputMark">Mark student</label>
                    <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> -->
                    <input type="number" class="form-control" id="inputMark" placeholder="Mark" required>

                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-warning">Cancel</button>
                    <button type="button" class="btn btn-info">Save</button>

                </div>





            </form>
        </div>
    </div>

</body>
</html>
