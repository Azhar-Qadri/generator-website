<?php  
$url=$_SERVER['PHP_SELF'];
$u=explode("/", $url);
?>
<div id="controls">
            <aside id="leftmenu">
                <div id="leftmenu-wrap">
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <!--  NAVIGATION Content -->
                                    <ul id="navigation">
                                        <li class="active open">
                                            <a href="index.php">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li  $page='banner';>
                                            <a href="banner.php" <?php if($u[4]=='banner.php'){?>
                                        style="color:#fd7e14"
                                        <?php 
                                    } ?>>
                                                <i class="fa fa-cube"></i>
                                                <span>Banner</span>
                                            </a>
                                        </li>

                                        <li  $page='categories';>
                                            <a href="categories.php" <?php if($u[4]=='categories.php'){?>
                                        class="active"
                                        <?php 
                                    } ?>>
                                                <i class="fa fa-cube"></i>
                                                <span>Categories</span>
                                            </a>
                                        </li>
                                        <li  $page='machine';>
                                            <a href="product.php">
                                                <i class="fa fa-shield"></i>
                                                <span>Machine</span>
                                            </a>
                                        </li>
                                         <li  $page='gallery';>
                                            <a href="gallery.php">
                                                <i class="fa fa-calendar-check-o"></i>
                                                <span>Gallery</span>
                                            </a>
                                        </li> 
                                        <li  $page='client';>
                                            <a href="client.php">
                                                <i class="fa fa-user-circle-o"></i>
                                                <span>Client</span>
                                            </a>
                                        </li> 
                                        <li  $page='review';>
                                            <a href="client_review.php">
                                                <i class="fa fa-commenting"></i>
                                                <span>Client Reviews</span>
                                            </a>
                                        </li> 
                                        <li  $page='enquery';>
                                            <a href="enquery.php">
                                                <i class="fa fa-envelope-open"></i>
                                                <span>Enquery</span>
                                            </a>
                                        </li>
                                         <li  $page='careeer';>
                                            <a href="career.php">
                                                <i class="fa fa-line-chart"></i>
                                                <span>Career</span>
                                            </a>
                                        </li>
                                        <li  $page='quotation';>
                                            <a href="quotation.php">
                                                <i class="fa fa-cube"></i>
                                                <span>Quotation</span>
                                            </a>
                                        </li>

                                        
                                         
                                    </ul>
                                    <!--/ NAVIGATION Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="rightmenu">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a>
                        </li>
                        <li role="presentation">
                            <a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Todo</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="search">
                                <div class="form-group is-empty">
                                    <input type="text" class="form-control underline-input" placeholder="Search...">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <h6>Recent</h6>
                            <ul>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <span class="name">Claire Sassu</span>
                                            <span class="message"> If you are going to use a passage of Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar8.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Maggie jackson</span>
                                                <span class="message">All the Lorem Ipsum generators on the Internet</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Joel King</span>
                                                <span class="message">The standard chunk of Lorem Ipsum used</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar6.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">There are many variations of passages of Lorem</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h6>Contacts</h6>
                            <ul>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Matthew</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Aaliyah</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar8.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Arianna</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar9.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Scarlett</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar10.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">David</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="todo">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Create new task..." class="form-control" />
                                <span class="fa fa-plus"></span>
                            </div>
                            <h6>Today</h6>
                            <ul class="todo-list">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                            </ul>
                            <h6>Tomorrow</h6>
                            <ul class="todo-list">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> displayed in a normal space!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <h6>Chat Settings</h6>
                            <ul class="settings">
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Offline Users</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Fullname</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">History Enable</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Locations</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Notifications</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Undread Count</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>