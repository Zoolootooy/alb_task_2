@extends('partials/header')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered shadow-sm">
                        <thead>
                        <tr class="thead-dark text-center">
                            <th>№</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Report subject</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = ($members->currentPage() - 1) * 10?>
                        @foreach($members as $member)
                            <tr class="text-center">
                                <td class="align-middle">{{ ++$i  }}</td>
                                @if ($member['photo'] != null)
                                    <td class="td-photo">
                                        <div class="box">
                                            {{--                                    <img class="profile-img rounded-circle" src="public/images/{{$member->photo}}">--}}
                                            @if(preg_match('/^(https?)+[a-z, A-Z, 0-9, \/, \?, \:, \.]+$/', $member->photo) == 1)
                                                <div class="img_wrapper">
                                                    <img class="profile-img rounded-circle" src="{{$member->photo}}"
                                                         alt="avatar">
                                                </div>

                                            @else()
                                                <img class="profile-img rounded-circle"
                                                     src="{{ asset('storage/images/'.$member->photo)}}">
                                            @endif

                                        </div>
                                    </td>
                                @else
                                    <td class="td-photo">
                                        <div class="box">
                                            <img class="img rounded-circle" src="storage/default.jpg">
                                        </div>

                                    </td>
                                @endif


                                <td class="align-middle mw-20">{{ $member->firstname . " " . $member->lastname }}</td>
                                <td class="align-middle mw-30">{{ $member->rep_subject }}</td>
                                <td class="align-middle mw-20"><a
                                        href="{{ 'mailto:' . $member->email}}"> {{$member->email}}</a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                {{$members->links()}}
            </div>
        </div>
    </div>


@endsection
