<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-mm-8">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');  ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newSubMenuModal">Add New Sub Menu</a>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($submenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td><?= $sm['is_active']; ?></td>
                            <td>
                                <a href=""><span class="badge badge-warning">edit</span></a>
                                <a href=""><span class="badge badge-danger">delete</span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal box -->
<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/subMenu') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" id="title" name="title" class="form-control" id="formGroupExampleInput" placeholder="title" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" id="menu" name="menu" class="form-control" id="formGroupExampleInput" placeholder="Menu name">
                    </div>
                    <div class="form-group">
                        <input type="text" id="url" name="url" class="form-control" id="formGroupExampleInput" placeholder="Menu url">
                    </div>
                    <div class="form-group">
                        <input type="text" id="icon" name="icon" class="form-control" id="formGroupExampleInput" placeholder="Menu icon">
                    </div>
                    <div class="form-group">
                        <input type="text" id="is_active" name="is_active" class="form-control" id="formGroupExampleInput" placeholder="Is active">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>