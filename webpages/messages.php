<?php include 'common/main-header.php'; ?>

<div class="top-main" style="display:table; width:100%;">

    <div style="display:table-row">
        
        <!--Display Messages -->
        <div style="display: table-cell;">
            <h2>Chats</h2>
        </div>

        <!-- Owner Name, Pet Name Profile Pic -->
        <div style="display:table-cell;">
            <img src="img/cooper1.jpg" alt="" width="32" height="32" class="rounded-circle me-2 " style="float:right">
            <div class="home-user-content">
                <h1>Bill</h1>
                <h3>Cooper</h3>
            </div>
        </div>
    </div>
</div>
<hr style="border-style:solid;border-width:3px; margin:0;border-color:black;">
<div class="messages">
    <div class="box-container-messages" style="margin:0;height:100%">
        <!-- left box -->
        <div class="left-box-messages">
            <div class="msg-img">
                <table>
                    <tr><td><img src="img/brady1.jpg" alt=""></td></tr>
                    <tr><td><img src="img/brady2.jpg" alt=""></td></tr>
                    <tr><td><img src="img/brady3.jpg" alt=""></td></tr>
                    <tr><td><img src="img/brady4.jpg" alt=""></td></tr>
                    <tr><td><img src="img/brady5.jpg" alt=""></td></tr>
                    <tr><td><img src="img/tombrady.jpg" alt=""></td></tr>
                </table>
            </div>
        </div>

        <!-- right box -->
        <div class="right-box-messages">
            <div class="top-main" style="display:table; width:100%;">

                <div style="display:table-row">
                    
                    <!--Display owner name -->
                    <div style="display: table-cell;">
                        <h2>Tom Brady</h2>
                    </div>

                    <!-- view profile -->
                    <div style="display:table-cell;text-align:right;">
                        <button type="button" class="btn btn-info btn-lg">view profile</button>
                    </div>
                </div>
            </div>
            <div class="msg-send">
                <table>
                    <tr>
                        <td style="padding-right:4px">
                            <!-- plus circle emoji-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </td>
                        <td style="width:600px">
                            <!-- message box -->
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Message Tom Brady">
                                </div>
                            </form>
                        </td>
                        <td style="padding-left:4px">
                            <!-- send emoji -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                            </svg>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>