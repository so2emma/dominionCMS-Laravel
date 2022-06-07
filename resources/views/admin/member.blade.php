<x-layout>
    <div class="container">
        <section class="py-5">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form action="/admin/members" method="get">
                            <div class="mb-3 form-group">
                                <label class="lead" for="">Find a member: </label>
                                <input type="text" class="form-control" name="member" placeholder="Enter a Firstname or Surname">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                @if (session()->has('session'))
                    <div class="alert alert-success mt-2">
                        {{ session('session') }}
                    </div>
                @endif
            </div>
        </section>

        <h3 class="m-auto">Lists of Members</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Status</th>

              </tr>
            </thead>
            <tbody>
                @unless(count($members) == 0)

                  @php
                      $i = 1;
                  @endphp
                  @foreach ($members as $member )
                  <tr>

                          <th scope="row"><a class="nav-link" href="/admin/profileDetail/{{ $member->id }}"> {{ $i++ }}</a> </th>
                          <td>{{ $member->firstname }}</td>
                          <td>{{ $member->lastname }}</td>
                          <td>{{ $member->phone}}</td>
                          <td>{{ $member->IndividualStatus}}</td>
                      </tr>
              @endforeach
              @else
              <div class="alert alert-danger">

                  <p>Member is not Available </p>
              </div>
              @endunless
            </tbody>
          </table>

    </div>
</x-layout>
