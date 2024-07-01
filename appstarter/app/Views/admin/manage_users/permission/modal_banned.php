<div class="modal fade" id="bannedModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Banned</span>
                    <span class="fw-light"> User </span>
                </h5>
                <button type="button" class="close fs-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">
                    Aksi ini akan melakukan <span class="text-danger">BANNED</span> terhadap USER yang dituju sehingga USER tidak dapat melakukan aksi apapun sampai di <span class="text-success">UNBANNED</span>
                </p>
                <form action="<?= base_url('admin') ?>/users_permission/ban" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="" class="form-label">Reason <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="reason" required placeholder="Reason banned...">
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="editModal" class="btn btn-danger">
                            BANNED
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>