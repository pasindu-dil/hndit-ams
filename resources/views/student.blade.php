@extends('layouts.app')

@section('title', 'Student')

@section('content')
    <div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="card-header pb-0">
                                <h6>Students table</h6>
                            </div>
                            @if (
                                (Auth::user() && Auth::user()->hasRole('Super Admin')) ||
                                    Auth::user()->hasRole('Admin') ||
                                    Auth::user()->hasRole('Lecturer') ||
                                    Auth::user()->hasAnyPermission('student create'))
                                <div class="card-header pb-0 m-0">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#add_student">
                                        Add student
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Author</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Function</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Employed</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                                <p class="text-xs text-secondary mb-0">Organization</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="add_student" tabindex="-1" aria-labelledby="add_student" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add students</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Registration No</label>
                            <input type="text" id="reg_id" class="form-control" placeholder="Registration No"
                                aria-label="reg_id">
                        </div>
                        <div class="mb-3">
                            <label>NIC</label>
                            <input type="text" id="nic" class="form-control" placeholder="NIC" aria-label="NIC">
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Name" aria-label="Name">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Email"
                                aria-label="Email">
                        </div>
                        <div class="mb-3">
                            <label>Mobile number</label>
                            <input type="text" id="msisdn" class="form-control" placeholder="Mobile number">
                        </div>
                        <div class="mb-3">
                            <label>Course</label>
                            <select class="form-select" id="course" aria-label="Default select example">
                                <option selected disabled>Select a course</option>
                                <option value="1">HNDIT</option>
                                <option value="2">HNDE</option>
                                <option value="3">HNDA</option>
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label>Address</label>
                            <textarea type="text" id="address" class="form-control" value=""
                                placeholder="Address">
                            </div>
                        </div> --}}
                        <div class="form-check form-switch ps-0 mb-3">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0">Is login</label>
                            <input class="form-check-input ms-auto" type="checkbox" id="is_login" checked="true">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="formSubmit()" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <script>
        function formSubmit() {
            let reg_id = $('#reg_id').val()
            let nic = $('#nic').val()
            let name = $('#name').val()
            let email = $('#email').val()
            let msisdn = $('#msisdn').val()
            let course = $('#course').val()
            let is_login = $('#is_login').prop('checked') ? 1 : 0
            const data = {
                reg_id: reg_id,
                nic: nic,
                name: name,
                email: email,
                msisdn: msisdn,
                course_id: course,
                is_login: is_login
            }

            axios.post('/student', data).then(res => {
                console.log(res);
                Swal.fire(
                    'Good job!',
                    res.data.data.message,
                    'success'
                )
            }).catch(err => {
                console.log(err);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: err.data.data.message
                })
            })
        }
    </script>
