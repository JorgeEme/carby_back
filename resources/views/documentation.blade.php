<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free bootstrap documentation template">
    <title>Carby</title>
    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">




    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar-themes.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-treeview.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/postman.min.css') }}" rel="stylesheet">



    <link rel="shortcut icon" type="image/png" href="img/favicon.png" /> </head>

<body>
    <div class="page-wrapper toggled light-theme">
        <div class="modal dark-background" id="snippetModal" tabindex="-1" role="dialog" aria-labelledby="documentation-response-modal" style="display: none;">
        <div class="modal-dialog" role="document">
          <div class="modal-header">
            <div class="title">Example Response</div>
            <button type="button" class="close btn-circle" data-dismiss="modal" aria-label="Close">
              <div>
              <span id="closeModal" aria-hidden="true">×</span>
              </div>
            </button>
          </div>
          <div class="modal-content">
            <div class="modal-body" style="width: 540.5px;">
              <pre class="  language-javascript">
                  <code class=" language-javascript"></code>
              </pre>
            </div>
          </div>
        </div>
      </div>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand text-white font-weight-bold">API Documentation</div>
                <!-- sidebar-header  -->
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <div id="tree"></div>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </nav>
        <!-- page-content  -->
        <main class="page-content">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid">
                <div class="row d-flex align-items-center p-3 border-bottom">
                    <div class="col-md-1">
                        <a id="toggle-sidebar" class="btn rounded-0 p-3" href="#"> <i class="fas fa-bars"></i> </a>
                    </div>
                    <div class="col-md-9"></div>
                    <div class="col-md-2 text-left">
                    </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-12 pr-lg-9" id="doc-body">
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12">
                                <div class="api-information">
                                    <div class="collection-name">
                                        <p>Carby</p>
                                    </div>
                                    <div class="collection-description">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="1">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Register <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/register</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Register">
                                                  <code>

{
    "email": "testing@gmail.com",
    "password": "123456789",
    "name": "Test"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Register</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="1" data-response-info="response_1">Register</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="1"  data-id="response_1">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Register">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/register

{
    "email": "testing@gmail.com",
    "password": "123456789",
    "name": "Test"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="2">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Login <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/login</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Login">
                                                  <code>

{
    "email": "testing@gmail.com",
    "password": "123456789"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Login</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="2" data-response-info="response_2">Login</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="2"  data-id="response_2">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Login">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/login

{
    "email": "testing@gmail.com",
    "password": "123456789"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="3">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Logout <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/logout</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Logout</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="3" data-response-info="response_3">Logout</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="3"  data-id="response_3">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Logout">
                                                <code class="is-highlighted">
GET https://m.carby.info/api/users/logout</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="4">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Upload Card <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/upload-card</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">formdata</span></div>
                                        <hr>
                                              <div class="param row">
                                                <div class="name col-md-3 col-xs-12">media[]</div>
                                                <div class="value col-md-9 col-xs-12">None</div>
                                                <div class="description col-md-9 col-xs-12"><p>None</p>
                                                </div>
                                              </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Upload Card</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="4" data-response-info="response_4">Upload Card</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="4"  data-id="response_4">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Upload Card">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/users/upload-card</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="5">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Upload Nif <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/upload-nif</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">formdata</span></div>
                                        <hr>
                                              <div class="param row">
                                                <div class="name col-md-3 col-xs-12">media[]</div>
                                                <div class="value col-md-9 col-xs-12">None</div>
                                                <div class="description col-md-9 col-xs-12"><p>None</p>
                                                </div>
                                              </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Upload Nif</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="5" data-response-info="response_5">Upload Nif</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="5"  data-id="response_5">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Upload Nif">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/users/upload-nif</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="6">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Get Current User <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/current-user</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Get Current User</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="6" data-response-info="response_6">Get Current User</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="6"  data-id="response_6">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Get Current User">
                                                <code class="is-highlighted">
GET https://m.carby.info/api/users/current-user</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="7">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Get User By Id <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/2/get</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Get User By Id</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="7" data-response-info="response_7">Get User By Id</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="7"  data-id="response_7">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Get User By Id">
                                                <code class="is-highlighted">
GET https://m.carby.info/api/users/2/get</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="8">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="PUT method" >PUT</span>
                                            Edit Profile <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/edit</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper is-expandable" data-title="Edit Profile">
                                                  <code>

{
    "name": "Test",
    "surnames": "Test",
    "phone": "666666666",
    "address": "Carrer Test",
    "birth_date": "1999-01-01"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Edit Profile</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="8" data-response-info="response_8">Edit Profile</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="8"  data-id="response_8">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper is-expandable" data-title="Edit Profile">
                                                <code class="is-highlighted">
PUT https://m.carby.info/api/users/edit

{
    "name": "Test",
    "surnames": "Test",
    "phone": "666666666",
    "address": "Carrer Test",
    "birth_date": "1999-01-01"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="9">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Change Password <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/change-password</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Change Password">
                                                  <code>

{
    "current_password": "123456789",
    "new_password": "1234567890"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Change Password</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="9" data-response-info="response_9">Change Password</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="9"  data-id="response_9">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Change Password">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/users/change-password

{
    "current_password": "123456789",
    "new_password": "1234567890"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="10">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="PUT method" >PUT</span>
                                            Notifications <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/notifications</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Notifications">
                                                  <code>

{
    "notifications": true
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Notifications</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="10" data-response-info="response_10">Notifications</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="10"  data-id="response_10">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Notifications">
                                                <code class="is-highlighted">
PUT https://m.carby.info/api/users/notifications

{
    "notifications": true
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="11">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="DELETE method" >DELETE</span>
                                            Delete Account (Not Used) <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/delete</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Delete Account (Not Used)</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="11" data-response-info="response_11">Delete Account (Not Used)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="11"  data-id="response_11">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Delete Account (Not Used)">
                                                <code class="is-highlighted">
DELETE https://m.carby.info/api/users/delete</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="12">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Forget Password <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/forget</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Forget Password">
                                                  <code>

{
    "email": "testing@gmail.com"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Forget Password</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="12" data-response-info="response_12">Forget Password</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="12"  data-id="response_12">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Forget Password">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/forget

{
    "email": "testing@gmail.com"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="13">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Rate App <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/rate</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Rate App">
                                                  <code>

{
    "rating": 5,
    "comment": "Nice app!"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Rate App</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="13" data-response-info="response_13">Rate App</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="13"  data-id="response_13">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Rate App">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/rate

{
    "rating": 5,
    "comment": "Nice app!"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="14">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Update Device Token <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/device-token</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Update Device Token">
                                                  <code>

{
    "device_token": "Device Token",
    "device_type" : 1
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Update Device Token</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="14" data-response-info="response_14">Update Device Token</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="14"  data-id="response_14">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Update Device Token">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/users/device-token

{
    "device_token": "Device Token",
    "device_type" : 1
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="15">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Get Faqs <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/faqs</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Get Faqs</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="15" data-response-info="response_15">Get Faqs</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="15"  data-id="response_15">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Get Faqs">
                                                <code class="is-highlighted">
GET https://m.carby.info/api/faqs</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="16">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Get Available Vehicles By Distance <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/vehicles/get-available</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Get Available Vehicles By Distance">
                                                  <code>

{
    "lat": "41.372559",
    "lng": "2.097661"
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Get Available Vehicles By Distance</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="16" data-response-info="response_16">Get Available Vehicles By Distance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="16"  data-id="response_16">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Get Available Vehicles By Distance">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/vehicles/get-available

{
    "lat": "41.372559",
    "lng": "2.097661"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="17">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Get Available Vehicles By Distance (option pro) <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/vehicles/get-available</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper is-expandable" data-title="Get Available Vehicles By Distance (option pro)">
                                                  <code>

{
    "lat": "41.372887",
    "lng": "2.092287",
    "topRightLat" :  "41.430168",
    "topRightLng" : "2.153267",
    "bottomLeftLat" : "41.322859",
    "bottomLeftLng" : "2.029904",
    "last_max_distance" : 0
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Get Available Vehicles By Distance (option pro)</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="17" data-response-info="response_17">Get Available Vehicles By Distance (option pro)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="17"  data-id="response_17">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper is-expandable" data-title="Get Available Vehicles By Distance (option pro)">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/vehicles/get-available

{
    "lat": "41.372887",
    "lng": "2.092287",
    "topRightLat" :  "41.430168",
    "topRightLng" : "2.153267",
    "bottomLeftLat" : "41.322859",
    "bottomLeftLng" : "2.029904",
    "last_max_distance" : 0
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="18">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Vehicle Details <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/vehicles/3</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Vehicle Details</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="18" data-response-info="response_18">Vehicle Details</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="18"  data-id="response_18">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Vehicle Details">
                                                <code class="is-highlighted">
GET https://m.carby.info/api/vehicles/3</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="19">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Pay <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/journey/3?lat=41.384215&lng=2.154487</div>

                                    <div class="request-body">
                                        <div class="body-heading">PARAMS</div>
                                        <hr>
                                          <div class="param row">
                                            <div class="name col-md-3 col-xs-12">lat</div>
                                            <div class="value col-md-9 col-xs-12">41.384215</div>
                                            <div class="description col-md-9 col-xs-12"><p>None</p>
                                            </div>
                                          </div>
                                          <div class="param row">
                                            <div class="name col-md-3 col-xs-12">lng</div>
                                            <div class="value col-md-9 col-xs-12">2.154487</div>
                                            <div class="description col-md-9 col-xs-12"><p>None</p>
                                            </div>
                                          </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Pay</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="19" data-response-info="response_19">Pay</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="19"  data-id="response_19">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Pay">
                                                <code class="is-highlighted">
GET https://m.carby.info/journey/3?lat=41.384215&lng=2.154487</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="20">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Book Vehicle <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/vehicles/3/book</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Book Vehicle</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="20" data-response-info="response_20">Book Vehicle</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="20"  data-id="response_20">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Book Vehicle">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/vehicles/3/book</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="21">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Start Journey <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/vehicles/3/start-journey</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Start Journey</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="21" data-response-info="response_21">Start Journey</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="21"  data-id="response_21">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Start Journey">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/vehicles/3/start-journey</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="22">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            All Journeys <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/users/journeys</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">All Journeys</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="22" data-response-info="response_22">All Journeys</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="22"  data-id="response_22">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="All Journeys">
                                                <code class="is-highlighted">
GET https://m.carby.info/api/users/journeys</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="23">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="PUT method" >PUT</span>
                                            Cancel Booking <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/book/1/cancel</div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Cancel Booking</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="23" data-response-info="response_23">Cancel Booking</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="23"  data-id="response_23">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Cancel Booking">
                                                <code class="is-highlighted">
PUT https://m.carby.info/api/book/1/cancel</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="24">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Create Issue <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">https://m.carby.info/api/issues/create</div>

                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper is-expandable" data-title="Create Issue">
                                                  <code>

{
    "journey_id" : 1,
    "subject" : "Test Subject",
    "description" : "Test Description",
    "images"  : ["base64 - NO OBLIGATORIO ENVIARLO POR SI QUEREIS IMPLEMENTAR LAS IMAGENES EN LAS INCIDENCIAS", "base64 - NO OBLIGATORIO ENVIARLO POR SI QUEREIS IMPLEMENTAR LAS IMAGENES EN LAS INCIDENCIAS"]
}
                                                  </code>
                                              </pre>
                                            </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Example Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Create Issue</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="24" data-response-info="response_24">Create Issue</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="24"  data-id="response_24">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper is-expandable" data-title="Create Issue">
                                                <code class="is-highlighted">
POST https://m.carby.info/api/issues/create

{
    "journey_id" : 1,
    "subject" : "Test Subject",
    "description" : "Test Description",
    "images"  : ["base64 - NO OBLIGATORIO ENVIARLO POR SI QUEREIS IMPLEMENTAR LAS IMAGENES EN LAS INCIDENCIAS", "base64 - NO OBLIGATORIO ENVIARLO POR SI QUEREIS IMPLEMENTAR LAS IMAGENES EN LAS INCIDENCIAS"]
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script href="{{ asset('js/bootstrap-treeview.min.js') }}" defer></script>
    <script href="{{ asset('js/bootstrap-treeview.js') }}" defer></script>
    <script href="{{ asset('js/main.min.js') }}" defer></script>
    <script href="{{ asset('js/main.js') }}" defer></script>


    <script type="application/javascript">
        var data = [{'text': 'Auth', 'nodes': [{'text': 'Register', 'href': '#1', 'method': 'POST'}, {'text': 'Login', 'href': '#2', 'method': 'POST'}, {'text': 'Logout', 'href': '#3', 'method': 'GET'}, {'text': 'Upload Card', 'href': '#4', 'method': 'POST'}, {'text': 'Upload Nif', 'href': '#5', 'method': 'POST'}, {'text': 'Get Current User', 'href': '#6', 'method': 'GET'}, {'text': 'Get User By Id', 'href': '#7', 'method': 'GET'}, {'text': 'Edit Profile', 'href': '#8', 'method': 'PUT'}, {'text': 'Change Password', 'href': '#9', 'method': 'POST'}, {'text': 'Notifications', 'href': '#10', 'method': 'PUT'}, {'text': 'Delete Account (Not Used)', 'href': '#11', 'method': 'DELETE'}, {'text': 'Forget Password', 'href': '#12', 'method': 'POST'}, {'text': 'Rate App', 'href': '#13', 'method': 'POST'}, {'text': 'Update Device Token', 'href': '#14', 'method': 'POST'}], 'icon': 'fas fa-folder', 'selectable': 'false'}, {'text': 'Faqs', 'nodes': [{'text': 'Get Faqs', 'href': '#15', 'method': 'GET'}], 'icon': 'fas fa-folder', 'selectable': 'false'}, {'text': 'Vehicles', 'nodes': [{'text': 'Get Available Vehicles By Distance', 'href': '#16', 'method': 'POST'}, {'text': 'Get Available Vehicles By Distance (option pro)', 'href': '#17', 'method': 'POST'}, {'text': 'Vehicle Details', 'href': '#18', 'method': 'GET'}, {'text': 'Pay', 'href': '#19', 'method': 'GET'}, {'text': 'Book Vehicle', 'href': '#20', 'method': 'POST'}, {'text': 'Start Journey', 'href': '#21', 'method': 'POST'}, {'text': 'All Journeys', 'href': '#22', 'method': 'GET'}, {'text': 'Cancel Booking', 'href': '#23', 'method': 'PUT'}], 'icon': 'fas fa-folder', 'selectable': 'false'}, {'text': 'Issue', 'nodes': [{'text': 'Create Issue', 'href': '#24', 'method': 'POST'}], 'icon': 'fas fa-folder', 'selectable': 'false'}]
        $('#tree').treeview({
            data: data,
            levels: 10,
            expandIcon: 'fas fa-caret-right',
            collapseIcon: 'fas fa-caret-down',
            enableLinks: true,
            showIcon: true,
            showMethod: true
        });
    </script>

</body>

</html>
