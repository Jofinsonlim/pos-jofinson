<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2> <small>Users</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div style="border-radius : 20px;">
                <button
                    style="background-color: blue; Opacity : 70%; border: 0px; left: 10xp; top: 10px; border-radius: 5px; margin-top: 20px; margin-bottom:20px;"
                    id="button_add" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <table id="myTable" class="table table-striped table-bordered curved-table" style="border-radius : 20px;">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>id user</th>
                        <th>username</th>
                        <th>level</th>
                        <th>act </th>
                    </tr>
                </thead>


                <tbody>

                    <?php
                    $no = 1;
                    foreach ($dt as $td) {

                        ?>

                        <tr style="vertical-align : middle;">
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $td->id_user ?>
                            </td>
                            <td>
                                <?php echo $td->username ?>
                            </td>
                            <td>
                                <?php echo $td->level ?>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0  text-center">
                                    <!-- <button type="button" class="text-secondary font-weight-bold text-xs btn btn-primary"
                                        style="background: transparent; border: 0px;" id="button_detail"
                                        data-id="<?= $td->id_user ?>">
                                        <i class="fa fa-info"></i> -->
                                    <a href="<?= base_url('/home/delete_user/' . $td->id_user) ?>"> <button
                                            class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            </td>
                            </button>
                            </p>
                            </td>

                        </tr>

                        <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<div id="myModal" class="modal"
    style="width: -webkit-fill-available; left: 80px; top:60px; display: none; position: fixed; ">
    <div class="modal-content" style="width: 532px; left: 150px;
    top: 90px; padding: 15px;">
        <span class="close">&times;</span>
        <form method="post" id="form">
            <h4 id="judul">Tambah User</h4>
            <input type="hidden" id="hidden_id">
            <p style="height: 10px;">username</p>
            <input type="text" name="username" class="form-control" id="username">
            <p style="height: 10px;">password</p>
            <input type="password" name="password" class="form-control" id="password">
            <p style="height: 10px;">level</p>
            <input type="number " name="level" class="form-control" id="level">
            <div style="padding-top:10px;">
                <button
                    style="border-radius: 5px; background: #172b44; border: 0; color: white; height: 35px;">Save</button>
                <div>
        </form>
    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("button_detail");
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
        modal.style.display = "none";
        document.querySelector(".modal-backdrop").style.display = "none";

    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            document.querySelector(".modal-backdrop").style.display = "none";
        }
    }

    $(document).on('click', '#button_add', function (e) {
        e.preventDefault();
        console.log('hi');
        $('#myModal').css('display', 'block');
        // document.querySelector(".modal-backdrop").style.display = "block";
        document.getElementById("form").reset();
        // document.getElementById("judul").textContent = "Add Guru";
        // TAMPIL+++DETAIL==========================

        console.log("a")
        document.getElementById("form").onsubmit = function (e) {
            e.preventDefault();

            // TAMPIL+++DETAIL==========================
            var username = $("#username").val();
            var password = $("#password").val();
            var level = $("#level").val();
            console.log("ye");
            $.ajax({
                url: 'http://localhost:8080/home/p_i_user',
                data: { username: username, password: password, level: level },
                method: "post",
                // dataType: 'json',
                // cache: false,
                success: function (data) {
                    // alert("berhasil rek");
                    $('#myModal').css('display', 'none');

                    console.log("Success")
                    document.querySelector(".modal-backdrop").style.display = "none";
                },
                error: function (request, error) {
                    console.log(arguments);
                    alert(" Can't do because: " + error);
                    console.log("Failed ")
                },
            })
            document.getElementById("form").reset();
            $("#myTable").load(location.href + " #myTable");



        }
    })

    $(document).on('click', '#button_detail', function (e) {
        e.preventDefault();

        modal.style.display = "block";
        document.querySelector(".modal-backdrop").style.display = "block";
        console.log('hi');
        document.getElementById("form").reset();
        document.getElementById("judul").textContent = "Edit User";
        e.preventDefault();
        // TAMPIL+++DETAIL==========================
        var id = $(this).attr("data-id");
        console.log(id);
        $.ajax({
            url: 'http://localhost:8080/home/detail_user',
            data: { id: id },
            method: "post",
            dataType: 'json',
            cache: false,
            success: function (data) {
                $("#hidden_id").val(data.id_user);
                $("#username").val(data.username);
                $("#level").val(data.level);
            },
            error: function (request, error) {
                console.log(arguments);
                alert(" Can't do because: " + error);
            },
        })

        document.getElementById("form").onsubmit = function (e) {
            e.preventDefault();

            // TAMPIL+++DETAIL==========================
            var username = $("#username").val();
            var level = $("#level").val();
            console.log(id);
            $.ajax({
                url: 'http://localhost:8080/home/p_e_user',
                data: { id: id, username: username, level: level },
                method: "post",
                dataType: 'json',
                cache: false,
                success: function (data) {
                    // alert("berhasil");
                    modal.style.display = "none";
                    document.querySelector(".modal-backdrop").style.display = "none";
                },
                error: function (request, error) {
                    console.log(arguments);
                    alert(" Can't do because: " + error);
                },
            })
            document.getElementById("form").reset();
            $("#tester").load(location.href + " #tester");



        }
    })
</script>