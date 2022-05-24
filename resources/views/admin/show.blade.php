<x-layout>
    <div class="container">
        <section class="py-5">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <h3>
                             <span class="fw-bold">{{ $profile->lastname . ' ' . $profile->firstname }}</span>  Profile.
                        </h3>
                        <p>Date Of Birth: <span class="fw-bold">{{ $profile->dob }}</span></p>
                        <p>Address: <span class="fw-bold">{{ $profile->address }}</span></p>
                        <p>Phone Number: <span class="fw-bold">{{ $profile->phone }}</span></p>
                        <p>Email: <span class="fw-bold">{{ $profile->email }}</span></p>
                        <p>Gender: <span class="fw-bold">{{ $profile->gender }}</span></p>
                        <p>Marital Status: <span class="fw-bold">{{ $profile->maritalStatus }}</span></p>
                        <p>Wedding Anniversary Date: <span class="fw-bold">{{ $profile->weddingAnniversary }}</span></p>
                        <p>Born Again Status: <span class="fw-bold">{{ $profile->bornAgain }}</span></p>
                        <p>Salvation Date: <span class="fw-bold">{{ $profile->salvationDate }}</span></p>
                        <p>Previous church Attended: <span class="fw-bold">{{ $profile->previousChurch }}</span></p>
                        <p>Membership Class: <span class="fw-bold">{{ $profile->membershipClass }}</span></p>
                        <p>Date of Completion: <span class="fw-bold">{{ $profile->membershipCompletion }}</span></p>
                        <p>Worker: <span class="fw-bold">{{ $profile->workerStatus }}</span></p>
                        <p>Department: <span class="fw-bold">{{ $profile->department }}</span></p>
                        <p>Name of House Fellowship: <span class="fw-bold">{{ $profile->fellowshipLocation }}</span></p>
                        <p>Date Joined: <span class="fw-bold">{{ $profile->dateJoined }}</span></p>

                    </div>

                </div>
            </div>
        </section>






    </div>
</x-layout>
