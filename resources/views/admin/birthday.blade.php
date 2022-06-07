<x-layout>
    <div class="container">
        <section class="py-5">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form action="/admin/birthday" method="get">
                            <div class="mb-3 form-group">
                                <label class="lead" for="">Birthday for which month </label>
                                <select class="form-select" name="month" aria-label="Default select example">
                                    <option selected value="">Select a Month</option>
                                    <option value="-01-">January</option>
                                    <option value="-02-">February</option>
                                    <option value="-03-">March</option>
                                    <option value="-04-">April</option>
                                    <option value="-05-">May</option>
                                    <option value="-06-">June</option>
                                    <option value="-07-">July</option>
                                    <option value="-08-">August</option>
                                    <option value="-09-">September</option>
                                    <option value="-10-">October</option>
                                    <option value="-11-">November</option>
                                    <option value="-12-">December</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Find Birthday</button>
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
                  <td>{{ $member->department}}</td>
                  <td>{{ $member->dob}}</td>
              </tr>
              @endforeach
              @else
              <div class="alert alert-danger">
                  <p>No Bithday for this Month </p>
              </div>
              @endunless
            </tbody>
          </table>

    </div>
</x-layout>
