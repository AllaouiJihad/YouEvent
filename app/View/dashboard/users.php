<?php
include_once '../app/View/dashboard/includes/header.php';

?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>
       

        <main class="col-md-10 p-3 main-content">


        <a type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add user</a>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="?uri=admin/insertUser" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="userName" class="form-label">User Name:</label>
                            <input type="text" class="form-control" id="userName" name="userName" required>
                        </div>                 
                        <div class="mb-3">
                            <label for="userImage" class="form-label"> Image:</label>
                            <input type="file" class="form-control" id="userImage" name="userImage">
                        </div>
                       

                        <button type="submit" name="insertUser" class="btn btn-primary">Add User</button>
                    </form>

                    </div>

                </div>
            </div>
        </div>


        <div class="shadow-sm p-3 mb-3 bg-body rounded">
                <table class="table align-middle pl-4 mb-0 mt-2 bg-white ">
                    <thead class="bg-light">
                        <tr>
                            <th>nom</th>
                            <th style="width:700px;">prenom</th>
                            <th>email</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                                // echo '<pre>';
                                // var_dump($users);
                                // echo '</pre>';
                        foreach ($users as $user) {
                        ?>
                            <tr>
                                
                                <td style="width:700px;">
                                
                                    <?= $user->nom; ?>
                                </td>
                                <td><?= $user->prenom; ?></td>
                                <td><?= $user->email; ?></td>
                                <td>
                                 
                                    <a type="button" class="btn btn-warning">Ban</a>
                                    <a href="#" type="button" class="btn btn-danger">supprimer</a>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        modifier
                                    </button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>