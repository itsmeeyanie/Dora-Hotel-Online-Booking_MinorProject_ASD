<?php include("../includes/config.php"); ?>



                        <form class="form-horizontal" action="../includes/config.php" method="post">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input name="username" type="text" class="form-control" placeholder="Username" value="">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control" placeholder="Password" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">  
                                            Remember Me 
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" name="login" value="Submit" class="btn btn-dark">
                                        Login
                                    </button>

                                    <a class="btn btn-link">
                                        Forgot Your Password?
                                    </a>
                                </div>
                              <br>
                            <div>
                             <p>If you don't have an account, click <a href="signup.php">here</a> to Sign Up.</p>
                            </div>
                          </div>
                        </form>
