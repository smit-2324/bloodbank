@include('layout.hospitals.master')
@section('content')
@if(!empty($totalClients))
<link href="<?=env('SITE_URL');?>/css/font.css" rel="stylesheet">

             <div class="row">
            <div class="col col-lg-6 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                             <h3>{{$totalClients}}</h3>
                             <p>{{ __('Total Merchants') }}</p>
                             <form action="{{route('manage.clients.allclients')}}" method="GET" style="display: flex">
						<input class="form-control" type="hidden" value="{{$from}}"  name="from" />
						<input class="form-control" type="hidden" value="{{$to}}" name="to" />
							<button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none; " class="small-box-footer"><a class="small-box-footer">{{ __('All Merchants') }} <i
                                            class="fa fa-arrow-circle-right"></i></a></button>
                                        </form>

                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col col-lg-6 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                            <h3>
                                    {{$leads}}
                                </h3>
                                <p>{{ __('Total leads') }}</p>
                                <form action="{{route('manage.clients.getleads')}}" method="GET" style="display: flex">
						<input class="form-control" type="hidden" value="{{$from}}"  name="from" />
						<input class="form-control" type="hidden" value="{{$to}}" name="to" />
							<button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none; " class="small-box-footer"><a class="small-box-footer">{{ __('All Leads') }} <i
                                            class="fa fa-arrow-circle-right"></i></a></button>
                                        </form>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="bx bxs-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        <div class="direct-tabel">
        <div class="divider-text">
            <h5 class="direct-title">Direct Merchant Submissions</h5>
            <div class="row direct-card">
                <div class="col col-lg-3 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>
                                    {{$application}}
                                </h3>
                                <p>{{ __('Total Application') }}</p>
                                <form action="{{route('manage.clients.getApplication')}}" method="GET" style="display: flex">
						<input class="form-control" type="hidden" value="{{$from}}"  name="from" />
						<input class="form-control" type="hidden" value="{{$to}}" name="to" />
							<button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none; " class="small-box-footer"><a class="small-box-footer">{{ __('Total Application') }} <i
                                            class="fa fa-arrow-circle-right"></i></a></button>
                                        </form>


                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-wpforms" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col col-lg-3 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>{{$submission}}</h3>

                                <p>{{ __('Total Submission') }}</p>
                                <form action="{{route('manage.clients.getsubmission')}}" method="GET" style="display: flex">
						<input class="form-control" type="hidden" value="{{$from}}"  name="from" />
						<input class="form-control" type="hidden" value="{{$to}}" name="to" />
							<button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none; " class="small-box-footer"><a class="small-box-footer">{{ __('Total Submission') }} <i
                                            class="fa fa-arrow-circle-right"></i></a></button>
                                        </form>
                                <!-- <a href="{{route('manage.clients.getsubmission')}}" class="small-box-footer">{{ __('Total Submission') }} <i
                                            class="fa fa-arrow-circle-right"></i></a> -->

                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-upload" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col col-lg-3 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>{{$incomplete}}</h3>

                                <p>{{ __('Total Incomplete') }}</p>
                                <form action="{{route('manage.clients.getpending')}}" method="GET" style="display: flex">
						<input class="form-control" type="hidden" value="{{$from}}"  name="from" />
						<input class="form-control" type="hidden" value="{{$to}}" name="to" />
							<button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none; " class="small-box-footer"><a class="small-box-footer">{{ __('Total Incomplete') }} <i
                                            class="fa fa-arrow-circle-right"></i></a></button>
                                        </form>

                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col col-lg-3 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>{{$offer}}</h3>

                                <p>{{ __('Offers') }}</p>
                                <form action="{{route('manage.clients.getoffer')}}" method="GET" style="display: flex">
						<input class="form-control" type="hidden" value="{{$from}}"  name="from" />
						<input class="form-control" type="hidden" value="{{$to}}" name="to" />
							<button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none; " class="small-box-footer"><a class="small-box-footer">{{ __('Total Offers') }} <i
                                            class="fa fa-arrow-circle-right"></i></a></button>
                                        </form>

                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-percent" aria-hidden="true"></i>
 </div>
                        </div>
                    </div>
                </div>
                </div>
</div>
            <div class="row">
            <div class="col col-lg-6 col-xs-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-lg-6 col-xs-6">
                                <h5 class="title">Submitted</h5>
                                <div class="count">
                                    <h2>$0</h2>
                                    <h5 class="title-count">Count: {{$submission}}</h5><br>
                                    <h6>Commission($0)</h6>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-xs-6">
                            <h5 class="approve-title">Offer</h5>
                            <div class="count">
                                <h2>${{$sum}}</h2>
                                <h5 class="title-count">Count: {{$offersubmission}}</h5><br>
                                <h6>Commission(${{$commission}})</h6>
                            </div>
                            </div>
                        </div><br>
                        <div class="col">
							<button type="button" class="btn btn-success px-5">Review Deals >> </button>
									</div><hr>
                        <div class="approved-progress">
                            <h6>Applications: {{$application}}</h6>
                            <div class="progress mb-3">
									<div class="progress-bar bg-success" role="progressbar" style="width: {{$application* 100/$totalClients}}%"></div>
							</div>
                        </div>
                        <div class="Submission-progress">
                            <h6>Submission: {{$submission}}</h6>
                            <div class="progress mb-3" style="height:7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{$submission * 100/$totalClients}}%"></div>
                                </div>
                        </div>

                        <div class="review-progress">
                             <h6>Incomplete: {{$incomplete}}</h6>
                            <div class="progress mb-4" style="height:7px;">
								<div class="progress-bar" role="progressbar" style="width: {{$incomplete* 100/$totalClients}}%"></div>
                            </div>
                        </div>

                        <div class="offer-progress">
                            <h6>Offers: {{$offer}}</h6>
                           <div class="progress mb-3" style="height:7px;">
                               <div class="progress-bar" role="progressbar" style="width: {{$offer* 100/$totalClients}}%"></div>
                           </div>
                       </div>

                        <div class="declined-progress">
                        <h6>Declined: {{$decline}}</h6>
                        <div class="progress mb-3" style="height:7px;">
							<div class="progress-bar bg-info" role="progressbar" style="width: {{$decline * 100/$totalClients}}%"></div>
						    </div>

                        </div>
                    </div>
                </div>
            </div>

                <div class="col col-lg-6 col-xs-6">
                    <div class="card radius-10">
                        <div class="card-body" style="padding-bottom: 0px;">
                            <div class="row">
                            <div class="col col-lg-6 col-xs-6">
                                <h5>Final Steps</h5>

                                <div class="singned-step">
                            <ul class="custome-main-section">
                                <li class="custome-sign-section">
                                 <span class="sign-title">No Contact</span><br>
                                 <span> Count: {{$nocontact}}</span><br>
                                <span class="total-amount">Total:$0</span>
                                </li>
                                <li class="custome-sign-section">
                                    <span class="Contract-title">Contract</span><br>
                                    <span>Count: {{$contract}}</span><br>
                                    <span class="total-amount">Total:$37,000</span>
                                </li>
                                <li class="custome-sign-section">
                                    <span class="approved-title">Incomplete</span><br>
                                        <span>Count: {{$incomplete}}</span><br>
                                        <span class="total-amount">Total:$240,000</span>
                                </li>
                            </ul>
                            <br>
                        </div>

                            </div>
                            <div class="col col-lg-6 col-xs-6 title-border">
                            <h5 class="fun-title">Funded Percetnage</h5>
                           @if((int)($funded * 100/$totalClients) < 50)<div class="progress-circle p{{(int)($funded * 100/$totalClients)}}">
                               @else <div class="progress-circle over50 p{{(int)($funded * 100/$totalClients)}}">
                                   @endif
                            <span>{{ (int)($funded * 100/$totalClients) }}%</span>
                            <div class="left-half-clipper">
                            <div class="first50-bar"></div>
                            <div class="value-bar"></div>
                            </div>
                            </div>
                            </div>
                            <hr style="padding: 0px;margin: 0px;">
                        <div class="row sub-fun-title">
                            <div class="col col-lg-6 col-xs-6" id="title-border">
                                <h5 class="sub-title">Submitted</h5>
                                <h4 class="price">74</h4>
                            </div>
                            <div class="col col-lg-6 col-xs-6">
                                <h5 class="fun-title">Funded</h5>
                                <h4 class="price">{{$funded}}</h4>
                            </div>

                        </div>
                        </div>
        @push('scripts')
            <script>
                $(document).ready(function(){
    $('.progressWrapper progress').each(function(){
      var prgsVal = $(this).data('value');
      var maxN = $(this).attr('max');
      var pop = prgsVal/maxN * 100

      $(this).prev().css('left', pop + '%').text(prgsVal);
      $(this).val(prgsVal);
    });
});
                $(document).ready(function () {
                    if(!'{{$settings->company}}') {
                        $('#modal-create-client').modal({backdrop: 'static', keyboard: false})
                        $('#modal-create-client').modal('show');
                    }
                    $('[data-toggle="tooltip"]').tooltip(); //Tooltip on icons top

                    $('.popoverOption').each(function () {
                        var $this = $(this);
                        $this.popover({
                            trigger: 'hover',
                            placement: 'left',
                            container: $this,
                            html: true,

                        });
                    });
                });
                $(document).ready(function () {
                    if(!getCookie("step_dashboard") && "{{$settings->company}}") {
                        $("#clients").addClass("in");
                        // Instance the tour
                        var tour = new Tour({
                            storage: false,
                            backdrop: true,
                            steps: [
                                {
                                    element: ".col-lg-12",
                                    title: "{{trans("Dashboard")}}",
                                    content: "{{trans("This is your dashboard, which you can use to get a fast and nice overview, of all your tasks, leads, etc.")}}",
                                    placement: 'top'
                                },
                                {
                                    element: "#myNavmenu",
                                    title: "{{trans("Navigation")}}",
                                    content: "{{trans("This is your primary navigation bar, which you can use to get around Daybyday CRM")}}"
                                }
                            ]
                        });

                        var canCreateClient = '{{ auth()->user()->can('manage-client-create') }}';
                        if(canCreateClient) {
                            tour.addSteps([
                                {
                                    element: "#newClient",
                                    title: "{{trans("Create New Client")}}",
                                    content: "{{trans("Let's take our first step, by creating a new client")}}"
                                },
                                {
                                    path: 'manage/clients/create'
                                }
                            ])
                        }

                        // Initialize the tour
                        tour.init();

                        tour.start();
                        setCookie("step_dashboard", true, 1000)
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
            </script>
        @endpush
@if(!$settings->company)
<div class="modal fade" id="modal-create-client" tabindex="-1" role="dialog">
    @include('manage.pages._firstStep')
</div>
@endif
@endif
@endsection

