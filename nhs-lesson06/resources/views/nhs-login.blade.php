<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHS - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nhsaccount.nhsloginsumit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-hearder">
                    <h1>NHS - Login</h1>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                       <label for="nhsEmail" class="form-label">Email</label>
                       <input type="email" class="form-control" 
                            id="nhsEmail" name="nhsEmail"
                            placeholder="nhsEmail@example.com"/>
                            @error('nhsEmail')
                            <span> class="text-danger">{{$message}}</span>
                            @enderror
                        <span id="email-error"></span>
                    </div>
                    <div class="mb-3">
                       <label for="nhsPass" class="form-label">Password</label>
                       <input type="password" class="form-control" 
                            id="nhsPass" name="nhsPass"
                            placeholder="xxxxx"/>
                            @error('nhsPass')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    @if (Session::has('nhs-error'))
                        <div class="alert alert-danger">
                                {{ Session::get('nhs-error') }}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>