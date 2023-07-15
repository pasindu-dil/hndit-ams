@extends('layouts.app')

@section('title', 'Assignment')

@section('content')
    <div class="row row-cards row-deck">
        <div class="row col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Upcomming events</h3>
                </div>
                <div class="card-body">
                    <div class=col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Built card</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt,
                                iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A
                                consequuntur, deserunt eaque error nulla temporibus!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-8">
            <div class="card">
                <iframe
                    src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FColombo&src=ZGlsc2hhbnBhc2luZHU3MTlAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4tZ2IubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043&color=%230B8043"
                    style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
@endsection
