<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Note</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="https://tse1.mm.bing.net/th/id/OIP.wT5_eu5R9vmY4C_2qqz8dgHaHa?rs=1&pid=ImgDetMain" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    <!-- THE WHOLE CONTAINER -->
    <div class="container pt-5" >
       <div class="note-title d-flex justify-content-between align-items-center mt-2 mb-5">
        <h2 class=" text-decoration-underline link-offset-2">Note List</h2>

            <button class="Btn">
                Add Note <i class="fa-solid fa-plus ps-2"></i>
              </button>
    </div>

    <div class="note">
        <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <td>1</td>
                            <td>this is hw</td>
                            <td>i gotta do some coding in js</td>
                            <td>1</td>
                            <td>

                                <ul class="wrapper">
                                    <a href="">
                                        <li class="icon ">
                                            <span class="tooltip">Details</span>
                                            <span> <i class="fa-solid fa-circle-info detail "></i></span>
                                        </li>
                                    </a>
                                    <a href="">
                                        <li class="icon">
                                            <span class="tooltip">Edit</span>
                                            <span> <i class="fa-solid fa-file-pen pen wrapper "></i></span>
                                        </li>
                                    </a>
                                    <a href="">
                                        <li class="icon ">
                                            <span class="tooltip">Delete</span>
                                            <span> <i class="fa-solid fa-trash delete "></i></span>
                                        </li>
                                    </a>

                                </ul>

                            </td>
                        </tr>

        {{--    @else
                    <h1 class="text-center error-title">There is no Category here!
                        <a href="{{ route('category#createPage') }}">Create one here!</a>
                    </h1>
            @endif  --}}
            </tbody>
        </table>
    </div>


    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>