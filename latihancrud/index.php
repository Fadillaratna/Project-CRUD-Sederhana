<!DOCTYPE html>
<?php include './connection.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <style>
        body{
            font-family: calibri;
        }

        .create{
            width: 90px;
            height: 30px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #935CF5;
            border-color: transparent;;
            color: #ffff;
            box-shadow: 3px 3px 10px #6c757d;
            font-family: calibri;
            margin-left: 20px;
        }

        .edit{
            width: 80px;
            height: 30px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #7D3DCF;
            border-color: transparent;
            color: #ffff;
            margin-left: 0px;
            box-shadow: 3px 3px 10px #6c757d;
            font-family: calibri;
        }

        .delete{
            width: 80px;
            height: 30px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #C7B3E3;
            border-color: transparent;
            color: #ffff;
            margin-left: 5px;
            margin-right: 20px;
            box-shadow: 3px 3px 10px #6c757d;
            font-family: calibri;
        }

        a{
            text-decoration: none;
            color: #fff;
        }
        a:hover{
            color: #fff;
        }

        button:active{
            transform: scale(1.1);
        }

        .student{
            font-weight: bold;
            margin-left: 20px;
            margin-top: 20px;
        }

        .make{
            width: 90px;
            height: 30px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #935CF5;
            border-color: transparent;
            color: #ffff;
            box-shadow: 3px 3px 10px #6c757d;
            font-family: calibri;
        }

        table{
            margin-top: 10px;
        }

        .field{
            background: #935CF5; 
        }

        input:active{
            border-color: #935CF5;
        }

        tr #header{
            background-color: #935CF5;
        }

        
    </style>
</head>
<body>
    <h5 class="student">Student</h5>
    <button class="create" data-bs-toggle="modal" data-bs-target="#exampleModal">CREATE</button>
    <br>

    <?php
        $sql = 'select * from siswa';
        $result = mysqli_query($conn, $sql);
    ?>
    <div class="card-body px-20 pt-20 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0 table-striped">
            <thead>
                <tr class="text-xs font-weight-bold opacity-6 text-secondary bg-light" >
                    <th>ID</th>
                    <th class="align-middle text-left">Name</th>
                    <th class="align-middle text-left">Address</th>
                    <th class="align-middle text-left">School</th>
                    <th class="align-middle text-left">Major</th>
                    <th class="align-middle text-left">Age</th>
                    <th class="align-middle text-left">Absent</th>
                    <th class="align-middle text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while( $data = mysqli_fetch_assoc($result)) { ?>
                    <tr class="text-xs font-weight-bold">
                        <td class="align-middle text-left"><?php echo $data['id'];?></td>
                        <td class="align-middle text-left"><?php echo $data['name'];?></td>
                        <td class="align-middle text-left"><?php echo $data['address'];?></td>
                        <td class="align-middle text-left"><?php echo $data['school'];?></td>
                        <td class="align-middle text-left"><?php echo $data['major'];?></td>
                        <td class="align-middle text-left"><?php echo $data['age'];?></td>
                        <td class="align-middle text-left"><?php echo $data['kehadiran'] === date('Y-m-d')? '✅': '❎'?></td>
                        <td>
                            <button class="edit"><a href="check-in.php?id=<?php echo $data['id'];?>">CHECK IN</a></button>
                            <button class="delete"><a href="check-out.php?id=<?php echo $data['id'];?>">CHECKOUT</a></button>
                            <button class="edit"><a href="edit-siswa.php?id=<?php echo $data['id'];?>" >EDIT</a></button>
                            <button class="delete"><a href="delete-siswa.post.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure to delete the data from <?php echo $data['name'] . '?';?>')">DELETE</a></button>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>

    <!--Modal Create-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title" id="exampleModalLabel">Create Siswa</h5>
                        <button ype="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="create-siswa.post.php" method="post">
                        
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">School</label>
                                <input type="text" name="school" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Major</label>
                                <input type="text" name="major" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <br>
                            <button type="submit" class="make" onclick="alert('Are you sure to create the data?')">Create</button>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>

 
    
</body>
</html>
