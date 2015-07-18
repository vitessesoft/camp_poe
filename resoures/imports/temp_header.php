<script>

    $(function () {

    });
    function logout() {
        $.ajax({
            url: BASE_URL + 'index.php/userregistation/logoutuser',
            type: 'post',
            data: {'action': 'logout'},
            success: function (rowData) {
                if (rowData != 0) {
                    $("#user").empty();
                    $("#user").append(rowData);
                } else {
                    $("#user").hide();
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }
    function LoginUser() {
        var username = $("#user_id").val();
        var password = $("#pw").val();

        $.ajax({
            url: BASE_URL + 'index.php/userregistation/check_member_login',
            type: 'post',
            data: {'action': 'login_check', 'username': username, 'password': password},
            success: function (rowData) {
                if (rowData == "Invalid") {
                    $("#login_result").append(rowData);
                } else {
                    $("#user").empty();
                    $("#user").append(rowData);
                    $("#login_form").modal('hide');
                    location.reload();
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }
</script>
<section id="navigation" class="navbar-fixed-top ">
    <script type="text/javascript">
        var BASE_URL = '<?php echo base_url(); ?>';
    </script>
    <div class="container">

        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <span class="navbar-brand">
                <a href="<?php echo base_url(); ?>index.php/home">
                    <img src="<?php echo base_url(); ?>resoures/img/logo_head.png" alt="camp poe logo">
                </a>
            </span>
            <!-- /logo -->

        </div>

        <!-- main nav -->
        <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>index.php/home" class="">HOME</a></li>
<!--                <li><a href="<?php echo base_url(); ?>">HOME</a></li>-->
                <li class="dropdown">
                    <a href="<?php echo base_url(); ?>index.php/room" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">ROOMS<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>index.php/camp-poe-suites"><span class="fa fa-home"></span>&nbsp;&nbsp;All Suites</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/camp/suite-no/1"><span class="fa fa-hotel"></span>&nbsp;&nbsp;</span>Suite 1</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/camp/suite-no/2"><span class="fa fa-hotel"></span>&nbsp;&nbsp;Suite 2</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/camp/suite-no/3"><span class="fa fa-hotel"></span>&nbsp;&nbsp;Suite 3</a></li>
                        <li><a href="#"><span class="fa fa-hotel"></span>&nbsp;&nbsp;Suite 4</a></li>
                        <li><a href="#"><span class="fa fa-hotel"></span>&nbsp;&nbsp;Suite 5</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-home"></span>&nbsp;&nbsp;Flexible Family Suite</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-home"></span>&nbsp;&nbsp;Bank Suite</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>index.php/camp-poe">THE CAMP</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/team-poe">TEAM POE</a></li>
                <li class="dropdown">
                    <a href="<?php echo base_url(); ?>index.php/Pakages/" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">PAKAGES<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>index.php/Pakages/#pakage-one">pakage 1</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Pakages/#pakage-two">pakage 2</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Pakages/#pakage-three">pakage 3</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Pakages/#pakage-four">pakage 4</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/camp-shop">SHOP</a></li>

                    </ul>
                </li>

                <li><a href="<?php echo base_url(); ?>index.php/camp-gallery">PHOTOS</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/contact-camp-poe">CONTACT</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/camp/available-suites">BOOK NOW</a></li>
                <li class="login" id="user"><?php
                    if (!empty($this->session->userdata['registerd_users_data']['username'])) {
                        echo "<i class='fa fa-user'></i>&nbsp;" . $this->session->userdata['registerd_users_data']['username'] . " | <a href='#' id='logout' onclick='logout();' style= color: white;'><i class='fa fa-sign-out'></i></a>";
                    } else {
                        echo "<a href='#' data-toggle='modal' data-target='#login_form' style='color: white;'>Login</a>";
                    }
                    ?></li>
            </ul> 
        </nav>
        <!-- /main nav -->
    </div>
</section>

