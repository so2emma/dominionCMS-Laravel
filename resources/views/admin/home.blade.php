<x-layout>
    <div class="container">
        <h3 class="m-auto">Lists of Admins</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Created at </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($admins as $admin )

                  <th scope="row">{{ $i++ }}</th>
                  <td>{{ $admin->name }}</td>
                  <td>{{ $admin->email }}</td>
                  <td>{{ $admin->created_at }}</td>

                  @endforeach
              </tr>
            </tbody>
          </table>

    </div>
</x-layout>
