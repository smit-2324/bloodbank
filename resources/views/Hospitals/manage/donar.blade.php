@extends('layout.hospitals.master')

@section('heading')
{{ __('All Donars') }}
@stop

@section('content')
<link href="<?= env('SITE_URL'); ?>/css/font.css" rel="stylesheet">
<!doctype html>
<html lang="en">

<body>

    <div class="table-responsive">
        <table class="table mb-0" id="clients-table">
            <thead class="table-light">
                <tr>
                    <th>{{ __('Ic') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Contact Number') }}</th>
                    <th>{{ __('Blood Type') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $data)

                <tr>
                    <td>
                    @if (!empty($data['ic']))
                            {{ $data['ic'] }}
                            @endif
                    </td>
                    <td>
                    @if (!empty($data['name']))
                            {{ $data['name'] }}
                            @endif
                    </td>
                    <td>
                    @if (!empty($data['email']))
                        {{ $data['email'] }}
                        @endif
                    </td>
                    <td>
                        @if(!empty($data['phoneNo']))
                        {{ $data['phoneNo'] }}
                        @endif
                    </td>

                    <td>
                        @if(!empty($data['bloodTypes']['bloodType']))
                        {{ $data['bloodTypes']['bloodType'] }}
                        @endif
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
<style type="text/css">
    .table>tbody>tr>td {
        border-top: none !important;
    }

    .table-actions {
        opacity: 0;
    }

    #clients-table tbody tr:hover .table-actions {
        opacity: 1;
    }
</style>
{{-- <script>
    $(document).ready(function() {
        if (!getCookie("step_client_index")) {
            var canCreateTask = '{{ auth()->user()->can('
            task - create ') }}';
            var canCreateProject = '{{ auth()->user()->can('
            project - create ') }}';

            $("#projects").addClass("in");
            $("#tasks").addClass("in");
            // Instance the tour
            var tour = new Tour({
                storage: false,
                backdrop: true,
            });
            tour.addStep({
                element: "#clients-table",
                title: "{{ trans('Client overview') }}",
                content: "{{ trans('All your active clients will be shown here') }}",
                placement: 'top'
            })
            if (canCreateTask) {
                tour.addStep({
                    element: "#newTask",
                    title: "{{ trans('Create task') }}",
                    content: "{{ trans('Same as with clients you can create a new task. Tasks has a primary user assigned, and a client, it can also be related to a project') }}"
                })
            }
            if (canCreateProject) {
                tour.addStep({
                    element: "#newProject",
                    title: "{{ trans('Create project') }}",
                    content: "{{ trans('Projects are used to keep track of tasks that might be related to a bigger assignment for the client. And gives the possibility of multiple people working various tasks and keep track of the tasks.') }}",
                })
            }
            // Initialize the tour
            tour.init();

            tour.start();
            setCookie("step_client_index", true, 1000)
        }

        function setCookie(key, value, expiry) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 2000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        }

        function getCookie(key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        }
    });
    var $rows = $('#clients-table tr');
    $('#searchname').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
</script> --}}
@endpush
