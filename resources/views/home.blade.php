@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <head>
    <style>
        .star {
            font-size: 30px;
            color: #cfcfcf;
            display: inline-block;
        }

        .over {
            color: #f7c56a;
        }

        .fix {
            color: #ffa600;
        }

        .rating {
            margin: 30px 0;
            font-weight: bold;
        }

    </style>
    </head>
    <div class="container">
        <div class="row justify-content-center" style="width: 180vh">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body" style="width: 120vh">

                        <div class="text-center " style="width: 90vh">
                            <a href="{{ route('products.create') }}" class="mt-4 btn btn-info">Create Product</a>
                        </div>
                        <table class="table mt-4 ml-5" style="width: 100vh">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Process</th>
                                    <th scope="col">Rating</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $product)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->Title }}</td>
                                        <td>{{ $product->Description }}</td>
                                        <td>{{ $product->Price }}</td>

                                        <td>

                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                                    class="btn btn-secondary">View</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <ul class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="star" width="16"
                                                    height="16" fill="currentColor" class="bi bi-star"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="star" width="16"
                                                    height="16" fill="currentColor" class="bi bi-star"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="star" width="16"
                                                    height="16" fill="currentColor" class="bi bi-star"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="star" width="16"
                                                    height="16" fill="currentColor" class="bi bi-star"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="star" width="16"
                                                    height="16" fill="currentColor" class="bi bi-star"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                            </ul>
                                            <div class="rating text-center">Rated</div>
                                            <button onclick="myfunction()">Rate</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a class="btn btn-primary" href="{{ route('processPaypal') }}">Pay 100$</a>

                    </div>


                    @if (\Session::has('error'))
                        <div class="alert alert-danger">{{ \Session::get('error') }}</div>

                        {{ \Session::forget('error') }}
                    @endif

                    @if (\Session::has('success'))
                        <div class="alert alert-success">{{ \Session::get('success') }}</div>

                        {{ \Session::forget('success') }}
                    @endif

                </div>
            </div>

        </div>
    </div>
@endsection

<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>

<script>
    function myfunction() {


        const stars = document.querySelectorAll(".star");
        const rating = document.querySelector(".rating");
        for (let i = 0; i < stars.length; i++) {
            stars[i].starValue = (i + 1);
            ["mouseover", "mouseout", "click"].forEach(function(e) {
                stars[i].addEventListener(e, starRate);
            })
        }

        function starRate(e) {
            let type = e.type;
            let starValue = this.starValue;
            if (type === "click") {
                if (starValue > 1) {
                    rating.innerHTML = "You rated This" + starValue + "stars";
                }
            }
            stars.foreach(function(ele, ind) {
                if (type === "click") {
                    if (ind < starValue) {
                        ele.classList.add("fix");
                    } else {
                        ele.classList.remove("fix");

                    }
                }
                if (type === "mouseover") {
                    if (ind < starValue) {
                        ele.classList.add("over");
                    } else {
                        ele.classList.remove("over");
                    }
                }
                if (type === "mouseout") {
                    ele.classList.remove("over");
                }
            })
        }
    }
</script>
