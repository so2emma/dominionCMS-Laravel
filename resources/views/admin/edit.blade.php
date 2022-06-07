<!DOCTYPE html>
<html lang="en">
<?php
// use 'Symfony\Component\Console\Input\Input';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Bootstrap theme</title>
</head>

<body>
    <section class="py-5">
        <div class="container">

            <div class="border border-secondary shadow">
                <div class="p-4">
                    <h1>Edit Form</h1>
                    <a class="btn btn-primary" href="/admin/profileDetail/{{ $member->id }}">Return back</a>
                </div>
                @if (session()->has('session'))
                    <div class="alert alert-success">
                        {{ session('session') }}
                    </div>
                @endif
                <form class="row g-3  m-auto p-3" action="/membershipForm/{{ $member->id }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" value="{{ old('firstname', $member->firstname) }}" class="form-control" name="firstname"
                            id="">

                        @error('firstname')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" value="{{ old('lastname', $member->lastname) }}" class="form-control" name="lastname" id="">

                        @error('lastname')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="dob" class="form-label">Date of birth</label>
                        <input type="date" value="{{ old('dob' , $member->dob) }}" class="form-control" name="dob" id="">

                        @error('dob')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" value="{{ old('address' , $member->address) }}" class="form-control" name="address" id="">

                        @error('address')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <input type="text" value="{{ old('phone' , $member->phone) }}" class="form-control" name="phone" id="">

                        @error('phone')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ old('email', $member->email) }}" class="form-control" name="email" id="">

                        @error('email')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="gender" class="form-group">Gender</label> <br>
                        {{-- <input type="radio" name="gender" value="Male" /> Male
                        <input type="radio" name="gender" value="Female" /> Female --}}

                        <input type="radio" name="gender" value="Male" class="radio" id="male" <?php if (old('gender' , $member->gender) == 'Male') {echo 'checked="checked"';} ?>> Male
                        <input type="radio" name="gender" value="Female" class="radio" id="female" <?php if(old('gender' , $member->gender)== "Female") { echo 'checked="checked"'; } ?>>Female

                        @error('gender')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="maritalStatus" class="form-group">Marital Status</label>
                        <select class="form-select" value="{{ old('email') }}" name="maritalStatus" aria-label="Default select example">
                            <option selected value="">None</option>
                            <option selected value="single">Single</option>
                            <option value="maried">Married</option>
                        </select>

                        @error('maritalStatus')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="weddingAnniversary" class="form-label">Wedding Anniversary Date</label>
                        <input type="date" value="{{ old('weddingAnniversary', $member->weddingAnniversary) }}" class="form-control" name="weddingAnniversary" id="">

                        @error('weddingAnniversary')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="bornAgain" class="form-group">Are you Born Again</label> <br>
                        <input type="radio" name="bornAgain" value="Born Again" class="radio" id="Born Again" <?php if (old('bornAgain', $member->bornAgain) == 'Born Again') {echo 'checked="checked"';} ?>>Yes
                        <input type="radio" name="bornAgain" value="Not Born Again" class="radio" id="female" <?php if(old('bornAgain', $member->bornAgain)== "Not Born Again") { echo 'checked="checked"'; } ?>>No

                        {{-- <input type="radio" name="bornAgain" value="Born Again" /> Yes
                        <input type="radio" name="bornAgain" value="Not Born Again" /> No --}}

                        @error('bornAgain')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="salvationDate" class="form-label">When did you give your life to Christ?</label>
                        <input type="date" value="{{ old('salvationDate' , $member->salvationDate) }}" class="form-control" name="salvationDate" id="">

                        @error('salvationDate')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="previousChurch" class="form-label">Previous church Attended?</label>
                        <input type="text" value="{{ old('previousChurch', $member->previousChurch) }}"  class="form-control" name="previousChurch" id="">

                        @error('previousChurch')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="membershipClass" class="form-group">Have You completed Membership class?</label>
                        <br>

                        <input type="radio" name="membershipClass" value="completed" class="radio" <?php if (old('membershipClass', $member->membershipClass) == 'completed') {echo 'checked="checked"';} ?>>Yes
                        <input type="radio" name="membershipClass" value="Yet to complete" class="radio"  <?php if(old('membershipClass', $member->membershipClass)== "Yet to complete") { echo 'checked="checked"'; } ?>>No

                        {{-- <input type="radio" name="membershipClass" value="completed" /> Yes
                        <input type="radio" name="membershipClass" value="Yet to complete" /> No --}}

                        @error('membershipClass')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="membershipCompletion" class="form-label">Date of Completion?</label>
                        <input type="date" value="{{ old('membershipCompletion', $member->membershipCompletion) }}" class="form-control" name="membershipCompletion" id="">

                        @error('membershipCompletion')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="workerStatus" class="form-group">Are you a worker?</label> <br>

                        <input type="radio" name="workerStatus" value="Worker" class="radio" <?php if (old('workerStatus', $member->membershipCompletion) == 'Worker') {echo 'checked="checked"';} ?>>Yes
                        <input type="radio" name="workerStatus" value="Not a worker" class="radio"  <?php if(old('workerStatus', $member->membershipCompletion)== "Not a worker") { echo 'checked="checked"'; } ?>>No
                        {{-- <input type="radio" name="workerStatus" value="Worker" /> Yes
                        <input type="radio" name="workerStatus" value="Not a worker" /> No --}}

                        @error('workerStatus')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="department" class="form-group">Which Department do you belong to</label>
                        <select class="form-select" name="department" aria-label="Default select example">
                            <option selected value="">None</option>
                            <option {{ $member->department == "choir" ? 'selected':'' }} value="choir">Choir</option>
                            <option {{ $member->department == "evangelism" ? 'selected':'' }} value="evangelism">Envangelism Team</option>
                            <option {{ $member->department == "prayer team" ? 'selected':'' }} value="prayer team">Prayer Team</option>
                            <option {{ $member->department == "ushering" ? 'selected':'' }} value="ushering">Ushering</option>
                            <option {{ $member->department == "media" ? 'selected':'' }} value="media">Media</option>
                            <option {{ $member->department == "technical" ? 'selected':'' }} value="technical">Technical</option>
                            <option {{ $member->department == "children" ? 'selected':'' }} value="children">Children</option>
                            <option {{ $member->department == "sanctuary keeper" ? 'selected':'' }} value="sanctuary keeper">Sanctuary Keeper</option>
                            <option {{ $member->department == "welfare" ? 'selected':'' }} value="welfare">Welfare</option>
                            <option {{ $member->department == "Hospitality" ? 'selected':'' }} value="Hospitality">Hospitality</option>
                            <option {{ $member->department == "Followup unit" ? 'selected':'' }} value="Followup unit">Followup unit</option>
                            <option {{ $member->department == "Teenage Church" ? 'selected':'' }} value="Teenage Church">Teenage Church</option>
                            <option {{ $member->department == "Protocol" ? 'selected':'' }} value="Protocol">Protocol</option>
                            <option {{ $member->department == "Greeters" ? 'selected':'' }} value="Greeters">Greeters</option>
                        </select>

                        @error('department')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="houseFellowshipStatus" class="form-group">Are you a member of a house fellowship?</label> <br>

                        <input type="radio" name="houseFellowshipStatus" value="house fellowshipper" class="radio" <?php if (old('houseFellowshipStatus', $member->houseFellowshipStatus) == 'house fellowshipper') {echo 'checked="checked"';} ?>>Yes
                        <input type="radio" name="houseFellowshipStatus" value="No fellowship" class="radio"  <?php if(old('houseFellowshipStatus', $member->houseFellowshipStatus)== "No fellowship") { echo 'checked="checked"'; } ?>>No
                        {{-- <input type="radio" name="houseFellowshipStatus" value="house fellowshipper" /> Yes
                        <input type="radio" name="houseFellowshipStatus" value="No fellowship" /> No --}}

                        @error('houseFellowshipStatus')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="fellowshipLocation" class="form-label">Name of House Fellowship</label>
                        <input type="text" value="{{ old('fellowshipLocation', $member->fellowshipLocation) }}" class="form-control" name="fellowshipLocation" id="">

                        @error('fellowshipLocation')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="dateJoined" class="form-label">Date you joined</label>
                        <input type="date" value="{{ old('dateJoined', $member->dateJoined) }}" class="form-control" name="dateJoined" id="">

                        @error('dateJoined')
                            <div class="alert mt-2 alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Edit details</button>
                    </div>


                </form>

                <div class="m-2 p-2">
                    <form action="/membershipForm/{{ $member->id }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">Delete </button>
                    </form>
                </div>
            </div>

        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script>
        //Get the currnt yer for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>
