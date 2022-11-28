<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login Inventaris Apps</h1>
                    </div>
                    <form action="<?= BASEURL ?>/login/auth" method="post">
                        <?php if (Flasher::check()) : ?>
                            <?php $flash = Flasher::flash() ?>
                            <div class="alert alert-<?= $flash['tipe'] ?> alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <?= $flash['pesan'] ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" required>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit" name="login">Login</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="mt-5 mb-3 pt-2 text-center"></h3>


