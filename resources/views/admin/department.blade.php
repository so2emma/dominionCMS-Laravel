<x-layout>
    <div class="container">
        <section class="py-5">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form action="/admin/department" method="get">
                            <div class="mb-3 form-group">
                                <label class="lead" for="">Find a members of a department: </label>
                                <input type="text" class="form-control" name="department" placeholder="Enter a department name">
                            </div>
                            <button type="submit" class="btn btn-primary">Find department</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <h3 class="m-auto">Lists of Members of the department</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">DOB</th>
              </tr>
            </thead>
            <tbody>
                @unless(count($members) == 0)
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($members as $member )
              <tr>
                  <th scope="row"><a class="nav-link" href="/admin/profileDetail/{{ $member->id }}"> {{ $i++ }}</a></th>
                  <td>{{ $member->firstname }}</td>
                  <td>{{ $member->lastname }}</td>
                  <td>{{ $member->phone}}</td>
                  <td>{{ $member->email}}</td>
                  <td>{{ $member->department}}</td>
                  <td>{{ $member->dob}}</td>
              </tr>
              @endforeach
              @else
              <div class="alert alert-danger">
                  <p>No member in this department </p>
              </div>
              @endunless
            </tbody>
          </table>

    </div>
</x-layout>
