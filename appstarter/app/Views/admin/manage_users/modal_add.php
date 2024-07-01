<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Add</span>
                    <span class="fw-light"> User Permission</span>
                </h5>
                <button type="button" class="close fs-1 fw-600" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">
                    Create a new row using this form, make sure you
                    fill them all
                </p>
                <form action="<?= base_url('admin') ?>/manage_users" method="post">
                    <div class="row">
                        <!-- <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Id</label>
                                <input id="id" name="id" type="text" class="form-control" placeholder="fill Id" />
                            </div>
                        </div> -->
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="username" class="form-label">User</label>
                                <select name="username" id="username" class="form-select" required>
                                    <option value="">- Select -</option>
                                    <?php foreach ($users as $user) : ?>
                                        <option value="<?= $user->username ?>"><?= $user->username ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12">
                            <label for="group" class="form-label">Permission</label>
                            <select name="group" id="group" class="form-select" required>
                                <option value="">- Select -</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="modal" class="btn btn-primary">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>