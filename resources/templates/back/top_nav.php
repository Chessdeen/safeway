  <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.php">Safeway Admin</a>-->
                
                <div style="margin-bottom:5;padding-bottom:5;">
                    <a class="navbar-brand" href="/app/index"><img src="../../assets/images/logo.png" alt="safeway logo" width="35" height="35"></a>
                    </div>
            </div>
            
           
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a class="navbar-brand" href="../index">Shop</a></li>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    <?php  echo strtoupper(get_user_name()); ?> 
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <?php if(!is_admin() && !is_editor()): ?>
                       <li>
                            <a href="index.php?profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                         <?php endif ?>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>