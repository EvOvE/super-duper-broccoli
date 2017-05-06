<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css?<?=rand(1,111111111111111111111)?>">
</head>

<body>

  <!-- this is comment -->

  <!-- awesome -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<?/*

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

 */ ?>



    <!-- <div class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Heaven</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Killing is fun!</a></li>
            </ul>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-danger">
                                <h3><span class="label label-default">Reason #1</span>Easy to get started</h3>
                <p>Designers need a solid foundation that gives us almost everything a typical website would require but is flexible enough for customization. Thanks to hundreds of hours spent by some developers and companies, we now have dozens of CSS Frameworks to choose from.</p>
                <p>Among all the available CSS frameworks out there, Bootstrap is my favorite and also one of the most widely used. It's included by default in Joomla 3, and is wildly popular amongst WordPress and Drupal users. In the last 3 years, Bootstrap's popularity grew over 1,000% and has become by far the most popular CSS framework.
                a</p>
                <p>So why should you choose Bootstrap? Watch this video below, and then we'll give you 6 great reasons to use Bootstrap:
                </p>

                <? echo 'Hello';  ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <!--<iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>-->
                  </div>
<!--                <p>
                    <iframe src="https://www.youtube.com/embed/XGSy3_Czz8k" frameborder="0" width="260" height="315"></iframe>
                </p>-->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-warning">
                 <h3><span class="label label-default">Reason #2</span>Great grid system</h3>

                 <p>Bootstrap is built on responsive 12-column grids, layouts and components. Whether you need a fixed grid or a responsive, its only matter of a few changes. Offsetting & Nesting of columns is also possible in both fixed and fluid width layouts.
                </p>
                 <p>Another useful set of features are the responsive utility classes using which you can make a certain block of content appear or hide only on devices based on the size of their screen. Very handy when you want to hide some content based on screen size. Adding a class such as .visible-desktop to a element, will make it visible only for desktop users. There are similar classes for tablets and phones.</p>
                 <p>video</p>
                 <div class="embed-responsive embed-responsive-4by3">
                    <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CB3H05OhVDI"></iframe>-->;

                  </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-info">
                <h3><span class="label label-default">Reason #3</span>Base styling for most HTML elements</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">subron1</a></li>
                    <li class=""><a href="#tab2" data-toggle="tab">subrn2</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">subrn3</a></li>
                </ul>
                <div class="tab-content ">
                    <div id="tab1" class="tab-pane in active fade">
                        A website has many different elements such as headings, lists, tables, buttons, forms, etc. All these fundamental HTML elements have been styled and enhanced with extensible classes.
                    </div>
                    <div id="tab2" class="tab-pane in fade">
                        The HTML elements for which styles are provided are:
                    </div>
                    <div id="tab3" class="tab-pane in fade ">
                        bla bla bla
                    </div>
                     <div id="submenu1" class="tab-pane in fade">
                        <ul class="li">Typography</ul>
                        <ul class="li">Code</ul>
                        <ul class="li">Tables</ul>
                    </div>
                    <div id="submenu2" class="tab-pane in fade">
                            <ul class="li">Forms</ul>
                            <ul class="li">Buttons</ul>
                    </div>
                    <div id="submenu3" class="tab-pane in fade">
                            <ul class="li">Images</ul>
                            <ul class="li">Icons</ul>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-danger">
                <h3><span class="label label-default">Reason #4</span>Extensive list of components</h3>
                    <ul class="nav nav-tabs">
                        <li class="dropdown">
                            <a href="active" class="dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a data-toggle="tab" href="#submenu1">Sub1</a></li>
                                <li><a data-toggle="tab" href="#submenu2">Sub2</a></li>
                                <li><a data-toggle="tab" href="#submenu3">Sub3</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>
            <div class="clearfix visible-lg-block visible-sm-block"></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-default">
                <h3><span class="label label-default">Reason #5</span>Bundled Javascript plugins</h3>
                <ul class="nav nav-pills">
                    <li class='active'><a href="#m1" data-toggle="tab">Menu 1</a></li>
                    <li><a href="#m2" data-toggle="tab">Menu 2</a></li>
                    <li><a href="#m3" data-toggle="tab">Menu 3</a></li>
                    <li><a href="#m4" data-toggle="tab">Menu 4</a></li>
                    <li><a href="#m5" data-toggle="tab">Menu 5</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-success">
                <h3><span class="label label-default">Reason #6</span>Good documentation</h3>
                 <div class="tab-content">
                    <div id="m1" class="tab-pane in fade active"><a href="">text for menu 1</a></div>
                    <div id="m2" class="tab-pane in fade"><a href="">text for menu 2</a></div>
                    <div id="m3" class="tab-pane in fade"><a href="">text for menu 3</a></div>
                    <div id="m4" class="tab-pane in fade"><a href="">text for menu 4</a></div>
                    <div id="m5" class="tab-pane in fade"><a href="">text for menu 5</a></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xs-3"></div>
            <div class="col col-xs-3"></div>
            <div class="col col-xs-3"></div>
            <div class="col col-xs-3"></div>
        </div>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>


    <script>

    </script>


</body>

</html>
