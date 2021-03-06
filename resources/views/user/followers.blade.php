@extends('user.index')
@section('styles')

    <style type="text/css">
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }
    </style>
@endsection
@section('title')
    Followers
@endsection
@section('breadcrumb')
    Followers
@endsection
@section('container')

    <section class="content">
        @foreach($us as $follower)
            <div class="col-md-3" style="float: left;">
                <div class="card">

                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                             src="{{$follower->profile}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{$follower->name}}</h3>

                        <p class="text-muted text-center">{{$follower->job}}</p>
                        <p class="text-muted text-center">{{$follower->email}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="pull-right">{{DB::table('followers')
                ->where('user_id', $follower->id)
                ->count()}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="pull-right">{{DB::table('followers')
                ->where('follower_id', $follower->id)
                ->count()}}</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        <a href="#" class="btn btn-primary btn-block" style="background-color: red"><b>Block</b></a>
                    </div>
                </div>
            </div>


        @endforeach

    </section>
@stop
@section('js')

@endsection