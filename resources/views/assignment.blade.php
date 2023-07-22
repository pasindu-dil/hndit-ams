@extends('layouts.app')

@section('title', 'Assignment')

@section('content')
    <div class="container-fluid py-4">
        <div class="row row-cards row-deck">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <h6>Upcomming assignment</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                            <span class="font-weight-bold">24%</span> this month
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-html5 text-danger text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-cart text-info text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-credit-card text-warning text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order
                                        #4395133</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-key-25 text-primary text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step">
                                    <i class="ni ni-money-coins text-dark text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#add_assignment">
                    Add assingment
                </button>
                <div class="card">
                    <iframe
                        src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FColombo&src=ZGlsc2hhbnBhc2luZHU3MTlAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4tZ2IubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043&color=%230B8043"
                        style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add_assignment" tabindex="-1" aria-labelledby="add_assignment" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add assignment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label>Mobile number</label>
                            <textarea type="text" id="msisdn" class="form-control" placeholder="Mobile number">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">File</label>
                        <input type="file" class="form-control" id="file" placeholder="File">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Start date</label>
                        <input type="date" name="start_date" class="form-control" id="start_date"
                            placeholder="Start date">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">End date</label>
                        <input type="date" name="end_date" class="form-control" id="end_date"
                            placeholder="End date">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="formSubmit()" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function formSubmit() {
            let name = $('#name').val();
            let subject_code = $('#subject').val();
            let description = $('#description').val();
            let file = $('#file').val();
            let start_date = $('#start_date').val();
            let end_date = $('#end_date').val();
            const data = {
                name: name,
                subject_code: subject_code,
                description: description,
                file: file,
                start_date: start_date,
                end_date: end_date
            }
            axios.post('/assignment', data).then(response => {
                console.log(response.data);
                // Swal.fire(
                //     'Good job!',
                //     'You clicked the button!',
                //     'success'
                // )
            })
        }
    </script>
@endsection
