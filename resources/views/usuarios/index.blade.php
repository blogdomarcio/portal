 @extends('layouts.admin')

@section('content')

 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Modals</h5>
                <ol class="breadcrumb">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">UI Elements</a>
                  </li>
                  <li class="active">Modals</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">Use a modal for dialog boxes, confirmation messages, or other content that can be called up. In order for the modal to work you have to add the Modal ID to the link of the trigger.</p>
          <div class="divider"></div>
          <!--Modal Demo-->
          <div id="modals-demo" class="section">
            <h4 class="header">Modal Demo</h4>
            <div class="row">
              <div class="col s12 m4 l3">
                <p>To add a close button, just add the class <code class=" language-css">.modal-close</code> to your button.</p>
              </div>
              <div class="col s12 m8 l9">
                <p><a class="waves-effect waves-light btn modal-trigger  light-blue" href="#modal1">Modal</a>
                </p>
                <p><a class="waves-effect waves-light btn modal-trigger  teal " href="#modal3">Modal with Color</a>
                </p>

                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
                    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
                  </div>
                </div>

                <div id="modal3" class="modal">
                  <div class="modal-content teal white-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  </div>
                  <div class="modal-footer  teal lighten-4">
                    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
                    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <!--Modal With Fixed Footer-->
          <div class="divider"></div>
          <div id="modal-fixed-footer">
            <h4 class="header">Modal With Fixed Footer</h4>
            <div class="row">
              <div class="col s12 m4 l3">
                <p>If you have content that is very long and you want the action buttons to be visible all the time, you can add the <code class=" language-markup">modal-fixed-footer</code> class to the modal. </p>
              </div>
              <div class="col s12 m8 l9">
            <p></p>
            <p><a class="waves-effect waves-light btn modal-trigger  light-blue" href="#modal2">Modal With Fixed Footer</a>
            </p>
            <p><a class="waves-effect waves-light btn modal-trigger  green" href="#modal4">Modal With Fixed Footer & Color</a>
            </p>
            <div id="modal2" class="modal modal-fixed-footer">
              <div class="modal-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="modal-footer">
                <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
              </div>
            </div>
            <div id="modal4" class="modal modal-fixed-footer green white-text">
              <div class="modal-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="modal-footer green lighten-4">
                <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
              </div>
            </div>
          </div>
          </div>
          </div>
          <!--Modal Bottom Sheet Style-->
          <div class="divider"></div>
          <div id="modal-bottom-sheet">
            <h4 class="header">Modal Bottom Sheet Style</h4>
            <div class="row">
              <div class="col s12 m4 l3">
                &nbsp;
              </div>
              <div class="col s12 m8 l9">
                <a class="waves-effect waves-light btn modal-trigger" href="#modal5">Modal Bottom Sheet Style</a>
                <div id="modal5" class="modal bottom-sheet">
                  <div class="modal-content">
                    <h4>Modal Header</h4>
                    <ul class="collection">
                      <li class="collection-item avatar">
                        <img src="images/yuna.jpg" alt="" class="circle">
                        <span class="title">Title</span>
                        <p>First Line
                          <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                      </li>
                      <li class="collection-item avatar">
                        <i class="mdi-file-folder circle"></i>
                        <span class="title">Title</span>
                        <p>First Line
                          <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                      </li>
                      <li class="collection-item avatar">
                        <i class="mdi-action-assessment circle green"></i>
                        <span class="title">Title</span>
                        <p>First Line
                          <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                      </li>
                      <li class="collection-item avatar">
                        <i class="mdi-av-play-arrow circle red"></i>
                        <span class="title">Title</span>
                        <p>First Line
                          <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
        <!--end container-->

      </section>

      @endsection