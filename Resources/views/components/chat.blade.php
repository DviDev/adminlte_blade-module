@push('scripts')
    <script>
        // SLIMSCROLL FOR CHAT WIDGET
        $('#chat-box').overlayScrollbars({
            height: '250px'
        })
    </script>
@endpush
<div>
    <!-- Conversations are loaded here -->
    <div class="direct-chat-messages">
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Davi Menezes</span>
                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="{{asset("assets/modules/lte/distimg/user1-128x128.jpg")}}"
                 alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                Is this template really for free? That's unbelievable!
            </div>
            <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->
        <!-- Message to the right -->
        <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="{{asset("assets/modules/lte/distimg/user3-128x128.jpg")}}"
                 alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                You better believe it!
            </div>
            <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Davi Menezes</span>
                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="{{asset("assets/modules/lte/distimg/user1-128x128.jpg")}}"
                 alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                Working with AdminLTE on a great new app! Wanna join?
            </div>
            <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->
        <!-- Message to the right -->
        <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="{{asset("assets/modules/lte/distimg/user3-128x128.jpg")}}"
                 alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                I would love to.
            </div>
            <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->
    </div>
    <!--/.direct-chat-messages-->
    <!-- Contacts are loaded here -->
    <div class="direct-chat-contacts">
        <ul class="contacts-list">
            <li>
                <a href="#">
                    <img class="contacts-list-img" src="{{asset("assets/modules/lte/distimg/user1-128x128.jpg")}}"
                         alt="User Avatar">
                    <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                </a>
            </li>
            <!-- End Contact Item -->
            <li>
                <a href="#">
                    <img class="contacts-list-img" src="{{asset("assets/modules/lte/distimg/user7-128x128.jpg")}}"
                         alt="User Avatar">
                    <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                        <span class="contacts-list-msg">I will be waiting for...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                </a>
            </li>
            <!-- End Contact Item -->
            <li>
                <a href="#">
                    <img class="contacts-list-img" src="{{asset("assets/modules/lte/distimg/user3-128x128.jpg")}}"
                         alt="User Avatar">
                    <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                        <span class="contacts-list-msg">I'll call you back at...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                </a>
            </li>
            <!-- End Contact Item -->
            <li>
                <a href="#">
                    <img class="contacts-list-img" src="{{asset("assets/modules/lte/distimg/user5-128x128.jpg")}}"
                         alt="User Avatar">
                    <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                        <span class="contacts-list-msg">Where is your new...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                </a>
            </li>
            <!-- End Contact Item -->
            <li>
                <a href="#">
                    <img class="contacts-list-img" src="{{asset("assets/modules/lte/distimg/user6-128x128.jpg")}}"
                         alt="User Avatar">
                    <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                        <span class="contacts-list-msg">Can I take a look at...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                </a>
            </li>
            <!-- End Contact Item -->
            <li>
                <a href="#">
                    <img class="contacts-list-img" src="{{asset("assets/modules/lte/distimg/user8-128x128.jpg")}}"
                         alt="User Avatar">
                    <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                        <span class="contacts-list-msg">Never mind I found...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                </a>
            </li>
            <!-- End Contact Item -->
        </ul>
        <!-- /.contacts-list -->
    </div>
    <!-- /.direct-chat-pane -->
</div>
