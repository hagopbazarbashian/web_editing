
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel for Site editing</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="https://developsmart.xyz/img/logo.png">
                        </span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="extension-puzzle-outline"></ion-icon>
                        </span>
                        <span class="title">templates</span>
                    </a>
                </li>




            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->


            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Templates</h2>
                        <a href="{{ route('template.index') }}" class="btn">Add</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>title</td>
                                <td>url</td>
                                <td>file</td>
                                <td>folder</td>
                                <td>assets</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($templates as $key=>$template)
                            <tr>
                                <td>{{$template->name}}</td>
                                <td>{{$template->title}}</td>
                                <td>{{$template->url}}</td>
                                <td>{{$template->file}}</td>
                                <td>{{$template->folder}}</td>
                                <td>{{$template->assets}}</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->

            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="admin/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
