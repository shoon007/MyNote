@extends('layouts.master')
@section('content')
    <div class="note-title d-flex justify-content-between align-items-center mt-2 mb-5">
        <h2 class=" curly-title link-offset-2">Note Lists</h2>

        <a href="{{ route('note#createPage') }}">
            <button class="Btn">
                Add Note <i class="fa-solid fa-plus ps-2"></i>
            </button>
        </a>
    </div>
    @if (session('createSuccess'))
        <div class="alert alert-box alert-success alert-dismissible fade show" role="alert">
            <p class="text-success mb-0">{{ session('createSuccess') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('updateSuccess'))
        <div class="alert alert-box alert-success alert-dismissible fade show" role="alert">
            <p class="text-success mb-0">{{ session('updateSuccess') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="note">

        @if (count($notes) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($notes as $note)
                        <tr>
                            <td>{{ $note->id }} </td>
                            <td>{{ $note->title }}</td>
                            <td>
                                {{ substr($note->description, 0, 20) }}... </td>
                            <td>{{ $note->status == 1 ? 'On' : 'Off' }} </td>
                            <td>

                                <ul class="wrapper">
                                    <a href="{{ route('note#details', $note->id) }}">
                                        <li class="icon ">
                                            <span class="tooltip">Details</span>
                                            <span> <i class="fa-solid fa-circle-info detail "></i></span>
                                        </li>
                                    </a>
                                    <a href="{{ route('note#edit', $note->id) }}">
                                        <li class="icon">
                                            <span class="tooltip">Edit</span>
                                            <span> <i class="fa-solid fa-file-pen pen wrapper "></i></span>
                                        </li>
                                    </a>
                                    <a href="{{ route('note#delete', $note->id) }}">
                                        <li class="icon ">
                                            <span class="tooltip">Delete</span>
                                            <span> <i class="fa-solid fa-trash delete "></i></span>
                                        </li>
                                    </a>

                                </ul>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <h1 class="text-center empty-box">
                There is no Note yet!

            </h1>
        @endif
        <div class="mt-4">
            {{ $notes->links() }}
        </div>

    </div>

@endsection
