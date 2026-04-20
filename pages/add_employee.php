<?php include("../emp/config/db.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .card {
            border-radius: 12px;
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand">Employee Management</span>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-12">

                <div class="card shadow p-4">

                    <h3 class="text-center mb-4">Add Employee</h3>

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" class="form-control" placeholder="Enter role (Developer, HR...)">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Salary</label>
                            <input type="number" class="form-control" placeholder="Enter salary">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <select class="form-select">
                                <option>Select Department</option>
                                <option>IT</option>
                                <option>HR</option>
                                <option>Finance</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-primary w-100">
                            Add Employee
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>


