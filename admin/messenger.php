<?php
require_once('include/header.php');
if (!isset($_SESSION['email'])) {
    header('location: signin.php');
}
?>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
        </div>

        <?php
        if (!isset($_SESSION['email'])) {
            header('location: signin.php');
        }
        ?>

        <div class="col-md-9 col-lg-9">
            <div class="row">
                <div class="col-3">
                    <div class="pagetitle">
                        <h1>Contact</h1>
                        <nav>
                            <ol class="breadcrumb" style="background-color:#fff!important;">
                                <li style="color: #6fd943;" class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">Messenger</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-3"></div>
                <div class="col-4"></div>
                <div class="col-2">
                    <div class="pagetitle" style="background-color:none!important;"></div>
                </div>

                <div class="col-md-12">
                    <div class="dash-content">
                        <div class="page-header">
                            <div class="page-block"></div>
                        </div>

                        <div class="card">
                            <div class="card-body table-border-style">
                                <div class="main-content">
                                    <div class="member-list">
                                        <div class="messenger-listView">
										
                                            <div class="m-header">
                                                <nav>
                                                    <nav class="m-header-right">
                                                        <a href="#" class="listView-x"><i class="ti ti-times"></i></a>
                                                    </nav>
                                                </nav>
                                                <input type="text" class="messenger-search" placeholder="Search">
                                                <div class="messenger-listView-tabs" style="background: #f7f7f7;">
                                                    <a href="#" class="active-tab" data-view="users">
                                                        <i class="fa fa-clock-o" aria-hidden="true" title="Recent"></i>
                                                    </a>
                                                    <a href="#" data-view="groups" class="">
                                                        <i class="fa fa-user-circle" aria-hidden="true" title="Members"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show messenger-tab app-scroll" data-view="users">
                                                <div class="favorites-section">
                                                    <table class="messenger-list-item m-li-divider">
                                                        <tbody>
                                                            <tr data-action="0">
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="all_members messenger-tab app-scroll" data-view="groups" style="display: none;">
                                                <table class="messenger-list-item" data-contact="9">
                                                    <tbody>
                                                        <tr data-action="0">
                                                            <td style="position: relative"></td>
                                                            <td>
                                                                <p data-id="user_9">munna</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="messenger-tab app-scroll" data-view="search" style="display: none;">
                                                <p class="messenger-title">Search</p>
                                                <div class="search-records">
                                                    <p class="message-hint center-el"><span>Type to search..</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-interface">
									<hr/>
									<span style="text-align:center;"> Faysal Kabir </span>
									<hr/>
                                        <div id="chat-list">
</hr>
                                            <!-- Chat data will be inserted here dynamically -->
                                        </div>
                                        <div class="chat-input">
                                            <input type="text" id="chat-message" placeholder="Type your message here...">
                                            <button id="send-message">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="scripts.js"></script>
<?php require_once('include/footer.php'); ?>
