@extends('Layouts.base')
@section('title')
    Data Home
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="flip">
                    <div class="widget-bg-color-icon card-box front">
                        <div class="bg-icon pull-left">
                            <i class="ti-eye text-warning"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b>3752</b></h3>
                            <p>Daily Visits</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-bg-color-icon card-box back">
                        <div class="text-center">
                            <span id="loadspark-chart"></span>
                            <hr>
                            <p>Check summary</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="flip">
                    <div class="widget-bg-color-icon card-box front">
                        <div class="bg-icon pull-left">
                            <i class="ti-shopping-cart text-success"></i>
                        </div>
                        <div class="text-right">
                            <h3><b id="widget_count3">3251</b></h3>
                            <p>Sales status</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-bg-color-icon card-box back">
                        <div class="text-center">
                            <span class="linechart" id="salesspark-chart"></span>
                            <hr>
                            <p>Check summary</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="flip">
                    <div class="widget-bg-color-icon card-box front">
                        <div class="bg-icon pull-left">
                            <i class="ti-thumb-up text-danger"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b>1532</b></h3>
                            <p>Hits</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-bg-color-icon card-box back">
                        <div class="text-center">
                            <span id="visitsspark-chart"></span>
                            <hr>
                            <p>Check summary</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="flip">
                    <div class="widget-bg-color-icon card-box front">
                        <div class="bg-icon pull-left">
                            <i class="ti-user text-info"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b>1252</b></h3>
                            <p>Subscribers</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-bg-color-icon card-box back">
                        <div class="text-center">
                            <span id="subscribers-chart"></span>
                            <hr>
                            <p>Check summary</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel main-chart">
                            <div class="panel-heading panel-tabs">
                                <ul class="nav nav-tabs nav-float" role="tablist">
                                    <li class="active text-center">
                                        <a href="#home" role="tab" data-toggle="tab">Live Feeds</a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#profile" role="tab" data-toggle="tab"><span class="hidden-xs">Annual</span>
                                            Revenue</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <div class="form-group">
                                            <input type="checkbox" id="toggle_real" name="my-checkbox"
                                                   data-size="small" checked>
                                        </div>
                                        <div id="live-chart" class="livechart-tab1 m-t-10"></div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="chart-container">
                                                <span class="">
                                                    <i class="ti-reload redraw-cart pull-right set-animate"></i>
                                                </span>
                                            <canvas id="dashboard-chart1" width="800" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="panel">
                            <div class="swiper-container swiper_news">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slide-1 gradient-color">
                                        <div class="slider-content">
                                            <div class="news-head">
                                                <h3>The Need For Inc. in Energy Infrastructure</h3>
                                                <span class="pull-right">Yesterday</span>
                                                <hr>
                                            </div>
                                            <div class="news-cont">
                                                <h4>The strategy of adjusting and optimizing energy, using systems
                                                    and
                                                    procedures so as to reduce energy requirements per unit of
                                                    output
                                                    while holding ...</h4>
                                                <p class="text-right read-more"><a class="read-more"
                                                                                   href="javascript:void(0)">Read
                                                        more <i class="ti-angle-double-right"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-2 gradient-color">
                                        <div class="slider-content">
                                            <div class="news-head">
                                                <h3>What to expect in the final race..</h3>
                                                <span class="pull-right">5min ago</span>
                                                <hr>
                                            </div>
                                            <div class="news-cont">
                                                <h4>The strategy of adjusting and optimizing energy, using systems
                                                    and
                                                    procedures so as to reduce energy per unit of output
                                                    while holding ...</h4>
                                                <p class="text-right read-more"><a class="read-more"
                                                                                   href="javascript:void(0)">Read
                                                        more <i class="ti-angle-double-right"></i></a></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-3 gradient-color">
                                        <div class="slider-content">
                                            <div class="news-head">
                                                <h3>First ever Largest open Air Purifier</h3>
                                                <span class="pull-right">On 28th Oct</span>
                                                <hr>
                                            </div>
                                            <div class="news-cont">
                                                <h4>The strategy of adjusting and optimizing energy, using systems
                                                    and
                                                    procedures so as to reduce energy requirements per unit of
                                                    output
                                                    while holding ...</h4>
                                                <p class="text-right read-more"><a class="read-more"
                                                                                   href="javascript:void(0)">Read
                                                        more <i class="ti-angle-double-right"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="panel real-timechart">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6 text-center">
                                        <h3 class="">Real-Time Visits</h3>
                                        <div class="real-value"><p><span></span>k</p></div>
                                    </div>
                                    <div class="col-xs-6 text-center">
                                        <h3 class="">Returning Visitors</h3>
                                        <div class="return-value"><p><span></span>k</p></div>
                                    </div>
                                </div>
                                <div id="realtime-views" class="real-chart"></div>
                                <hr>
                                <div class="row ratings">
                                    <div class="col-xs-4 text-center">
                                        <h4>81%</h4>
                                        <p>Satisfied</p>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h4>8%</h4>
                                        <p>Unsatisfied</p>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h4>11%</h4>
                                        <p>NA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="panel nvd3-panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Project Status</h3>
                            </div>
                            <div class="panel-body">
                                <div class="nvd3-chart line-chart text-center" data-x-grid="false">
                                    <svg></svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Timeline</h3>
                            </div>
                            <div class="panel-body">
                                <div>
                                    <ul class="timeline timeline-update">
                                        <li>
                                            <div class="timeline-badge primary wow lightSpeedIn center">
                                                <img src="img/authors/avatar1.jpg" height="36" width="36"
                                                     class="img-circle pull-right" alt="avatar-image">
                                            </div>
                                            <div class="timeline-panel wow slideInLeft"
                                                 style="display:inline-block;">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Jade Project's Status </h4>
                                                    <p>
                                                        <small class="text-primary">11 hours ago</small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Jade Project team has completed their first phase.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="timeline-badge info wow lightSpeedIn center">
                                                <img src="img/authors/avatar.jpg" height="36" width="36"
                                                     class="img-circle pull-right" alt="avatar-image">
                                            </div>
                                            <div class="timeline-panel wow slideInLeft">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Tinder Project</h4>
                                                    <p>
                                                        <small class="text-primary">Sept 10, 2016</small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Tinder Project's Final review has completed.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge default wow lightSpeedIn center">
                                                <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                     class="img-circle pull-right" alt="avatar-image">
                                            </div>
                                            <div class="timeline-panel wow slideInLeft">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">A new branch in Virginia.</h4>
                                                    <p>
                                                        <small class="text-primary">Jan 02, 2017</small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Planning to have a branch in virginia in the coming year.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge primary wow lightSpeedIn center">
                                                <img src="img/authors/avatar3.jpg" height="36" width="36"
                                                     class="img-circle pull-right" alt="avatar-image">

                                            </div>
                                            <div class="timeline-panel wow slideInLeft"
                                                 style="display:inline-block;">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Daily Status </h4>
                                                    <p>
                                                        <small class="text-primary">2days ago</small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Manager schedules to keep a daily project status track.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="timeline-badge info wow lightSpeedIn center">
                                                <img src="img/authors/avatar4.jpg" height="36" width="36"
                                                     class="img-circle pull-right" alt="avatar-image">

                                            </div>
                                            <div class="timeline-panel wow slideInLeft">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Performance report</h4>
                                                    <p>
                                                        <small class="text-primary">Aug 10, 2016</small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Richard, updated his Team over view Performance report.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge default wow lightSpeedIn center">
                                                <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                     class="img-circle pull-right" alt="avatar-image">
                                            </div>
                                            <div class="timeline-panel wow slideInLeft">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Project Evaluation</h4>
                                                    <p>
                                                        <small class="text-primary">Oct 05, 2016</small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Variations Project Evaluation is going on to highlight
                                                        project.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6">
                        <div class="panel personal-chat">
                            <div class="panel-heading">
                                <div class="panel-title"><img class="chat-image img-circle pull-left" height="36"
                                                              width="36"
                                                              src="img/authors/avatar5.jpg" alt="avatar-image">
                                    <div class="header-elements">Wilton zeph
                                        <br>
                                        <small class="status"><b>Online</b></small>

                                        <div class="pull-right options">
                                            <div class="btn-group">
                                                <span class="toggle-dropdown" data-toggle="dropdown"
                                                      aria-expanded="false" aria-haspopup="true" role="menu">
                                                    <i class="ti-clip attachment"></i>
                                                </span>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="ti-file text-primary"></i>Document</a>
                                                    </li>
                                                    <li><a href="#"><i
                                                                    class="ti-gallery text-primary"></i>Gallery</a>
                                                    </li>
                                                    <li><a href="#"><i class="ti-location-arrow text-primary"></i>Location</a>
                                                    </li>
                                                    <li><a href="#"><i class="ti-camera text-primary"></i>Camera</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <span class="toggle-dropdown" data-toggle="dropdown"
                                                      aria-expanded="false" aria-haspopup="true" role="menu">
                                                    <i class="ti-more-alt more"></i>
                                                </span>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Profile</a>
                                                    </li>
                                                    <li><a href="#">Media</a>
                                                    </li>
                                                    <li><a href="#">Mute</a>
                                                    </li>
                                                    <li><a href="#">More</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!--</div>-->
                                <div class="chat-conversation">
                                    <ul class="conversation-list">
                                        <li class="clearfix odd conversers1">

                                            <div class="conversation-text">
                                                <div class="ctext-wrap m-t-10">
                                                    <p class="text-left">
                                                        Hello Wilton, are the review papers ready?
                                                        <i class="text-right">8:31 pm</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix  m-t-10 conversers2">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p>
                                                        Not yet, it will take a bit of time for you to get them.
                                                        <br><i class="text-right">8:31 pm</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd m-t-10 conversers1">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p class="text-left">
                                                        Treat this on urgent Basis.
                                                        <i class="text-right">8:33 pm</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix  m-t-10 conversers2">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p>
                                                        I will make it as early as possible.
                                                        <br><i class="text-right">8:34 pm</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd m-t-10 conversers1">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p class="text-left">
                                                        Okay.
                                                        <i class="text-right">8:35 pm</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix m-t-10 conversers2">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p>
                                                        If there is anything else..
                                                        <br><i class="text-right">8:35 pm</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form id="main_input_box">
                                        <div class="row">
                                            <div class="col-xs-12 m-b-15">
                                                <div class="input-group text-field">
                                                    <input type="search"
                                                           class="form-control chat-input custom_textbox"
                                                           id="custom_textbox" placeholder="Type a message"
                                                           required>
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-success send-btn"
                                                            type="submit"><i
                                                                class="menu-icon ti-location-arrow text-white"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--rightside bar -->
        <div id="right">
            <div id="right-slim">
                <div class="rightsidebar-right">
                    <div class="rightsidebar-right-content">
                        <div class="panel-tabs">
                            <ul class="nav nav-tabs nav-float" role="tablist">
                                <li class="active text-center">
                                    <a href="#r_tab1" role="tab" data-toggle="tab"><i
                                                class="fa fa-fw ti-comments"></i></a>
                                </li>
                                <li class="text-center">
                                    <a href="#r_tab2" role="tab" data-toggle="tab"><i class="fa fa-fw ti-bell"></i></a>
                                </li>
                                <li class="text-center">
                                    <a href="#r_tab3" role="tab" data-toggle="tab"><i
                                                class="fa fa-fw ti-settings"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="r_tab1">
                                <div id="slim_t1">
                                    <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                        <i class="menu-icon  fa fa-fw ti-user"></i>
                                        Contacts
                                    </h5>
                                    <ul class="list-unstyled margin-none">
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar6.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-primary"></i>
                                                Annette
                                            </a>
                                        </li>
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-primary"></i>
                                                Jordan
                                            </a>
                                        </li>
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar2.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-primary"></i>
                                                Stewart
                                            </a>
                                        </li>
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar3.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-warning"></i>
                                                Alfred
                                            </a>
                                        </li>
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar4.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-danger"></i>
                                                Eileen
                                            </a>
                                        </li>
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar5.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-muted"></i>
                                                Robert
                                            </a>
                                        </li>
                                        <li class="rightsidebar-contact-wrapper">
                                            <a class="rightsidebar-contact" href="#">
                                                <img src="img/authors/avatar7.jpg"
                                                     class="img-circle pull-right" alt="avatar-image">
                                                <i class="fa fa-circle text-xs text-muted"></i>
                                                Cassandra
                                            </a>
                                        </li>
                                    </ul>

                                    <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                        <i class="fa fa-fw ti-export"></i>
                                        Recent Updates
                                    </h5>
                                    <div>
                                        <ul class="list-unstyled">
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-comments-smiley fa-fw text-primary"></i>
                                                    New Comment
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-twitter-alt fa-fw text-success"></i>
                                                    3 New Followers
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-email fa-fw text-info"></i>
                                                    Message Sent
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-write fa-fw text-warning"></i>
                                                    New Task
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-export fa-fw text-danger"></i>
                                                    Server Rebooted
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-info-alt fa-fw text-primary"></i>
                                                    Server Not Responding
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-shopping-cart fa-fw text-success"></i>
                                                    New Order Placed
                                                </a>
                                            </li>
                                            <li class="rightsidebar-notification">
                                                <a href="#">
                                                    <i class="fa ti-money fa-fw text-info"></i>
                                                    Payment Received
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="r_tab2">
                                <div id="slim_t2">
                                    <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                        <i class="fa fa-fw ti-bell"></i>
                                        Notifications
                                    </h5>
                                    <ul class="list-unstyled m-t-15 notifications">
                                        <li>
                                            <a href="" class="message icon-not striped-col">
                                                <img class="message-image img-circle"
                                                     src="img/authors/avatar3.jpg" alt="avatar-image">

                                                <div class="message-body">
                                                    <strong>John Doe</strong>
                                                    <br>
                                                    5 members joined today
                                                    <br>
                                                    <small class="noti-date">Just now</small>
                                                </div>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="message icon-not">
                                                <img class="message-image img-circle"
                                                     src="img/authors/avatar.jpg" alt="avatar-image">
                                                <div class="message-body">
                                                    <strong>Tony</strong>
                                                    <br>
                                                    likes a photo of you
                                                    <br>
                                                    <small class="noti-date">5 min</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="message icon-not striped-col">
                                                <img class="message-image img-circle"
                                                     src="img/authors/avatar6.jpg" alt="avatar-image">

                                                <div class="message-body">
                                                    <strong>John</strong>
                                                    <br>
                                                    Dont forgot to call...
                                                    <br>
                                                    <small class="noti-date">11 min</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="message icon-not">
                                                <img class="message-image img-circle"
                                                     src="img/authors/avatar1.jpg" alt="avatar-image">
                                                <div class="message-body">
                                                    <strong>Jenny Kerry</strong>
                                                    <br>
                                                    Done with it...
                                                    <br>
                                                    <small class="noti-date">1 Hour</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="message icon-not striped-col">
                                                <img class="message-image img-circle"
                                                     src="img/authors/avatar7.jpg" alt="avatar-image">

                                                <div class="message-body">
                                                    <strong>Ernest Kerry</strong>
                                                    <br>
                                                    2 members joined today
                                                    <br>
                                                    <small class="noti-date">3 Days</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-right noti-footer"><a href="#">View All Notifications <i
                                                        class="ti-arrow-right"></i></a></li>
                                    </ul>
                                    <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                        <i class="fa fa-fw ti-check-box"></i>
                                        Tasks
                                    </h5>
                                    <ul class="list-unstyled m-t-15">
                                        <li>
                                            <div>
                                                <p>
                                                    <span>Button Design</span>
                                                    <small class="pull-right text-muted">40%</small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success"
                                                         role="progressbar"
                                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 40%">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <p>
                                                    <span>Theme Creation</span>
                                                    <small class="pull-right text-muted">20%</small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 20%">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <p>
                                                    <span>XYZ Task To Do</span>
                                                    <small class="pull-right text-muted">60%</small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar progress-bar-warning"
                                                         role="progressbar"
                                                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 60%">
                                                        <span class="sr-only">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <p>
                                                    <span>Transitions Creation</span>
                                                    <small class="pull-right text-muted">80%</small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar"
                                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 80%">
                                                        <span class="sr-only">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="text-right"><a href="#">View All Tasks <i
                                                        class="ti-arrow-right"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="r_tab3">
                                <div id="slim_t3">

                                    <h5 class="rightsidebar-right-heading text-uppercase gen-sett-m-t text-xs">
                                        <i class="fa fa-fw ti-settings"></i>
                                        General
                                    </h5>
                                    <ul class="list-unstyled settings-list m-t-10">
                                        <li>
                                            <label for="status">Available</label>
                                            <span class="pull-right">
                                            <input type="checkbox" id="status" name="my-checkbox" checked>
                                        </span>
                                        </li>
                                        <li>
                                            <label for="email-auth">Login with Email</label>
                                            <span class="pull-right">
                                            <input type="checkbox" id="email-auth" name="my-checkbox">
                                        </span>
                                        </li>
                                        <li>
                                            <label for="update">Auto Update</label>
                                            <span class="pull-right">
                                            <input type="checkbox" id="update" name="my-checkbox">
                                        </span>
                                        </li>

                                    </ul>
                                    <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                        <i class="fa fa-fw ti-volume"></i>
                                        Sound & Notification
                                    </h5>
                                    <ul class="list-unstyled settings-list m-t-10">
                                        <li>
                                            <label for="chat-sound">Chat Sound</label>
                                            <span class="pull-right">
                                            <input type="checkbox" id="chat-sound" name="my-checkbox" checked>
                                        </span>
                                        </li>
                                        <li>
                                            <label for="noti-sound">Notification Sound</label>
                                            <span class="pull-right">
                                            <input type="checkbox" id="noti-sound" name="my-checkbox">
                                        </span>
                                        </li>
                                        <li>
                                            <label for="remain">Remainder </label>
                                            <span class="pull-right">
                                            <input type="checkbox" id="remain" name="my-checkbox" checked>
                                        </span>

                                        </li>
                                        <li>
                                            <label for="vol">Volume</label>
                                            <input type="range" id="vol" min="0" max="100" value="15">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#right -->
        <div class="background-overlay"></div>
    </section>
    @endsection