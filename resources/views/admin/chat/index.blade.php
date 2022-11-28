@extends('admin.layouts.admin')
<link rel="stylesheet" href="{{ asset('css/chat.css') }}">
@section('content')
    {{-- <div class="card shadow-lg rounded card p-2 pb-3">
        <div class="card-header" id="#atas">
            <a href="{{ route('chat.create') }}" class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>Tambah Data</a>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="container">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>user_id</th>
                            <th>room</th>
                            <th>message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($chats))
                            @foreach ($chats as $chat)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $chat->user_id }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $chat->room }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $chat->message }}
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('chat.destroy', $chat->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalCenter{{ $chat->id }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalCenter{{ $chat->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Apakah Anda Yakin?
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                Kembali
                                                            </button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9">
                                    <div class='alert alert-primary text-center'>
                                        Tidak ada data
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <div id="app" class="app">

        <!-- LEFT SECTION -->

        <section id="main-left" class="main-left">
            <!-- header -->
            <div id="header-left" class="header-left">
                Mini Chat
            </div>

            <!-- chat list -->
            <div id="chat-list" class="chat-list">
                <!-- user lists -->
                {{-- @foreach ($friends as $friend)
                    @php
                        $avatar = 'ava' . rand(1, 8) . '.jpg';
                    @endphp --}}
                <div class="friends" data-id="id" data-name="id" data-avatar="">
                    <!-- photo -->
                    <div class="profile friends-photo">
                        <img src="" alt="">
                    </div>

                    <div class="friends-credent">
                        <!-- name -->
                        <span class="friends-name">adsad</span>
                        <!-- last message -->
                        <span class="friends-message friend-status">Offline</span>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </section>


        <!-- RIGHT SECTION -->
        <section id="main-empty" class="main-right">
            <p style="text-align: center; font-size: 35px">Welcome to mini chat</p>
        </section>
        <section id="main-right" class="main-right hidden">
            <!-- header -->
            <div id="header-right" class="header-right">
                <!-- profile pict -->
                <div id="header-img" class="profile header-img">
                    <img src="{{ asset('assets/images/ava2.jpg') }}" alt="">
                </div>

                <!-- name -->
                <h4 class="name friend-name">Mario Gomez</h4>
            </div>

            <!-- chat area -->
            <div id="chat-area" class="chat-area">
                <!-- chat content -->

            </div>

            <!-- typing area -->
            <div id="typing-area" class="typing-area">
                <!-- input form -->
                <input id="type-area" class="type-area" placeholder="Type something...">
            </div>
        </section>
    </div>
    <div id="creator" class="creator">
        <p>Login as <span>{{ auth()->user()->name }}</span></p>
    </div>
    <script src="{{ asset('js/chat.js') }}"></script>
@endsection
