@extends('admin.layouts.admin')

{{-- <link rel="stylesheet" href="{{ asset('css/chat.css') }}" /> --}}

@section('content')
    {{-- <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">

                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                    <div class="card">
                        <div class="card-body">

                            <ul class="list-unstyled mb-0">
                                <li class="p-2 border-bottom" style="background-color: #eee;">
                                    <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">John Doe</p>
                                                <p class="small text-muted">Hello, Are you there?</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-muted mb-1">Just now</p>
                                            <span class="badge bg-danger float-end">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom">
                                    <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Danny Smith</p>
                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-muted mb-1">5 mins ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom">
                                    <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Alex Steward</p>
                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-muted mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom">
                                    <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Ashley Olsen</p>
                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-muted mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-7 col-xl-8">

                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between p-3">
                                    <p class="fw-bold mb-0">Brad Pitt</p>
                                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <div class="card w-100">
                                <div class="card-header d-flex justify-content-between p-3">
                                    <p class="fw-bold mb-0">Lara Croft</p>
                                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium.
                                    </p>
                                </div>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                                class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between p-3">
                                    <p class="fw-bold mb-0">Brad Pitt</p>
                                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="bg-white mb-3">
                            <div class="form-outline">
                                <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                                <label class="form-label" for="textAreaExample2">Message</label>
                            </div>
                        </li>
                        <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
                    </ul>

                </div>

            </div>

        </div>
    </section> --}}

    {{-- <section>
        <div class="container py-5">

            <div class="row">
                <div class="col-md-12">

                    <div class="card" id="chat3" style="border-radius: 15px;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                    <div class="p-3">

                                        <div class="input-group rounded mb-3">
                                            <input type="search" class="form-control rounded" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </div>

                                        <div class="overflow-auto mb-4" style="position: relative; height: 400px">
                                            <ul class="list-unstyled mb-0">
                                                @foreach ($chats as $chat)
                                                    <li class="p-2 border-bottom">
                                                        <a href="#!" class="d-flex justify-content-between">
                                                            <div class="d-flex flex-row">
                                                                <div>
                                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                        alt="avatar" class="d-flex align-self-center me-3"
                                                                        width="60">
                                                                    <span class="badge bg-success badge-dot"></span>
                                                                </div>
                                                                <div class="pt-1">
                                                                    <p class="fw-bold mb-0">{{ $chat->room }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="small text-muted mb-1">Just now</p>
                                                                <span
                                                                    class="badge bg-danger rounded-pill float-end">3</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-7 col-xl-8">

                                    <div class="pt-3 pe-3 overflow-auto" style="position: relative; height: 400px">

                                        <div class="d-flex flex-row justify-content-start">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                                    Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                    ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim ad
                                                    minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                        <div class="d-flex flex-row justify-content-start">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                                    Duis aute
                                                    irure
                                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                    nulla pariatur.
                                                </p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Excepteur
                                                    sint occaecat
                                                    cupidatat
                                                    non proident, sunt in culpa qui officia deserunt mollit anim id est
                                                    laborum.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                        <div class="d-flex flex-row justify-content-start">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                                    Sed ut
                                                    perspiciatis
                                                    unde omnis iste natus error sit voluptatem accusantium doloremque
                                                    laudantium, totam
                                                    rem
                                                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                    beatae vitae
                                                    dicta
                                                    sunt explicabo.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Nemo enim
                                                    ipsam
                                                    voluptatem quia
                                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                                    dolores eos
                                                    qui
                                                    ratione voluptatem sequi nesciunt.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                        <div class="d-flex flex-row justify-content-start">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                                    Neque porro
                                                    quisquam
                                                    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                                    sed quia non
                                                    numquam
                                                    eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                                    voluptatem.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim ad
                                                    minima veniam,
                                                    quis
                                                    nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                                                    aliquid ex ea
                                                    commodi
                                                    consequatur?</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                    </div>

                                    <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                            alt="avatar 3" style="width: 40px; height: 100%;">
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleFormControlInput2" placeholder="Type message">
                                        <a class="ms-1 text-muted" href="#!"><i
                                                class="bx bx-dots-vertical-rounded"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section> --}}

    <div class="col-lg-3 col-md-6">
        <small class="text-light fw-semibold mb-3">End</small>
        <div class="mt-3">
            <div class="offcanvas offcanvas-end" style="min-width: 60vw" tabindex="-1" id="offcanvasEnd"
                aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">Offcanvas End</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" id="chat3" style="border-radius: 15px;">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                                <div class="p-3">

                                                    <div class="input-group rounded mb-3">
                                                        <input type="search" class="form-control rounded"
                                                            placeholder="Search" aria-label="Search"
                                                            aria-describedby="search-addon" />
                                                        <span class="input-group-text border-0" id="search-addon">
                                                            <i class="fas fa-search"></i>
                                                        </span>
                                                    </div>

                                                    <div class="overflow-auto mb-4"
                                                        style="position: relative; height: 400px">
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($chats as $chat)
                                                                <li class="p-2 border-bottom">
                                                                    <a href="#!"
                                                                        class="d-flex justify-content-between">
                                                                        <div class="d-flex flex-row">
                                                                            <div>
                                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                                    alt="avatar"
                                                                                    class="d-flex align-self-center me-3"
                                                                                    width="60">
                                                                                <span
                                                                                    class="badge bg-success badge-dot"></span>
                                                                            </div>
                                                                            <div class="pt-1">
                                                                                <p class="fw-bold mb-0">
                                                                                    {{ $chat->room }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pt-1">
                                                                            <p class="small text-muted mb-1">Just now
                                                                            </p>
                                                                            <span
                                                                                class="badge bg-danger rounded-pill float-end">3</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-10 col-lg-9 col-xl-8">
                                                <div class="pt-3 pe-3 overflow-auto"
                                                    style="position: relative; height: 400px">

                                                    <div class="d-flex flex-row justify-content-start">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                        <div>
                                                            <p class="small p-2 ms-3 mb-1 rounded-3"
                                                                style="background-color: #f5f6f7;">
                                                                Lorem ipsum
                                                                dolor
                                                                sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                tempor incididunt
                                                                ut labore et
                                                                dolore
                                                                magna aliqua.</p>
                                                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                                12:00 PM | Aug 13
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-end">
                                                        <div>
                                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
                                                                Ut enim ad
                                                                minim veniam,
                                                                quis
                                                                nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                                ea commodo
                                                                consequat.</p>
                                                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                                Aug 13</p>
                                                        </div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-start">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                        <div>
                                                            <p class="small p-2 ms-3 mb-1 rounded-3"
                                                                style="background-color: #f5f6f7;">
                                                                Duis aute
                                                                irure
                                                                dolor in reprehenderit in voluptate velit esse cillum
                                                                dolore eu fugiat
                                                                nulla pariatur.
                                                            </p>
                                                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                                12:00 PM | Aug 13
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-end">
                                                        <div>
                                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
                                                                Excepteur
                                                                sint occaecat
                                                                cupidatat
                                                                non proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est
                                                                laborum.</p>
                                                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                                Aug 13</p>
                                                        </div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-start">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                        <div>
                                                            <p class="small p-2 ms-3 mb-1 rounded-3"
                                                                style="background-color: #f5f6f7;">
                                                                Sed ut
                                                                perspiciatis
                                                                unde omnis iste natus error sit voluptatem accusantium
                                                                doloremque
                                                                laudantium, totam
                                                                rem
                                                                aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                                quasi architecto
                                                                beatae vitae
                                                                dicta
                                                                sunt explicabo.</p>
                                                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                                12:00 PM | Aug 13
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-end">
                                                        <div>
                                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
                                                                Nemo enim
                                                                ipsam
                                                                voluptatem quia
                                                                voluptas sit aspernatur aut odit aut fugit, sed quia
                                                                consequuntur magni
                                                                dolores eos
                                                                qui
                                                                ratione voluptatem sequi nesciunt.</p>
                                                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                                Aug 13</p>
                                                        </div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-start">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                        <div>
                                                            <p class="small p-2 ms-3 mb-1 rounded-3"
                                                                style="background-color: #f5f6f7;">
                                                                Neque porro
                                                                quisquam
                                                                est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                                                adipisci velit,
                                                                sed quia non
                                                                numquam
                                                                eius modi tempora incidunt ut labore et dolore magnam
                                                                aliquam quaerat
                                                                voluptatem.</p>
                                                            <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                                12:00 PM | Aug 13
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row justify-content-end">
                                                        <div>
                                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
                                                                Ut enim ad
                                                                minima veniam,
                                                                quis
                                                                nostrum exercitationem ullam corporis suscipit
                                                                laboriosam, nisi ut
                                                                aliquid ex ea
                                                                commodi
                                                                consequatur?</p>
                                                            <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                                Aug 13</p>
                                                        </div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                            alt="avatar 1" style="width: 45px; height: 100%;">
                                                    </div>

                                                </div>

                                                <div
                                                    class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                        alt="avatar 3" style="width: 40px; height: 100%;">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="exampleFormControlInput2" placeholder="Type message">
                                                    <a class="ms-1 text-muted" href="#!"><i
                                                            class="bx bx-dots-vertical-rounded"></i></a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <!-- Content -->
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang kembali Admin !</h5>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, ullam!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('produk.index') }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">produks</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_produks }}</h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('voucher.index') }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Pendapatan vouchers</span>
                    <h3 class="card-title  mb-2 text-center">Rp. {{ number_format($pendapatan_voucher, 0, ',', '.') }}</h3>
                </div>
            </div>
        </div>
        {{-- <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('top_up.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Top Up</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_top_ups }}</h3>
                </div>
            </div>

        </div> --}}
        <div class="col-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('review_produk.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Pendapatan Penjualan</span>
                    <h3 class="card-title  mb-2 text-center">Rp. {{ number_format($pendapatan_transaksi, 0, ',', '.') }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('user.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">produk Terjual</span>
                    <h3 class="card-title  mb-2 text-center">{{ $produk }}</h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('transaksi.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Transaksi</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_transaksis }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Barang Masuk dan Keluar / Bulan</h5>
                        <canvas id="barChart" style="margin: 10px"></canvas>
                    </div>
                    <div class="col-md-4">
                        <canvas style="margin: 20px 10px 0px" id="doughnutChart"></canvas>
                        <h5 class="card-title mx-5 my-3 pb-3">Barang Masuk/Keluar</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-4">
                        <h5 class="m-0 me-2">Data Pembelian/bulan</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buy-now">
        <button class="btn btn-danger btn-buy-now" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
            <i class='bx bxs-chat'></i> Pesan</a>
        </button>
    </div>

    <!--/ Order Statistics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('doughnutChart');
        const doughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $barang_masuk }}, {{ $barang_keluar }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        const ct3 = document.getElementById('barChart');
        const barChart = new Chart(ct3, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barang_masuk_jan }},
                            {{ $barang_masuk_feb }},
                            {{ $barang_masuk_mar }},
                            {{ $barang_masuk_apr }},
                            {{ $barang_masuk_mei }},
                            {{ $barang_masuk_jun }},
                            {{ $barang_masuk_jul }},
                            {{ $barang_masuk_agu }},
                            {{ $barang_masuk_sep }},
                            {{ $barang_masuk_okt }},
                            {{ $barang_masuk_nov }},
                            {{ $barang_masuk_des }}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Barang Keluar',
                        data: [
                            {{ $barang_keluar_jan }},
                            {{ $barang_keluar_feb }},
                            {{ $barang_keluar_mar }},
                            {{ $barang_keluar_apr }},
                            {{ $barang_keluar_mei }},
                            {{ $barang_keluar_jun }},
                            {{ $barang_keluar_jul }},
                            {{ $barang_keluar_agu }},
                            {{ $barang_keluar_sep }},
                            {{ $barang_keluar_okt }},
                            {{ $barang_keluar_nov }},
                            {{ $barang_keluar_des }}
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <script>
        const cty = document.getElementById('lineChart');
        const lineChart = new Chart(cty, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_jan }},
                        {{ $pembelian_feb }},
                        {{ $pembelian_mar }},
                        {{ $pembelian_apr }},
                        {{ $pembelian_mei }},
                        {{ $pembelian_jun }},
                        {{ $pembelian_jul }},
                        {{ $pembelian_agu }},
                        {{ $pembelian_sep }},
                        {{ $pembelian_okt }},
                        {{ $pembelian_nov }},
                        {{ $pembelian_des }}
                    ],
                    backgroundColor: [
                        'rgba(0, 152, 217, 0.56)',
                    ],
                    borderColor: [
                        'rgba(1, 255, 83, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <!-- / Content -->
@endsection
