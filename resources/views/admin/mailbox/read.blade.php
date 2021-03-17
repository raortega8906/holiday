@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Mailbox - Read</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Mailbox</li>
                            <li class="breadcrumb-item active">Read</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/admin/inbox" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Folders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-inbox"></i> Inbox
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-envelope"></i> Sent
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-trash-alt"></i> Trash
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Mail</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i
                                            class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Message Subject Is Placed Here</h5>
                                    <h6>From: support@adminlte.io
                                        <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
                                </div>
                                <!-- /.mailbox-read-info -->
                                <div class="mailbox-controls with-border text-center">
                                    ------
                                </div>
                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message">
                                    <p>Hello John,</p>

                                    <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie
                                        chillwave put a bird
                                        on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan
                                        scenester mlkshk. Ethical
                                        master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table
                                        mlkshk fanny pack
                                        gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester
                                        chillwave 3 wolf moon
                                        asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt
                                        migas church-key tofu
                                        blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck
                                        selfies narwhal American
                                        Apparel.</p>
                                    <p>Thanks,<br>Jane</p>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer bg-white">
                                <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                    <li>
                                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                                Sep2014-report.pdf</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1,245 KB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                                App Description.docx</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1,245 KB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="mailbox-attachment-icon has-img"><img
                                                src="/adminlte/img/photo1.png" alt="Attachment"></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                                photo1.png</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>2.67 MB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="mailbox-attachment-icon has-img"><img
                                                src="/adminlte/img/photo2.png" alt="Attachment"></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                                photo2.png</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1.9 MB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply
                                    </button>
                                    <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward
                                    </button>
                                </div>
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete
                                </button>
                                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print
                                </button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.content-wrapper -->
        </section>
        <!-- /.content -->
    </div>

@endsection
