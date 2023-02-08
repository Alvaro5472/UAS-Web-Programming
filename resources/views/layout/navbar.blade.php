<nav class="navbar py-4" style="background-color: rgb(176,236,212)">
    <div class="container-fluid">
        <h2 class="fw-bold fs-2 mx-auto">
            Amazing E-Grocery
        </h2>
        @auth
        <div class="">
            <a class="btn btn-warning fw-semibold" href={{ route('logout')}} role="button">Logout</a>
        </div>
        @endauth
    </div>
</nav>
@auth
<nav class="navbar py-1" style="background-color: rgb(252,196,4)">
    <div class="d-flex justify-content-center container-fluid">
        <a href={{route('home')}} class="fw-bold mx-5 text-decoration-none text-black">Home</a>
        <a href={{route('cart')}} class="fw-bold mx-5 text-decoration-none text-black">Cart</a>
        <a href={{route('profile')}} class="fw-bold mx-5 text-decoration-none text-black">Profile</a>
        @can('Admin')
        <a href={{route('account')}} class="fw-bold mx-5 text-decoration-none text-black">Account Maintenance</a>
        @endcan
    </div>
</nav>
@endauth
