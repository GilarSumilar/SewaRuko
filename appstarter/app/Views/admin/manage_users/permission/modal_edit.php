<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Edit</span>
                    <span class="fw-light"> Permission </span>
                </h5>
                <button type="button" class="close fs-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">
                    Create a new row using this form, make sure you
                    fill them all
                </p>
                <form action="<?= base_url('admin') ?>/users_permission" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" id="id" name="id">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="" class="form-label">Permission</label>
                            <select name="group" id="permission" class="form-select" required>
                                <option value="">- Select -</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="editModal" class="btn btn-primary">
                            Edit Permission
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>