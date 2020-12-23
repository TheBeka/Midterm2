@extends('layouts.app')
@section('content')
<h1>Cars</h1>
<div>
    <a class="btn btn-info mb-2" href="/cars/create">add</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Owner</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody id="tbody">
    </tbody>
</table>

<script type="application/javascript" defer>

    function reload() {
        let c = document.getElementById('tbody');
        c.innerHTML = "";
        fetch('/all')
        .then(res => res.json())
        .then(data => {
            data.forEach((e) => {
                console.log(e);
                c.innerHTML +=
                    `<tr>
                        <th>${e.id}</th>
                        <th>${e.car_name}</th>
                        <td>${e.car_price}</td>
                        <td>${e.car_owner_id}</td>
                        <td>
                            <a class="btn btn-info" href="/cars/${e.id}/edit"> Edit </a>
                            <a class="btn btn-danger" href="/cars/${e.id}/destroy"> Delete </a>
                        </td>
                    </tr>`;
            });
        });
    }
    reload();
</script>

@endsection