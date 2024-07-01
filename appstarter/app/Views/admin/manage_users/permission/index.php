<?= $this->extend('layouts/layout_admin/base') ?>

<?= $this->section('content') ?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Manage Users Permission</h4>
            </div>
        </div>
        <div class="card-body">
            <!-- Modal -->
            <?= $this->include('admin/manage_users/permission/modal_edit') ?>
            <?= $this->include('admin/manage_users/permission/modal_banned') ?>
            <?= $this->include('admin/manage_users/permission/modal_unban') ?>

            <div class="table-responsive">
                <table id="users" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Permission</th>
                            <th>Status Banned</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        $("#users").DataTable({
            pageLength: 5,
            ajax: {
                url: '<?= base_url('admin') ?>/users_permission/get_list_permission',
                type: 'POST'
            },
            columns: [{
                    data: 'no'
                },
                {
                    data: 'username'
                },
                {
                    data: 'group'
                },
                {
                    data: 'status'
                },
                {
                    data: 'actions'
                }
            ],
            processing: true,
            serverSide: true,
            columnDefs: [{
                targets: [0, 4],
                searchable: false,
                orderable: false
            }],
        });


        $(".close").click(function() {
            $("#bannedModal").modal("hide");
            $("#editModal").modal("hide");
            $("#unbanModal").modal("hide");
        });

        // $("#buttonBanned").click(function() {
        //     // $("#modal").modal("hide");
        //     $("#bannedModal").modal("show");
        // });

        $(document).on('click', '#buttonEdit', function() {
            $(".modal-body #id").val($(this).data('id'));
            // $(".modal-body #username").val($(this).data('username'));
            // $(".modal-body #phone_number").val($(this).data('phone-number'));
            // $(".modal-body #email").val($(this).data('email'));
            // $(".modal-body #permission").val($(this).data('permission'));

            // var data = [];
            // data['id'] = $(this).data('id');
            // data['name'] = $(this).data('username');
            // data['url'] = `<?= base_url('admin/users_permission') ?>`;

            // doUpdate(data);
        });

        $(document).on('click', '#buttonBanned', function() {
            $(".modal-body #id").val($(this).data('id'));
        });

        $(document).on('click', '#buttonUnban', function() {
            $(".modal-body #id").val($(this).data('id'));
        });

        // $(document).on('click', '#buttonBanned', function() {
        //     var data = [];
        //     data['id'] = $(this).data('id');
        //     data['name'] = $(this).data('username');
        //     data['url'] = `<?= base_url('admin/users_permission/') ?>${data['id']}/ban`;

        //     doBanned(data);
        // });
    })
</script>
<?= $this->endSection() ?>