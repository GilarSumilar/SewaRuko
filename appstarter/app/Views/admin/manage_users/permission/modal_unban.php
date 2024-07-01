<div class="modal fade" id="unbanModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Unban</span>
                    <span class="fw-light"> User </span>
                </h5>
                <button type="button" class="close fs-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">
                    Aksi ini akan melakukan <span class="text-success">UNBANNED</span> terhadap USER yang dituju sehingga USER dapat melakukan aksi apapun setelah di <span class="text-danger">BANNED</span>
                </p>
                <form action="<?= base_url('admin') ?>/users_permission/unban" method="post">
                    <input type="hidden" id="id" name="id">
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <label for="" class="form-label">Reason <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="reason" required placeholder="Reason banned...">
                        </div>
                    </div> -->
                    <div class="modal-footer border-0">
                        <button type="submit" id="editModal" class="btn btn-warning">
                            UNBANNED
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>