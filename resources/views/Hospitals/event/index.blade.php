@extends('layout.hospitals.master')

@section('heading')
{{ __('All Events') }}
@stop

@section('content')
<link href="<?= env('SITE_URL'); ?>/css/font.css" rel="stylesheet">
<!doctype html>
<html lang="en">

<body>

    <div class="table-responsive">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{route('Hospitals.event.create')}}" class="btn btn-primary col-sm-1">Create Event</a>
            </div>
        </div>
        <table class="table mb-0" id="clients-table">
            <thead class="table-light">
                <tr>
                    <th>{{ __('Id') }}</th>
                    <th>{{ __('Type') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Image') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)

                <tr>
                    <td>
                        @if (!empty($event['hospital']['hospitalName']))
                        {{ $event['hospital']['hospitalName'] }}
                        @endif
                    </td>
                    <td>
                        @if (!empty($event['type']))
                        {{ $event['type'] }}
                        @endif
                    </td>
                    <td>
                        @if (!empty($event['name']))
                        {{ $event['name'] }}
                        @endif
                    </td>
                    <td>
                        @if(!empty($event['image']))
                        <img src="{{url($event['image'])}}" alt="Image" />
                        @endif
                    </td>

                    <td>
                        @if(!empty($event['description']))
                        {{ $event['description'] }}
                        @endif
                    </td>
                    <td>
                        <a href="/edit/{{ $event['id'] }}" class="btn btn-primary col-sm-1">Edit</a><br><br>
                        <a href="/delete/{{ $event['id'] }}" class="btn btn-danger col-sm-1">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
    {{-- <span class="user-pagination" style="float: right;margin-right: 10%;">{{$client->links()}}</span> --}}
    </div>
    </div>


    </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->

    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
    </div>
</body>

</html>
@stop

@push('scripts')