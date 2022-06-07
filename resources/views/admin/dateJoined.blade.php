<x-layout>
    <div class="container">
        <section class="py-5">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form action="/admin/dateJoined" method="get">
                            <div class="mb-3 form-group">
                                <label class="lead form-group" for="">Select From when to when </label><br>
                                <label class="lead form-group" for="">START:</label>

                                <input name="start" class="form-control" type="date" placeholder="START ......">
                                <label class="lead form-group" for="">END:</label>
                                <input name="end" class="form-control" type="date" placeholder="END ......">

                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <h3 class="m-auto">Birthday for the Month</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Department</th>
                <th scope="col">When Registered</th>
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
                  <td>{{ $member->department}}</td>
                  <td>{{ $member->created_at}}</td>
              </tr>
              @endforeach
              @else
              <div class="alert alert-success">
                  <p>Select a Range of Dates </p>
              </div>
              @endunless
            </tbody>
          </table>

    </div>
</x-layout>
