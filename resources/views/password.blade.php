@extends('layouts.app')

@section('body')

    <div class="container mt-5 py-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header w-100 justify-content-start responsive">
                        <i class="bi bi-shield-lock fs-5 px-1"></i>Change Password
                    </div>
                    <div class="card-body d-flex bg-white justify-content-center">
                        <form class="form w-75" role="form" autocomplete="off" method="POST"
                            action="{{ route('save-password') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputPasswordOld">Current Password</label>
                                <input type="password" class="form-control" id="inputPasswordOld" required=""
                                    name="password" value="{{ old('password') }}">

                                @if ($errors->has('pass'))
                                    <div class="error text-danger form-text small ">{{ $errors->first('pass') }}</div>

                                @endif

                                @if ($errors->has('password'))
                                    <div class="error text-danger form-text small ">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordNew">New Password</label>
                                <input type="password" class="form-control" id="inputPasswordNew" required=""
                                    name="new-password" value="{{ old('new-password') }}">

                                @if ($errors->has('new-password'))
                                    <div class="error text-danger form-text small ">{{ $errors->first('new-password') }}
                                    </div>
                                @endif
                                @if ($errors->has('newpass'))
                                    <div class="error text-danger form-text small">{{ $errors->first('newpass') }}</div>
                                @endif
                                @if (!$errors->has('new-password') && !$errors->has('newpass'))
                                    <span class="form-text small text-muted" id="new-password">
                                        The new-password must be at least 8-20 characters.
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="inputPasswordNewVerify">Verify</label>
                                <input type="password" class="form-control" id="inputPasswordNewVerify" required=""
                                    name="verify" value="{{ old('verify') }}">
                                @if ($errors->has('verify'))
                                    <div class="error text-danger form-text small ">
                                        {{ __('Verify must match with the New Password') }}</div>
                                @endif
                                @if (!$errors->has('verify'))
                                    <span class="form-text small text-muted">
                                        To confirm, type the new password again.
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <a type="submit" class="btn btn-success btn-lg float-end py-1 px-3 fs-5 mt-2"
                                    data-bs-toggle="modal" data-bs-target="#modalForm"><i
                                        class="bi bi-box-arrow-down pe-2 fs-5"></i>Save</a>
                            </div>
                            <div class="modal fade" id="modalForm" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-secondary" id="exampleModalLabel">Password
                                                Confirmation</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body fs-6 text-dark">
                                            Save Change Password?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                aria-label="Close">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection