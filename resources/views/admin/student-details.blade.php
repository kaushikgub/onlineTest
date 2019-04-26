@extends('admin-master')

@section('body')
    <div class="table-responsive"  style="overflow-x:auto;display: block !important;">
        <table class="table">
            <thead>
            <tr class="bg-success text-white">
                <th scope="col">Package</th>
                <th scope="col">Feedbacks</th>
            </tr>
            </thead>
            <tbody>
                <tr class="border-bottom border-dark">
                    <th scope="row">
                        @foreach($package as $package)
                            {{$package->name}}
                        @endforeach
                    </th>

                    <th scope="row">
                        @foreach($feedback as $feedback)
                            {{$feedback->rating}}
                        @endforeach
                    </th>
                </tr>
            </tbody>
        </table>
    </div>


@endsection