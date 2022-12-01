<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.grid-js'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/gridjs/gridjs.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Tables
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Product
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-sm-auto ms-auto">
            <div class="hstack gap-2 mb-2">
                <button type="button" class="btn btn-soft-primary add-btn" data-bs-toggle="modal" id="create-btn"
                    data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="row">
        <!--paket1-->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0">
                <div class="card-body p-4 m-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-semibold">Legiseu Package</h5>
                            <p class="text-muted mb-0">Starting From</p>
                        </div>
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary">
                                <i class="ri-stack-fill fs-20"></i>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">2
                                JT</span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>4</b> Person
                                        <div><b>1</b> orang Leader</div>
                                        <div><b>2</b> orang Officer</div>
                                        <div><b>1</b> orang Liaison Officer CPW</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>4</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Ijab
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Qobul
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Kordinasi Kesemua Vendor
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse1">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Conffety / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flasmob
                                        </div>
                                    </div>
                                </div>
                        </ul>
                        <div class="" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                            aria-controls="collapse">
                            <a href="javascript:void(0);" class="card-link link-secondary">Lihat selengkapnya <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>
                        <hr>
                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2 mb-2 d-flex justify-content-between">
                                <button type="button" class="btn btn-soft-success edit-btn" data-bs-toggle="modal"
                                    id="edit-btn" data-bs-target="#showModal"><i></i>
                                    Edit</button>
                                <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                                    id="clear-btn" data-bs-target="#showModal"><i></i>
                                    hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--paket1-->
        <!--paket2-->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body p-4 m-2">

                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-semibold">Niskala Package</h5>
                            <p class="text-muted mb-0">Starting</p>
                        </div>
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary">
                                <i class="ri-stack-fill fs-20"></i>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">3
                                JT</span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>6</b> Person
                                        <div><b>1</b> Orang Leader</div>
                                        <div><b>2</b> Orang Officer</div>
                                        <div><b>1</b> Orang Liaison Officer CPW</div>
                                        <div><b>1</b> Orang Liaison Officer CPP</div>
                                        <div><b>1</b> Orang Content Creator</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>6</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Ijab
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Qobul
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Kordinasi Kesemua Vendor
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampingan Siraman
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Ballon Helium
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Confenty / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flashmob
                                        </div>
                                    </div>
                                </div>
                        </ul>
                        <div class="" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                            aria-controls="collapse">
                            <a href="javascript:void(0);" class="card-link link-secondary">Lihat selengkapnya <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>
                        <hr>
                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2 mb-2 d-flex justify-content-between">
                                <button type="button" class="btn btn-soft-success edit-btn" data-bs-toggle="modal"
                                    id="edit-btn" data-bs-target="#showModal"><i></i>
                                    Edit</button>
                                <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                                    id="clear-btn" data-bs-target="#showModal"><i></i>
                                    hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--paket2-->

        <!--paket3-->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body p-4 m-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-semibold">Abimana Package</h5>
                            <p class="text-muted mb-0">Starting From</p>
                        </div>
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary">
                                <i class="ri-stack-fill fs-20"></i>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">4
                                JT</span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Pembawa Acara Akad s/d Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>6</b> Person
                                        <div><b>1</b> Orang Leader</div>
                                        <div><b>2</b> Orang Officer</div>
                                        <div><b>1</b> Orang Liaison Officer CPW</div>
                                        <div><b>1</b> Orang Liaison Officer CPP</div>
                                        <div><b>1</b> Orang Content Creator</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>6</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse3">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Ijab
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Qobul
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Kordinasi Kesemua Vendor
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampingan Siraman
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 text-success me-1">
                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                Balon helium
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Conffenty / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flasmob
                                        </div>
                                    </div>
                                </div>
                    </div>
                    </ul>
                    <div class="" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                        aria-controls="collapse">
                        <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                            selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                    </div>
                    <hr>
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2 mb-2 d-flex justify-content-between">
                            <button type="button" class="btn btn-soft-success edit-btn" data-bs-toggle="modal"
                                id="edit-btn" data-bs-target="#showModal"><i></i>
                                Edit</button>
                            <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                                id="clear-btn" data-bs-target="#showModal"><i></i>
                                hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--paket3-->
        <!--paket4-->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0">
                <div class="card-body p-4 m-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-semibold">Adiluhung Package</h5>
                            <p class="text-muted mb-0">Starting From</p>
                        </div>
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary">
                                <i class="ri-stack-fill fs-20"></i>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">5
                                JT</span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Pembawa Acara Akad s/d Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>7</b> Person
                                        <div><b>1</b> Orang Leader</div>
                                        <div><b>3</b> Orang Officer</div>
                                        <div><b>1</b> Orang Liaison Officer CPW</div>
                                        <div><b>1</b> Orang Liaison Officer CPP</div>
                                        <div><b>1</b> Orang Content Creator</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>7</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Ijab
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Qobul
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Kordinasi Kesemua Vendor
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampinagn Siraman
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampinagn Fitting Busana
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 text-success me-1">
                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                Balon helium
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Conffenty / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Fire Works (Kembang Api)
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flasmob
                                        </div>
                                    </div>
                                </div>
                    </div>
                    </ul>
                    <div class="" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                        aria-controls="collapse">
                        <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                            selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                    </div>
                    <hr>
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2 mb-2 d-flex justify-content-between">
                            <button type="button" class="btn btn-soft-success edit-btn" data-bs-toggle="modal"
                                id="edit-btn" data-bs-target="#showModal"><i></i>
                                Edit</button>
                            <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                                id="clear-btn" data-bs-target="#showModal"><i></i>
                                hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--paket4-->
        <!--paket5-->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0">
                <div class="card-body p-4 m-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-semibold">Emerald Package</h5>
                            <p class="text-muted mb-0">Starting From</p>
                        </div>
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary">
                                <i class="ri-stack-fill fs-20"></i>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">6
                                JT</span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Pembawa Acara Akad s/d Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>7</b> Person
                                        <div><b>1</b> Orang Leader</div>
                                        <div><b>3</b> Orang Officer</div>
                                        <div><b>1</b> Orang Liaison Officer CPW</div>
                                        <div><b>1</b> Orang Liaison Officer CPP</div>
                                        <div><b>1</b> Orang Content Creator</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>7</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Ijab
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Qobul
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Kordinasi Kesemua Vendor
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampinagn Siraman
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampinagn Fitting Busana
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 text-success me-1">
                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                Balon helium
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Conffenty / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Fire Works (Kembang Api)
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Sexophone / Biola
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Smoke Boom
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flasmob
                                        </div>
                                    </div>
                                </div>
                    </div>
                    </ul>
                    <div class="" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                        aria-controls="collapse">
                        <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                            selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                    </div>
                    <hr>
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2 mb-2 d-flex justify-content-between">
                            <button type="button" class="btn btn-soft-success edit-btn" data-bs-toggle="modal"
                                id="edit-btn" data-bs-target="#showModal"><i></i>
                                Edit</button>
                            <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                                id="clear-btn" data-bs-target="#showModal"><i></i>
                                hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--paket5-->
        <!--paket6 -->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0">
                <div class="card-body p-4 m-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-semibold">Luxury Package</h5>
                            <p class="text-muted mb-0">Starting From</p>
                        </div>
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary">
                                <i class="ri-stack-fill fs-20"></i>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">8,5
                                JT</span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Pembawa Acara Akad s/d Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>8</b> Person
                                        <div><b>1</b> Orang Leader</div>
                                        <div><b>4</b> Orang Officer</div>
                                        <div><b>1</b> Orang Liaison Officer CPW</div>
                                        <div><b>1</b> Orang Liaison Officer CPP</div>
                                        <div><b>1</b> Orang Content Creator</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>7</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse6">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Ijab
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Teks Qobul
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Kordinasi Kesemua Vendor
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampinagn Siraman
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Pendampinagn Fitting Busana
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            2 Pcs Buku Tamu
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 text-success me-1">
                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                Balon helium
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Conffenty / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Fire Works (Kembang Api)
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Sexophone / Biola
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Dry Ice
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Smoke Boom
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flasmob
                                        </div>
                                    </div>
                                </div>
                    </div>
                    </ul>
                    <div class="" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                        aria-controls="collapse">
                        <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                            selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                    </div>
                    <hr>
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2 mb-2 d-flex justify-content-between">
                            <button type="button" class="btn btn-soft-success edit-btn" data-bs-toggle="modal"
                                id="edit-btn" data-bs-target="#showModal"><i></i>
                                Edit</button>
                            <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                                id="clear-btn" data-bs-target="#showModal"><i></i>
                                hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--paket6-->
    </div><!-- end card -->
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/gridjs/gridjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/gridjs.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\kp-maheswarienterprise\resources\views/tables-gridjs.blade.php ENDPATH**/ ?>