<!DOCTYPE html>
<html>

<head>
    <title>Simple Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }

    </style>
</head>

<body>
    <br />
    <div class="container box">
        @if (Auth::check())
            <h3 align="center">Employee Login Success</h3><br />
        @endif

        @if (isset(Auth::user()->name))
            <div class="alert alert-info success-block">
                <strong>Welcome {{ Auth::user()->name }} as {{ $role }} at PT Avalogix</strong>
            </div>
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Employee ID</td>
                        <td>{{ Auth::user()->employee_id }}</td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>{{ $role }}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{ $description }}</td>
                    </tr>
                    <tr>
                        <td>Birth Date</td>
                        <td>{{ Auth::user()->birth_date }}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{ Auth::user()->gender }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ Auth::user()->status }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ Auth::user()->address }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ Auth::user()->phone_no }}</td>
                    </tr>

                </tbody>
            </table>

            <a href="{{ url('/main/logout') }}"><button type="button" class="btn btn-danger">Logout</button></a>
            <br>
        @else
            <strong>An error occured while fetching user data</strong>
        @endif



        <br />
    </div>
</body>

</html>
